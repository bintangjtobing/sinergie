<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasDB extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'kelas_id';
    protected $fillable = ['kelas_id', 'nama_kelas'];

    public function Kelas()
    {
        return $this->belongsToMany(subKelas::class);
    }
    public function Murid()
    {
        return $this->belongsToMany(MuridDB::class);
    }
}
