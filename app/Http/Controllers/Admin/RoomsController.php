<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Room;
use App\RoomPhoto;
use App\RoomType;
use Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
		return ['rooms'=>Room::orderBy('id','desc')->get(), 'roomTypes'=>RoomType::all(), 'indexedRoomTypes'=>RoomType::lists('title', 'id')->all()];
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
		$room->update(Request::all());
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

	/**
	 * Get all photos of a given room
	 *
	 * @param int $id
	 * @return Response
	 */
	public function getPhotos($id){
		return Room::find($id)->photos;
	}

	/**
	 * Save uploaded photos
	 *
	 * @return Response
	 */
	public function uploadPhotos(){
		$file = Request::file('file');
		$extension = $file->getClientOriginalExtension();
		$filePath = 'rooms/'.Request::get('roomId').'/';
		Storage::disk('local')->put($filePath.$file->getFilename().'.'.$extension,  File::get($file));
		$entry = new RoomPhoto();
		$entry->room_id = Request::get('roomId');
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->path = $filePath.$file->getFilename().'.'.$extension;
		$entry->save();
		return $entry;
	}

}
