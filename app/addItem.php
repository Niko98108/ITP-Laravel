<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addItem extends Model
{

    protected $table = 'food_item';
    protected $Fillable = ['name','item_code','price','details','image'];

}
