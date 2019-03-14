<?php

class ShieldDecorator extends SetDecorator
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