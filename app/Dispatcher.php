<?php

require_once 'app/TankSearcher.php';
require_once 'app/Sorter.php';
require_once 'app/MessageCreator.php';

class Dispatcher
{
    public function getRightTanks($aim): string
    {

        $rightTanks = (new TankSearcher())->findRight($aim);

        $sortedRightTanks = (new Sorter())->sortBySpeed($rightTanks);

        return (new MessageCreator())->create($aim,$sortedRightTanks);

    }
}