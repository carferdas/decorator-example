<?php

abstract class ArmorDecorator implements Armor
{
    protected $armor;

    public function __construct(Armor $armor)
    {
        $this->armor = $armor;
    }

    public function defend()
    {
        return $this->armor->defend();
    }
}