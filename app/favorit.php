<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favorit extends Model
{
    protected $table="favorit";
    protected $fillable=['name','type','definition'];
    public function user(){
        return $this->belongsTo('App\users');
    }
}
