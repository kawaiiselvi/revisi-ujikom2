<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    //
    public function Pekerjas()
    {
    	return $this->belongsTo('App\Pekerja');
    }
    protected $fillable = ['name','email'];
    protected $visible = ['name','email'];
    public $timestamps = true;

    
}
