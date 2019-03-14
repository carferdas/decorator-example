<?php

spl_autoload_register(function ($class) {
    include_once "$class.php";
});

$warrior = new Warrior;
$warrior = new ShieldDecorator($warrior);
$warrior = new HelmetDecorator($warrior);

echo "El guerrero tiene {$warrior->defense()} puntos de defensa.";