<?php
namespace App\Http\Responses;

use App\Http\Responses\BaseResource;

class VoltagesResource extends BaseResource
{
    function __construct($voltage)
    {
        $this->id = $voltage->id;
        $this->volts = $voltage->volts;
    }
}
