<?php
namespace App\Services;

use App\Repositories\ProducersRepository;

class ProducersService
{
    protected $productsRepository;
    public function __construct(ProducersRepository $producersRepository)
    {
        $this->producersRepository = $producersRepository;
    }

    public function all()
    {
        return $this->producersRepository->all();
    }

}