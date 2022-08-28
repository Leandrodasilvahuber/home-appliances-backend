<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\VoltagesService;
use App\Http\Responses\VoltagesResource;

class VoltagesController extends Controller
{

    protected $voltagesService;

    public function __construct(VoltagesService $voltagesService)
    {
        $this->voltagesService = $voltagesService;
    }

    public function list()
    {
        $voltages = $this->voltagesService->all();

        return response()->json(
            VoltagesResource::collection($voltages)
        );
    }
}
