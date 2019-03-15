<?php

class HelmetDecorator extends ArmorDecorator
{
    public function __construct(Armor $armor)
    {
        parent::__construct($armor);
    }

    public function defend()
    {
        return parent::defend() + 75;
    }
}