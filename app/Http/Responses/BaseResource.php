<?php

namespace App\Http\Responses;

use Illuminate\Support\Collection;

abstract class BaseResource
{

    static function collection($resources)
    {

        $result = $resources instanceof Collection
            ? $resources
            : collect($resources);

        return $result->map(function ($resource) {

            return new static ($resource);
        });
    }
}