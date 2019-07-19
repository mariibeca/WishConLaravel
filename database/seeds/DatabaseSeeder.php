<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $products = factory(Product::class)->times(10)->create();
      $categories = factory(Category::class)->times(10)->create();
    }
}
