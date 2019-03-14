<?php

class ShieldDecorator extends KitDecorator
{
    public function __construct(Unit $unit)
    {
        parent::__construct($unit);
    }

    public function defense()
    {
        return parent::defense() + 100;
    }
}