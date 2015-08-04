<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show rooms angular entry point
     *
     * @return Response
     */
    public function rooms()
    {
        return view('admin.rooms.index');
    }

    /**
     * Show rooms angular entry point
     *
     * @return Response
     */
    public function roomTypes()
    {
        return view('admin.room-types.index');
    }

    /**
     * Show reservations angular entry point
     *
     * @return Response
     */
    public function reservations()
    {
        return view('admin.reservations.index');
    }

    /**
     * Show profile angular entry point
     *
     * @return Response
     */
    public function profile()
    {
        return view('admin.profile.index');
    }

}
