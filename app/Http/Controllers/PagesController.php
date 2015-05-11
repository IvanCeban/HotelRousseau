<?php namespace App\Http\Controllers;

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

    public function rooms()
    {
        return view('rooms');
    }

    public function contact()
    {
        return view('contact');
    }

    public function restaurant()
    {
        return view('restaurant');
    }
}
