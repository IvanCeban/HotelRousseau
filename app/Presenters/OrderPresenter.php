<?php  namespace App\Presenters;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;
use App\Order;

class OrderPresenter extends BasePresenter
{
    public function __construct(Order $resource)
    {
        $this->wrappedObject = $resource;
    }

    public function checkin_date()
    {
        $date = $this->wrappedObject->checkin_date;
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->toFormattedDateString();
    }

    public function checkout_date()
    {
        $date = $this->wrappedObject->checkout_date;
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->toFormattedDateString();
    }
}