<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class CalenderController extends Controller
{
    public function index()
    {


        $now = Carbon::create(Carbon::now()->year,10);
        $searchstring = "first monday of ".$now;
        $first_monday = new Carbon($searchstring);

        if(intval($first_monday->toDayDateTimeString()) == 1) {

        }

        else {

            $searchstring = "last monday of ".$now->subMonth(1);
            $last_monday_prv_month = new Carbon($searchstring);

                for($a=0; $a <= 41; $a++) {

                    if($a == 0) {
                        $data[] = $last_monday_prv_month->format('j.m.y');
                    }
                    else {
                        $data[] = $last_monday_prv_month->addDay(1)->format('j.m.y');
                    }
                }



        }

        /


        return view('index')->with('data', $data);
    }
}
