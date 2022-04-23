<?php
namespace App\Attributes;

class Shoryuken
{
    private $powerName = 'Shooooooryuken';

    public function getPowerName()
    {
        return $this->powerName;
    }
}
