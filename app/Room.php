<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

	protected $fillable = ['title', 'price', 'description', 'room_type_id', 'reserved'];

	public function photos()
	{
		return $this->hasMany('App\RoomPhoto');
	}

	public function roomType(){
		return $this->belongsTo('App\RoomType');
	}

}
