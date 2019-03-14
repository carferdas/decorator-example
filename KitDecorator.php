<?php

abstract class KitDecorator implements Unit
{
    protected $unit;

    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
    }

    public function defense()
    {
        return $this->unit->defense();
    }

    public function attack()
    {
        return $this->unit->attack();
    }

    public function life()
    {
        return $this->unit->life();
    }
}