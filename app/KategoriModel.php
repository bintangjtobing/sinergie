<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'category_name', 'category_id', 'created_at', 'updated_at', 'created_by', 'updated_by'];
}
