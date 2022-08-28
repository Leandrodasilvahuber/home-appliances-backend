<?php

namespace App\Repositories;

use App\Models\Voltage;

class VoltagesRepository
{

    public function all()
    {
        return Voltage::all();
    }
}
