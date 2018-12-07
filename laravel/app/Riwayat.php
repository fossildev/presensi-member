<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
  protected $table = 'presensi';
  protected $fillable = ['id', 'murid_id'];
}
