<?php

require_once 'app/TankSearcher.php';
require_once 'app/Sorter.php';
require_once 'app/MessageCreator.php';

class Dispatcher
{
    public function getRightTanks($aim): array
    {
        $searcher = new TankSearcher();

        $rightTanks = $searcher->findRight($aim);
    }
}