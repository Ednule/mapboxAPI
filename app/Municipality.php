<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = ['name'];

    public function pins() {
    	return $this->hasMany('App\Pin');
    }
}
