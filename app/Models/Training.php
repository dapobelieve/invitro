<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use SoftDeletes;

    protected $dates = [
        'deleted_at'
    ];


    protected $guarded = [];
    
    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function applications()
    {
        return $this->hasMany(Applicant::class);
    }

    public function countApplicants() {
        return $this->applications()
            ->selectRaw('training_id, count(*) as count')->groupBy('training_id');
    }

    public function getApplicationsCount()
    {
        return $this->countApplicants();
    }
}
