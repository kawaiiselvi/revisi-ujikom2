<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pers extends Model
{
    //
    protected $table = 'perusahaans';
    protected  $fillable = ['perusahaan','nama','jabatan','lokasi','pendidikan','deskripsi','gaji','cover'];
}
