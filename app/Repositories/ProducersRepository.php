<?php

namespace App\Repositories;

use App\Models\Producer;

class ProducersRepository
{

    public function all()
    {
        return Producer::all();
    }
}
