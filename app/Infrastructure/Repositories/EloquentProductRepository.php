<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Contracts\IProductRepository;
use App\Domain\Entities\Product;
use App\Models\Product as ProductEloquent;

class EloquentProductRepository implements IProductRepository
{

    public function getAllProducts()
    {
        $productCollection = ProductEloquent::all();
        foreach ($productCollection as $productEloquent){
            $products[] = new Product($productEloquent->id, $productEloquent->name, $productEloquent->description);
        }
        return $products;
    }
}
