<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected  $table = 'order_details';
    protected  $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
