<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_type extends Model
{
    //
    protected $table = 'product_type';

    protected $fillable = [
        'name', 'type_id','sort'
    ];
}
