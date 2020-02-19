<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bahanAjarDB extends Model
{
    protected $table = 'bahan_ajar';
    protected $primaryKey = 'ba_id';
    protected $fillable = ['ba_file', 'ba_nama', 'ba_deskripsi', 'ba_subkelasid'];
}
