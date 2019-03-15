<?php

class ShieldDecorator extends ArmorDecorator
{
    public function __construct(Armor $armor)
    {
        parent::__construct($armor);
    }

    public function defend()
    {
        return parent::defend() + 100;
    }
}