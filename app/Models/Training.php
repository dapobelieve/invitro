<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $guarded = [];
    
    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
