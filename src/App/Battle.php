<?php
namespace App;

class Battle
{
    private string $title;
    private array $chars;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function start()
    {
        echo "{$this->title} Fight! <br /><br />";

        foreach ($this->chars as $char) {
            echo "Char: {$char->getCharacter()} Power: {$char->getPower()} <br />";
        }
    }

    public function addChar($char)
    {
        $this->chars[] = $char;
    }
}
