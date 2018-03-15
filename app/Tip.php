<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    //
    public function Tips()
    {
    	return $this->belongsTo('App\Tips');
    }

    protected $fillable = ['Tips','Isi'];
    protected $visible = ['Tips','Isi'];
    public $timestamps = true;

    
}
