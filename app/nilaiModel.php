<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilaiModel extends Model
{
    protected $table = 'nilai_murid';
    protected $primaryKey = 'nilai_id';
    protected $fillable = ['id_murid', 'subkelas_id', 'nilai'];
    public function Murid()
    {
        return $this->belongsToMany('App\MuridDB', 'id_murid');
    }
}
