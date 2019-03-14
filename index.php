<?php

spl_autoload_register(function ($class) {
    include_once "$class.php";
});

$warrior = new Warrior;
$warrior = new ShieldDecorator($warrior);
$warrior = new HelmetDecorator($warrior);
$warrior = new SwordDecorator($warrior);

echo "El guerrero tiene {$warrior->defense()} puntos de defensa. \n";
echo "El guerrero tiene {$warrior->attack()} puntos de ataque. \n";
echo "El guerrero tiene {$warrior->life()} puntos de vida.";