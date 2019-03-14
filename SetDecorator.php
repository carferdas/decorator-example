<?php

abstract class SetDecorator implements Unit
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
}