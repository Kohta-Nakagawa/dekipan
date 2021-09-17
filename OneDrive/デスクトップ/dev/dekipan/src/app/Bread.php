<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bread extends Model
{
    protected $table = 'breads';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = ['name', 'price', 'shop_id'];
}