<?php

class Warrior implements Unit
{
    protected $defense;

    public function __construct(int $defense = 0)
    {
        $this->defense = $defense;
    }

    public function defense()
    {
        return $this->defense;
    }
}