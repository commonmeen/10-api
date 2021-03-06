<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileStaff extends Model
{
    protected $guarded = [
        'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile', 'user_id', 'user_id');
    }

    public function camp_section()
    {
        return $this->belongTo('App\Models\CampSection', 'id', 'section_id');
    }

    public function evalCriteria(){
        return $this->belongTo('App\Models\EvalCriteria');
    }
}