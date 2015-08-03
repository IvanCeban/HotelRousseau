<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $fillable = ['session_id', 'firstname', 'lastname', 'checkin_date', 'checkout_date', 'adults', 'kids', 'infants'];

}
