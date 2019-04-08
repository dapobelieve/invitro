<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected  $guarded = [];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function  applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
