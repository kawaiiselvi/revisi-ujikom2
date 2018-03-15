<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    //
    protected $fillable = ['akun_id','perusahaan','nama','jabatan','lokasi','pendidikan','deskripsi','gaji'];
}
