<?php
namespace App\Http\Responses;

use App\Http\Responses\BaseResource;

class ProductsResource extends BaseResource
{
    function __construct($product)
    {
        $this->id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->company_id = $product->producer_id;
        $this->voltage_id = $product->voltage_id;
    }
}
