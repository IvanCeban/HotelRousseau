<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;
use App\User;
use Storage;
use File;
use Auth;
use Hash;
use Validator;

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
        if (Request::get('oldPassword') != '' && !Hash::check(Request::get('oldPassword'), $user->password))
        {
            return ['status'=> 'error', 'messages'=>['oldPassword' => ['Old password not correct']]];
        }
        $validator = Validator::make(Request::all(),
            [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users,email,'.$id,
                'password' => 'confirmed|min:6',
            ]
        );
        if ($validator->fails())
        {
            return ['status'=> 'error', 'messages'=>$validator->messages()];;
        }
		$user->update(Request::all());
		return ['status'=> 'success', 'user'=>$user];
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
