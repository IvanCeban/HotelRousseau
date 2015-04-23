<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

	protected $fillable = ['title','description','room_type_id','reserved','rooms_count',
        'price_construction','price_production','price_cost','price_rack','number_of_people',
        'surface','bed_kids','bed_camp','bed_additional','bed_total_additional'
    ];

	public function photos()
	{
		return $this->hasMany('App\RoomPhoto');
	}

	public function roomType(){
		return $this->belongsTo('App\RoomType');
	}

}
