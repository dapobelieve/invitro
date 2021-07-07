<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $dates = [
        'deleted_at'
    ];

    public function storeOrders()
    {
        return $this->hasMany(OrderDetails::class, 'store_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
