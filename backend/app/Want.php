<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Want extends Model
{
    protected $fillable = [
        'name','category_name','number','amount','place','purchase_date','purchase_from'
    ];
    protected $guarded = [
        'id',
    ];
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
