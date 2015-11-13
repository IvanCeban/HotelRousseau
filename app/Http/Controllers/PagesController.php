<?php namespace App\Http\Controllers;

use App\RoomType;
use Input;
use Request;
use Mail;
use Validator;
use Session;
use App\Order;
use App\Room;

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
        $sessionId = Session::getId();
        if(Order::where('session_id', $sessionId)->first() === null){
            $order = Order::create(['session_id' => $sessionId]);
        }else{
            $order = Order::where('session_id', $sessionId)->first();
        }

        if (Request::isMethod('post'))
        {
            $order->checkin_date = Request::input('checkin_date');
            $order->checkout_date = Request::input('checkout_date');
            $order->nights = Request::input('nights');
            $order->adults = Request::input('adults');
            $order->kids = Request::input('kids');
            $order->ages = serialize(Request::input('age'));
            $order->save();
            //dd($order);
        }

        $order = Order::where('session_id', $sessionId)->first();

        $rooms = Room::all();
        $roomTypes = RoomType::all();
        return view('hotel', compact('rooms', 'roomTypes', 'order'));
    }

    public function hotelInit(){

        $sessionId = Session::getId();
        if(Order::where('session_id', $sessionId)->first() !== null){
            $order = Order::where('session_id', $sessionId)->first();
        }else{
            $order = false;
        }

        $rooms = Room::orderBy('id','desc')->get()->toArray();
        $sortedRooms = array();

        foreach ($rooms as $room) {
            $roomTypeId = $room['room_type_id'];
            if (isset($sortedRooms[$roomTypeId])) {
                $sortedRooms[$roomTypeId][] = $room;
            } else {
                $sortedRooms[$roomTypeId] = array($room);
            }
        }
        return ['order' => $order, 'rooms'=>$rooms , 'sortedRooms'=>$sortedRooms , 'roomTypes'=>RoomType::all(), 'indexedRoomTypes'=>RoomType::lists('title', 'id')->all()];
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
                $message->to('info@hotelrousseau.ch')->subject('New Contact Form');
            });
            return view('contact')->with('status', 'success');
        }
        return view('contact');
    }
}
