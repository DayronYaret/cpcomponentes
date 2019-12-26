<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    protected $fillable = ["name", "description", "price", "stock","imageUrl","imageUrl2","imageUrl3" ,"processor","RAM","graphic","motherboard"];
}
