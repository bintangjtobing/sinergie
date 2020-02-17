<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriDB extends Model
{
    protected $table = 'materis';
    protected $primaryKey = 'materi_id';
    protected $fillable = ['materi_id', 'judul_materi', 'isi_materi', 'created_by', 'updated_by'];
}
