<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemModel extends Model
{
    //
    protected $table = 'items';
    protected $primaryKey = 'item_id';
    protected $fillable = ['item_id', 'item_name', 'item_tipe', 'price', 'item_code', 'qty', 'description', 'created_by', 'updated_by', 'date_in', 'date_out', 'item_in', 'item_out', 'total_qty', 'unit'];


    public function detaildet()
    {
        return $this->belongsToMany('App\detailsItem', 'detail_items_id');
    }
}
