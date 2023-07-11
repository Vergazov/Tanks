<?php


class Tank
{
    public array $tanks;
    private string $name;
    private int $maxSpeed;
    private int $armorPiercing;

    public function __construct($name,$maxSpeed,$armorPiercing)
    {
//        $this->tanks = [
//            new Tank('ТП-41',80,10),
//            new Tank('ТП-32',60,20),
//            new Tank('ТШ-605',90,5),
//            new Tank('ТШ-607',90,7),
//            new Tank('ТТ-22',40,20),
//            new Tank('ТТ-25',40,50)
//        ];
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
        $this->armorPiercing = $armorPiercing;
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