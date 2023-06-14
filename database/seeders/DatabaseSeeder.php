<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\Tag;
use App\Models\User;
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
        User::factory()->create(['email' => 'admin@davidcruz.net', 'admin' => true]);
        User::factory()->create(['email' => 'user@davidcruz.net']);


        $categories = Category::factory(10)->create();
        Product::factory(100)->make()->each(function ($product) use ($categories) {
            $category = $categories->random();
            $product->category()->associate($category);
            $product->save();
            $product->productDetails()->save(ProductDetails::factory()->create(['product_id' => $product->id]));
        });

        Tag::factory(10)->create();
        Post::factory(50)->create();
    }
}
