<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBeer extends Model
{
    protected $fillable = ['name','description','price','img'];
}
