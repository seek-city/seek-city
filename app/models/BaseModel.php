<?php

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

/*
 * Class from which other models can inherit functionality from.
 */
class BaseModel extends Eloquent {
    use SoftDeletingTrait;
    const DATE_FORMAT = 'l, F jS Y \\@ g:i A';
    const SHORT_DATE_FORMAT = 'm/d \\@ g:i A';
    const TIME_FORMAT = 'g:i A';

    /*
     * Convert any model-aware date/times to local timezone.
     */
    protected function asDateTime($value)
    {
        return parent::asDateTime($value)->setTimezone(Config::get('app.local_timezone'));
    }

}