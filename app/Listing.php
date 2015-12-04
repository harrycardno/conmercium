<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public $fillable = ['image', 'description', 'category'];

    public function user() {
    	return $this->belongsTo('App\User', 'user_id');
    }

}


