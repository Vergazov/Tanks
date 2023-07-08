<?php


class MessageCreator
{
    public function create($aim,$sortedRightTanks): string
    {
        $amount = count($sortedRightTanks);

        if ($amount === 0) {
            return "Для пробития брони толщиной " . $aim->getArmorThickness() . " мм подходящих танков не найдено";
        }
        if ($amount === 1) {
            $tank = $sortedRightTanks[0];
            return "Чтобы пробить броню толщиной " . $aim->getArmorThickness() . " мм нужен танк марки " . $tank->getName() .
                " со скоростью перемещения " . $tank->getMaxSpeed();
        }
        if ($amount > 1) {
            return "Чтобы пробить броню толщиной " . $aim->getArmorThickness() . " мм подойдет любой из этих танков: " . $this->getTanksNames($sortedRightTanks);
        }

    }

    private function getTanksNames($sortedRightTanks): string
    {
        $tanksNames = [];
        foreach($sortedRightTanks as $tank) {
            $tanksNames[] = $tank->getName();
        }
        return $this->glueTanksNames($tanksNames);
    }

    private function glueTanksNames($tanksNames): string
    {
        return implode(', ', $tanksNames);
    }
}