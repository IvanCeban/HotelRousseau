<?php namespace App\Http\Controllers;

use Input;
use Request;
use Mail;
use Validator;
use Session;
use App\Order;

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
        if (Request::isMethod('post'))
        {
            $sessionId = Session::getId();
            if(Order::where('session_id', $sessionId)->first() === null){
                $order = Order::create(['session_id' => $sessionId]);
            }else{
                $order = Order::where('session_id', $sessionId)->first();
            }
            $order->checkin_date = Request::input('checkin_date');
            $order->checkout_date = Request::input('checkout_date');
            $order->adults = Request::input('adults');
            $order->kids = Request::input('kids');
            $order->ages = serialize(Request::input('age'));
            $order->save();

        }
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
                $message->to(Input::get('topic'), 'Hotel Rousseau')->subject('New Contact Form');
            });
            return view('contact')->with('status', 'success');
        }
        return view('contact');
    }
}
