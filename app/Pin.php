<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    protected $fillable = ['name','description','schedule','imagen','latitude','longitude','municipality_id'];

    public function municipality() {
    	return $this->belongsTo('App\Municipality');
    }
}
