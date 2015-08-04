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
        //return 'ss';
        $checkin_date = $this->wrappedObject->checkin_date;
        return Carbon::createFromFormat('Y-m-d H:i:s', $checkin_date)->toFormattedDateString();
    }
}