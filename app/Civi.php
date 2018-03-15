<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Civi extends Model
{
    //
    protected  $fillable = ['lowongan_id', 'akun_id','nama', 'cover', 'ttl','alamat','notlp','jk','agama','kewarganegaraan','status','email','hoby','sd','smp','sma','pt','pk'];
}
