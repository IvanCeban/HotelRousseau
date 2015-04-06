<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

	protected $fillable = ['title', 'price', 'description', 'room_types_id', 'reserved'];

}
