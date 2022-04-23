<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Battle;
use App\Char\{Ryu, Ken};
use App\Attributes\{Hadouken, Shoryuken};

$hadouken = new Hadouken();
$shoryuken = new Shoryuken();

$ryu = new Ryu($hadouken);
$ken = new Ken($shoryuken);

$battle = new Battle('Street Fighter');
$battle->addChar($ryu);
$battle->addChar($ken);
$battle->start();
