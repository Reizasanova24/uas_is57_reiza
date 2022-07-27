<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubm extends Model
{
    public function pasiens(){
        return $this->hasOne(Pasien::class,'id','pasiens_id');
    }
}
