<?php


class Aim
{
    private int $armorThickness;

    public function __construct($armorThickness)
    {
        $this->armorThickness = $armorThickness;
    }

    public function getArmorThickness(){
        return $this->armorThickness;
    }
}