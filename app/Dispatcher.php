<?php

namespace App;

class Dispatcher
{
    public function getRightTanks($aim): string
    {

        $rightTanks = (new TankSearcher())->findRight($aim);

        $sortedRightTanks = (new Sorter())->sortBySpeed($rightTanks);

        return (new MessageCreator())->create($aim,$sortedRightTanks);

    }
}