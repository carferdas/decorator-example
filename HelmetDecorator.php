<?php

class HelmetDecorator extends KitDecorator
{
    public function __construct(Unit $unit)
    {
        parent::__construct($unit);
    }

    public function defense()
    {
        return parent::defense() + 50;
    }

    public function life()
    {
        return parent::life() + 100;
    }
}