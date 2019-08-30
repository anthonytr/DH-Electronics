<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [];

    public function category()
	   {
		return $this->belongsTo(Category::class);
     }

    public function brand()
      {
    return $this->belongsTo(Brand::class);
      }

      public function carts() 
    {
    	return $this->belongsToMany(Cart::class);
    }
}
