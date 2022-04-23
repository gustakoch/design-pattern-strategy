<?php
namespace App\Char;

class Ken
{
    private $power;
    private $character = 'Ken';

    public function __construct($power)
    {
        $this->power = $power;
    }

    public function getCharacter()
    {
        return $this->character;
    }

    public function getPower()
    {
        return $this->power->getPowerName();
    }
}
