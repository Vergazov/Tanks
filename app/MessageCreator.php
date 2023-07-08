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
            // Сохраняю в tank объект танка, чтобы обратиться к методу getName() ниже.
            return "Чтобы пробить броню толщиной " . $aim->getArmorThickness() . " мм нужен танк марки " . $tank->getName() .
                " со скоростью перемещения " . $tank->getMaxSpeed() . ' км/ч';
        }
        if ($amount > 1) {
            return "Чтобы пробить броню толщиной " . $aim->getArmorThickness() . " мм подойдет любой из этих танков: " . $this->getTanksCharacteristics($sortedRightTanks);
        }

    }

    private function getTanksCharacteristics($sortedRightTanks): string
    {
        $tanksCharacteristics = [];
        foreach($sortedRightTanks as $tank) {
            $tanksCharacteristics[] = $tank->getName() . '(' . $tank->getMaxSpeed() . 'км/ч)';
        }
        return $this->glueTanksCharacteristics($tanksCharacteristics);
    }

    private function glueTanksCharacteristics($tanksCharacteristics): string
    {
        return implode(', ', $tanksCharacteristics);
    }
}