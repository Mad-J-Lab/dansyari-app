<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];
    protected $guarded = [
        'id',
    ];
    public function wants(){
        return $this->hasMany('App\Want');
    }
    public function users(){
        return $this->belongsToMany('App\User');
    }
};
