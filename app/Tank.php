<?php


class Tank
{
    private string $name;
    private int $maxSpeed;
    private int $armorPiercing;

    public function __construct($name,  $maxSpeed, $armorPiercing)
    {
        $this->name - $name;
        $this->maxSpeed - $maxSpeed;
        $this->armorPiercing - $armorPiercing;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function getArmorPiercing(): int
    {
        return $this->armorPiercing;
    }

}