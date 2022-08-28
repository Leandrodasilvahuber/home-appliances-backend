<?php
namespace App\Http\Responses;

use App\Http\Responses\BaseResource;

class ProducersResource extends BaseResource
{
    function __construct($producer)
    {
        $this->id = $producer->id;
        $this->name = $producer->name;
    }
}
