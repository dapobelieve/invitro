<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected  $guarded = [];


    public function training()
    {
        return $this->belongsToMany(Training::class);
    }
}
