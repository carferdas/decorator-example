<?php

class HelmetDecorator extends SetDecorator
{
    public function __construct(Unit $unit)
    {
        parent::__construct($unit);
    }

    public function defense()
    {
        return parent::defense() + 50;
    }
}