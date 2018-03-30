<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItimScore extends Model
{
    protected $table = 'itim_sumscore';

    public function user()
    {
        $this->belongsTo('/App/User','id','user_id');
    }

}
