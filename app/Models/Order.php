<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $guarded = [];


    protected  $dates = [
        'processed_at',
        'deleted_at'
    ];

    public function items()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
