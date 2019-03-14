<?php

class SwordDecorator extends KitDecorator
{
    public function __construct(Unit $unit)
    {
        parent::__construct($unit);
    }

    public function attack()
    {
        return parent::attack() + 50;
    }
}