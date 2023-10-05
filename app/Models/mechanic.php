<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mechanic extends Model
{
    use HasFactory;

    public function carOwners(){
        return $this->hasOneThrough(Owner::class, Car::class);
    }
    public function cars(){
        return $this->hasOne(Car::class);
    }
}
