<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function why_us()
    {
        return view('why_us');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function energy_service()
    {
        return view('services.energy');
    }

    public function telecommunication()
    {
        return view('services.telco');
    }

    public function send_mail(Request $request)
    {
        $data= $request->all();
        //ann joo email
        Mail::to('wegohoc626@ukgent.com')->send(new \App\Mail\ContactUs($data));

     //   dd("Email is Sent.");

        return 'OK';
        
    }
}
