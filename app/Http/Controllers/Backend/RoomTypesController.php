<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\RoomTypeRequest;
use App\RoomType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoomTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomTypes = RoomType::all();
        return view('backend.room-types.index', compact('roomTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.room-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomTypeRequest $request)
    {
        RoomType::create($request->all());

        return redirect(route('admin.room-types.index'))->with('success.message', "You have been successfully added new room type.");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param RoomType $roomType
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(RoomType $roomType)
    {
        return view('backend.room-types.edit', compact('roomType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoomTypeRequest|Request $request
     * @param RoomType $roomType
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(RoomTypeRequest $request, RoomType $roomType)
    {
        $roomType->update($request->all());

        return redirect(route('admin.room-types.index'))->with('success.message', "You have been successfully updated room type.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RoomType $roomType
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(RoomType $roomType)
    {
        $roomType->delete();
        return redirect()->back()->with('success.message', "You have successfully deleted \"{$roomType->title}\" room type.");
    }
}
