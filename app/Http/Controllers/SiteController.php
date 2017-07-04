<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Mail\ContactForm;

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

    public function sendMessage(Request $request) {
        $valid_contacts = ['pastor', 'secretary', 'council', 'tech'];
        if (in_array($request->input('contact'), $valid_contacts)) {
            \Mail::to($request->input('contact') . '@stjohnscccc.org')->send(new ContactForm(
                $from_name = $request->input('name'),
                $from_email = $request->input('email'),
                $message_text = $request->input('message')
            ));
            $request->session()->flash('status', 'Email sent successfully!');
            return back();
        } else {
            abort(400, 'Invalid Contact');
        }
    }

}
