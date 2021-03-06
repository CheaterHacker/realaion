<?php

namespace App\Models\Webserver;

use Illuminate\Database\Eloquent\Model;

class ShopItem extends Model {

    protected $table        = 'shop_items';
    protected $connection   = 'webserver';
    protected $fillable     = ['id_item', 'quality_item', 'id_sub_category', 'name', 'price', 'quantity', 'level'];
    public $timestamps      = false;

}
