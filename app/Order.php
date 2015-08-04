<?php namespace App;

use App\Presenters\OrderPresenter;
use McCool\LaravelAutoPresenter\HasPresenter;
use Illuminate\Database\Eloquent\Model;

class Order extends Model implements HasPresenter {

	protected $fillable = ['session_id', 'firstname', 'lastname', 'checkin_date', 'checkout_date', 'adults', 'kids', 'infants'];

	public function getPresenterClass()
	{
		return OrderPresenter::class;
	}
}
