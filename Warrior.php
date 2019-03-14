<?php

class Warrior implements Unit
{
    protected $defense = 10;
    protected $attack = 10;
    protected $life = 120;

    public function __construct(int $defense = 0)
    {
        $this->defense = $defense;
    }

    public function defense()
    {
        return $this->defense;
    }

    public function attack()
    {
        return $this->attack;
    }

    public function life()
    {
        return $this->life;
    }
}