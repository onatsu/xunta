<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Contracts\IProductRepository;
use App\Models\Product;

class EloquentProductRepository implements IProductRepository
{

    public function getAllProducts()
    {
        return Product::all();
    }
}
