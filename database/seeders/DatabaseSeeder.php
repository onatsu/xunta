<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetails;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(10)->create();
        Product::factory(100)->make()->each(function ($product) use ($categories) {
            $category = $categories->random();
            $product->category()->associate($category);
            $product->save();
            $product->productDetails()->save(ProductDetails::factory()->create(['product_id' => $product->id]));
        });
    }
}
