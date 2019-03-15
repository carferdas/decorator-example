<?php

class GoldenArmor implements Armor
{
    protected $defense = 0;

    public function __construct(int $defense = 0)
    {
        $this->defense = $defense;
    }

    public function defend()
    {
        return $this->defense;
    }
}