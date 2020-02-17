<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailsItem extends Model
{
    protected $table = 'detail_items';
    protected $primaryKey = 'detail_items_id';
    protected $fillable = ['detail_items_id', 'item_id', 'details_date_in', 'details_date_out', 'details_item_in', 'details_item_out', 'description', 'jmlitem', 'final_item'];

    public function itemsEl()
    {
        return $this->belongsToMany('App\itemModel', 'item_id');
    }
}
