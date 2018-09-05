<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ICal;
use App\Calendar;
use App\Race;
use App\Team;
use App\Driver;
use Datetime;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function cronData(){
    	date_default_timezone_set('Asia/Ho_Chi_Minh');

    	$ical   = new ICal('../ical.ics');
    	$events = $ical->events();
    	$data= [];
    	foreach ($events as $event) {
    		$start= $ical->iCalDateToUnixTimestamp($event['DTSTART']);
    		$end= $ical->iCalDateToUnixTimestamp($event['DTEND']);
    		$item =[];
    		$item['uid'] = $event['UID'];
    		$item['summary'] = $event['SUMMARY'];
    		$item['start'] = $start;
    		$item['end'] = $end;

    		$data[] = $item;
    	}

    	$this->saveDataCalendar($data);
    }
    public function saveDataCalendar($data){

        foreach ($data as  $value) {
            $calendar = new Calendar;
            $calendar->uid = $value['uid'];
            $calendar->summary = $value['summary'];
            $calendar->start = $value['start'];
            $calendar->end = $value['end'];
            $calendar->year = date('Y',time());
            $calendar->difference = 0;
            $calendar->created_at = new Datetime();
            $calendar->save();
        }
        
    }
    public function getDataCalendar(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $timeOriginal = [];
        
        foreach (Calendar::all() as $key => $value) {
            $d=getdate($value->start+$value->difference*3600);
            // $timeOriginal[] = date('d.m.Y H:i:s', $value->start+$value->difference*3600);
            $timeOriginal[] = $d['weekday'];
        }
        return $timeOriginal;
    }
    public function getDataInfo(){
        include('simple_html_dom.php');
        $html = file_get_html('https://www.formula1.com/');
        $data = []; 
        foreach($html->find('.race-list .race') as $key =>$element) {
            $img_country =$element->find("div.country div.flag img", 0)->src; 
            $name_country =$element->find("div.country .name", 0)->plaintext; 
            $race_name = $element->find(".race-details .race-title a", 0)->plaintext;
            $date_from = $element->find(".race-details .race-date-full .from", 0)->plaintext;
            $date_to = $element->find(".race-details .race-date-full .to", 0)->plaintext;
            $url_detail_race = $element->find(".race-details .race-title a", 0)->href;
            $country =[];
            $country['image'] = $img_country;
            $country['name'] = $name_country;

            $item = array();
            $item["country"]= json_encode($country);
            $item["race_name"]= $race_name;
            $item["date_from"]= $date_from;
            $item["date_to"]= $date_to ;

            $data[] = $item;
            DB::table('race')->where('id', $key+1)->update(['url_detail_race' => $url_detail_race]);    
            DB::table('race')->where('id', $key+1)->update(['country' => json_encode($country)]);    
            echo $img_country. '<br>' ;
            // $data =   $element->outertext;
        }
        // $this->saveRace($data);
       // return view('test/clock',compact('data'));
    }
    public function saveRace($races){
        foreach ($races as  $value) {
           $race = new Race;
           $race->country = $value['country'];
           $race->name_race = $value['race_name'];
           $race->date_from = $value['date_from'];
           $race->date_to = $value['date_to'];
           $race->created_at = new Datetime();
           $race->save();
       }
    }
    public function getDataRace(){
        $races = DB::table('calendar')
            ->join('race', 'race.id', '=', 'calendar.id_race')
            ->select('*')
            ->get();
        var_dump($races);die;
    }
    public function getSwipper(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $races  = Race::all();

        $calendars = DB::table('calendar')
            ->join('race', 'race.id', '=', 'calendar.id_race')
            ->select('*','calendar.id')
            ->get();
        $arrayLastTimestamp = $this->getLastTimestamp($calendars);
        $lastRace = DB::table('race')->join('calendar', 'race.id', '=', 'calendar.id_race')->where('calendar.end','=',$arrayLastTimestamp['last_timestamp_end'] - $arrayLastTimestamp['last_diffence']*3600)->select('*','race.id')->first();
        return view('test/swipper',compact('races','lastRace','calendars'));
    }
    public function getLastTimestamp($calendars){
        $last_timestamp_end = 0;
        $last_diffence = 0;
        foreach ($calendars as $key=>$calendar) {
            if($calendar->id % 5 == 0){
                $time_end = $calendar->end + $calendar->difference*3600;
                $last_timestamp_end = $time_end;
                $last_diffence = $calendar->difference;
                if($time_end >time()){
                    break;
                }
            }
        }
        return  array('last_timestamp_end'=>$last_timestamp_end,'last_diffence'=>$last_diffence);
    }
    public function getDataDrivers(){
        include('simple_html_dom.php');
        $html = file_get_html('https://www.formula1.com/en/championship/drivers.html');
        $isSave = count(Driver::all()) == 0?true:false;
        if($isSave){
            foreach($html->find('.driver-index-teasers a') as $key =>$element) {
                $url_driver =$element->href;
                $image_driver =$element->find("div.driver-image-crop img", 0)->src; 
                $number_driver = $element->find("div.driver-number span", 0)->plaintext;
                $name_driver = $element->find("h1.driver-name", 0)->plaintext;
                $name_team = $element->find("p.driver-team span", 0)->plaintext;
                $team = DB::table('teams')->where('name_team','=',$name_team)->select('id')->first();
                $id_team = $team->id;

                $driver = new Driver;
                $driver->url_driver = $url_driver;
                $driver->image_driver = $image_driver;
                $driver->number_driver = $number_driver;
                $driver->name_driver = $name_driver;
                $driver->id_team = $id_team;
                $driver->created_at = new Datetime();
                $driver->save();
            }
        }
        
    }
    public function getDataTeams(){
        include('simple_html_dom.php');
        $html = file_get_html('https://www.formula1.com/en/championship/teams.html');
        $isSave = count(Team::all()) == 0?true:false;
        if($isSave){
            foreach($html->find('ul.teamindex-teamteasers li.teamindex-teamteaser') as $key =>$element) {
                $url_team = $element->find(".teamteaser-wrapper", 0)->href;
                $img_country_team = $element->find(".teamteaser-flag img", 0)->src;
                $name_team = $element->find(".teamteaser-title", 0)->plaintext;
                $img_team = $element->find("div.teamteaser-sponsor img", 0)->src;
                $podiums = $element->find(".stat-list .stat-value", 0)->plaintext;
                $championships = $element->find(".stat-list .stat-value", 1)->plaintext;
                $img_car_team = $element->find(".teamteaser-image .fom-adaptiveimage img", 0)->src;

                $style = $element->find("div.teamteaser-image .team-color", 0)->style;
                $data_color = explode(" ",$style);
                $color_team = $data_color[1];

                $team = new Team;
                $team->url_team = $url_team;
                $team->img_country_team = $img_country_team;
                $team->name_team = $name_team;
                $team->podiums = $podiums;
                $team->img_team = $img_team;
                $team->championships = $championships;
                $team->img_car_team = $img_car_team;
                $team->color_team = $color_team;
                $team->created_at = new Datetime();
                $team->save();
            }
        }
        
    }
    public function getStadings(){
         include('simple_html_dom.php');
        $html = file_get_html('https://www.formula1.com/en.html');
        $data= "";
        foreach($html->find('div.current-standings .tab-content .driver_standings table') as $key =>$element) {
            $data =  $element->outertext;
        }
        return view('test/standing',compact('data'));
    }
    public function getDataStandings($year,$type){
         include('simple_html_dom.php');
        $path = 'https://www.formula1.com/en/results.html/'.$year.'/'.$type.'.html';
        $html = file_get_html($path);
        
        echo $html->find(".resultsarchive-content", 0)->outertext;

    }
}
