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

class IndexController extends Controller
{
    public function getDashBoard(){
    	date_default_timezone_set('Asia/Ho_Chi_Minh');
        $races  = Race::all();

        $calendars = DB::table('calendar')
            ->join('race', 'race.id', '=', 'calendar.id_race')
            ->select('*','calendar.id')
            ->get();
        $arrayLastTimestamp = $this->getLastTimestamp($calendars);
        $lastRace = DB::table('race')->join('calendar', 'race.id', '=', 'calendar.id_race')->where('calendar.end','=',$arrayLastTimestamp['last_timestamp_end'] - $arrayLastTimestamp['last_diffence']*3600)->select('*','race.id')->first();
    	return view('layouts/master',compact('races','lastRace','calendars'));
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
