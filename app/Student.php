<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
        protected $fillable = [
        'naam',
        ];
        
    public function user(){
        return $this->belongsTo('App\User');
    }
}
