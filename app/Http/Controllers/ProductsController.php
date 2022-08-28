<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductsService;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductsRequest;
use App\Http\Responses\ProductsResource;

class ProductsController extends Controller
{

    protected $productsService;

    public function __construct(ProductsService $productsService)
    {
        $this->productsService = $productsService;
    }

    public function list()
    {
        $products = $this->productsService->all();

        return response()->json(
            ProductsResource::collection($products)
        );
    }

    public function create(ProductsRequest $request)
    {
        try {
            DB::beginTransaction();
            $product = new Product();
            $product->fill($request->all());

            $this->productsService->create($product);
            DB::commit();
            return response()->json(new ProductsResource($product)
            );
        }
        catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function update(ProductsRequest $request)
    {
        try {
            DB::beginTransaction();

            $product = $this->productsService->find($request->route('id'));

            if (!$product)
                throw new \Exception('Product does not exist');

            $product->fill($request->all());

            $this->productsService->update($product);

            DB::commit();

            return response()->json(new ProductsResource($product));
        }
        catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function delete(Request $request)
    {
        $product = $this->productsService->find($request->route('id'));

        if (!$product)
            throw new \Exception('Product does not exist');

        $this->productsService->delete($product);
    }

}
