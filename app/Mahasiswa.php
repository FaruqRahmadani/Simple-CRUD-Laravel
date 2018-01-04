<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  public function Jurusan()
  {
    return $this->belongsTo('App\Jurusan');
  }
}
