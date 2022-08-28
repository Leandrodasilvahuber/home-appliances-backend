<?php

namespace App\Repositories;

use App\Models\Product;

class ProductsRepository
{

    public function all()
    {
        return Product::all();
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function create(Product $product)
    {
        $product->save();
    }

    public function update(Product $product)
    {
        $product->update();
    }

    public function delete(Product $product)
    {
        $product->delete();
    }
}
