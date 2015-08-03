<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {

	protected $fillable = ['room_id', 'checkin_date', 'checkout_date', 'adults', 'kids', 'infants'];

}
