<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subKelas extends Model
{
    protected $table = 'sub_kelas';
    protected $primaryKey = 'subkelas_id';
    protected $fillable = ['nama_mapel', 'kelas_id', 'img_sub'];

    public function Murid()
    {
        return $this->belongsToMany(MuridDB::class);
    }
    public function KelassubKelas()
    {
        return $this->belongsToMany(KelasDB::class);
    }
}
