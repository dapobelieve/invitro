<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model
{
//    use SoftDeletes;


    protected $guarded = [];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}