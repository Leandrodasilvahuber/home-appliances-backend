<?php
namespace App\Services;

use App\Repositories\VoltagesRepository;

class VoltagesService
{
    protected $voltagesRepository;
    public function __construct(VoltagesRepository $voltagesRepository)
    {
        $this->voltagesRepository = $voltagesRepository;
    }

    public function all()
    {
        return $this->voltagesRepository->all();
    }

}