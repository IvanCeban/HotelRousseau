<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Room;
use Request;

class RoomsController extends Controller {

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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$rooms = Room::all();
		return $rooms;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$room = Room::create(Request::all());
		return $room;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$room = Room::find($id);
		$room->title = Request::input('title');
		$room->save();

		return $room;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Room::destroy($id);
	}

}
