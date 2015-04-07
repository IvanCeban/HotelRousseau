<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model {

	protected $fillable = ['title'];

	public function rooms(){
		return $this->hasMany('App\Room');
	}

}
