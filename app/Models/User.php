<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function zakazus(){
        return $this->hasMany('App\Models\zakazu');
    }
    public function shops(){
        return $this->belongsToMany('App\Models\Shop','zakazus');
    }
}
