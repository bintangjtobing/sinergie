<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paketDB extends Model
{
   protected $table = 'paket';
   protected $primaryKey = 'paket_id';
   protected $fillable = ['paket_id', 'nama_kelas'];
}