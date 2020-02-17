<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MuridDB extends Model
{
    protected $table = 'murid';
    protected $primaryKey = 'id_murid';
    protected $fillable = ['id_murid', 'kelas_id', 'nama_murid', 'email', 'nohp', 'password', 'kelas', 'paket', 'remember_token', 'created_at', 'updated_at'];
    public function nilai()
    {
        return $this->hasMany('App\nilaiModel', 'nilai_id');
    }
}
