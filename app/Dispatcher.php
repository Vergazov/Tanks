<?php

require_once 'app/TankSearcher.php';
require_once 'app/Sorter.php';
require_once 'app/MessageCreator.php';

class Dispatcher
{
    public function getRightTanks($aim)
    {
        $searcher = new TankSearcher();

        $rightTanks = $searcher->findRight($aim);

        $sorter = new Sorter();

        $sortedRightTanks = $sorter->sortBySpeed($rightTanks);

        return (new MessageCreator())->create($aim,$sortedRightTanks);

    }
}