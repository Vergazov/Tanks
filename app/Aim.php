<?php

namespace App;

class Aim
{
    private int $armorThickness;

    public function __construct($armorThickness)
    {
        $this->armorThickness = $armorThickness;
    }

    public function getArmorThickness(): int
    {
        return $this->armorThickness;
    }
}