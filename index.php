<?php

spl_autoload_register(function ($class) {
    include_once "$class.php";
});

$armor = new GoldenArmor;
$armor = new ShieldDecorator($armor);
$armor = new HelmetDecorator($armor);

echo "La armadura tiene {$armor->defend()} puntos de defensa";