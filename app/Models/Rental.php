<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $guarded=[];

    function user(){
        return $this->belongsTo(User::class);
    }

    function car(){
        return $this->belongsTo(Car::class);
    }


}
