<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    protected $table = 'product';

    protected $fillable = [
        'name', 'product_image', 'price', 'info','info_image','date','product_type_id'
    ];
}
