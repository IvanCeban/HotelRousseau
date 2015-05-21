<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Request;
use Mail;
use Validator;

class PagesController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function hotel()
    {
        return view('hotel');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function rooms_introduction()
    {
        return view('rooms_introduction');
    }

    public function restaurant()
    {
        return view('restaurant');
    }

    public function offers()
    {
        return view('offers');
    }

    public function wellness_center()
    {
        return view('wellness_center');
    }

    public function contact()
    {
        if (Request::isMethod('post'))
        {
            $input = Request::all();

            $validator = Validator::make($input,
                ['name' => 'required',
                 'email' => 'required|email',
                 'topic' => 'required',
                 'message' => 'required']
            );

            if ($validator->fails())
            {
                return view('contact')->withErrors($validator->errors());
            }

            Mail::send('emails.contact', ['input' => $input], function($message  )
            {
                $message->to(/*Input::get('topic')*/'cojocaru.vadim@gmail.com', 'Hotel Rousseau')->subject('New Contact Form');
            });
            return view('contact')->with('status', 'success');
        }
        return view('contact');
    }
}
