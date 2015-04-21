<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {

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
		return ['user'=> Auth::user()];
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
		$user = User::find($id);
		$user->update(Request::all());
		return $user;
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
	 * Save uploaded photos
	 *
	 * @return Response
	 */
	public function uploadPhoto(){
		$file = Request::file('file');
		$extension = $file->getClientOriginalExtension();
		$filePath = 'profiles/'.Request::get('userId').'/';
		Storage::disk('local')->put($filePath.$file->getFilename().'.'.$extension,  File::get($file));
		$entry = User::find(Request::get('userId'));
		$entry->photo = $filePath.$file->getFilename().'.'.$extension;
		$entry->save();
		return $entry;
	}

}
