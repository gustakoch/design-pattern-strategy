<?php
namespace App\Char;

class Ryu
{
    private $power;
    private $character = 'Ryu';

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
