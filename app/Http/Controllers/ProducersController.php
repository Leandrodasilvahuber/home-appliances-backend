<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ProducersService;
use App\Http\Responses\ProducersResource;

class ProducersController extends Controller
{

    protected $productsService;

    public function __construct(ProducersService $producersService)
    {
        $this->producersService = $producersService;
    }

    public function list()
    {
        $producers = $this->producersService->all();

        return response()->json(
            ProducersResource::collection($producers)
        );
    }
}
