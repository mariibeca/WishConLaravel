<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = ['name','image','price','description','rating','category_id'];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }
}
