<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table ="drivers";

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
