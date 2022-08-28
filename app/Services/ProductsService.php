<?php
namespace App\Services;

use App\Repositories\ProductsRepository;
use App\Models\Product;

class ProductsService
{
    protected $productsRepository;
    public function __construct(
        ProductsRepository $productsRepository
        )
    {
        $this->productsRepository = $productsRepository;
    }

    public function find($id)
    {
        return $this->productsRepository->find($id);
    }

    public function all()
    {
        return $this->productsRepository->all();
    }

    public function create(Product $product)
    {
        $this->productsRepository->create($product);
    }

    public function update(Product $product)
    {
        $this->productsRepository->update($product);
    }

    public function delete(Product $product)
    {
        $product->delete();
    }

}