<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ICal;
use App\Calendar;
use App\Race;
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
        foreach($html->find('.race-list .race') as $element) {
            $img_country =$element->find("div.country div.flag img", 0)->src; 
            $name_country =$element->find("div.country .name", 0)->plaintext; 
            $race_name = $element->find(".race-details .race-title a", 0)->plaintext;
            $date_from = $element->find(".race-details .race-date-full .from", 0)->plaintext;
            $date_to = $element->find(".race-details .race-date-full .to", 0)->plaintext;
            $country =[];
            $country['image'] = $img_country;
            $country['name'] = $name_country;

            $item = array();
            $item["country"]= json_encode($country);
            $item["race_name"]= $race_name;
            $item["date_from"]= $date_from;
            $item["date_to"]= $date_to ;

            $data[] = $item;
                
            // echo $img_country    . '<br>';
            // $data =   $element->outertext;
        }
        $this->saveRace($data);
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
            ->select('calendar.end','calendar.id','calendar.difference')
            ->get();
        $arrayLastTimestamp = $this->getLastTimestamp($calendars);
        $lastRace = DB::table('race')->join('calendar', 'race.id', '=', 'calendar.id_race')->where('calendar.end','=',$arrayLastTimestamp['last_timestamp_end'] - $arrayLastTimestamp['last_diffence']*3600)->select('*','race.id')->first();
        return view('test/swipper',compact('races','lastRace'));
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
}
