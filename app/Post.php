<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // relazione tabelle
    public function user(){
        return $this->belongsTo('App\User');
    }
}
