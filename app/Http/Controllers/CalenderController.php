<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Date;

class CalenderController extends Controller
{



    public function index($month = NULL, $year = NULL)
    {


        if($month == NULL && $year == NULL) {
            $now = Carbon::create(Carbon::now()->year,Carbon::now()->month);
            $month = $now->format('m');
            $year = $now->format('Y');
        }
        elseif($month != NULL && $year == NULL) {
            $now = Carbon::create(Carbon::now()->year,$month);
            $month = $now->format('m');
            $year = $now->format('Y');
        }

        elseif($month == NULL && $year != NULL) {
            $now = Carbon::create($year,Carbon::now()->month);
            $month = $now->format('m');
            $year = $now->format('Y');
        }
        else {
            $now = Carbon::create($year,$month);
            $month = $now->format('m');
            $year = $now->format('Y');
        }


            $searchstring = "last monday of ".$now->subMonth(1);
            $last_monday_prv_month = new Carbon($searchstring);

            //getting all target dates from model
            $dates = Date::all();

            foreach($dates as $date) {
                $targets[] = date('j.m.y',strtotime($date->target));
            }

                for($a=0; $a <= 41; $a++) {

                    if($a == 0) {
                        $data[] = $last_monday_prv_month->format('j.m.y');
                    }
                    else {

                        $data[] = $last_monday_prv_month->addDay(1)->format('j.m.y');
                    }
                }

        $month_array = array("dummy", "Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember");




        return view('index')
            ->with('data', $data)
            ->with('month', $month)
            ->with('year', $year)
            ->with('month_array', $month_array)
            ->with('targets', $targets);

    }
}
