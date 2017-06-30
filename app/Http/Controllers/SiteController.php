<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SiteController extends Controller
{

    public function index() {
        /* Determine Winter or Summer Worship */
        $labor_day = Carbon::parse('first monday of september this year');
        $memorial_day = Carbon::parse('last monday of may this year -1week');
        $is_summer_time = Carbon::now() > $memorial_day && Carbon::now() < $labor_day;
        return view('index')
            ->with('worship_time', $is_summer_time ? "9:30am Worship" : "9am Bible Study, 10:30am Worship");
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

}
