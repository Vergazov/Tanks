<?php

namespace App;

class Sorter
{
    public function sortBySpeed($rightTanks)
    {
        usort($rightTanks,[__CLASS__, 'sort'] );
        return $rightTanks;

    }
    public function sort($first, $second): int
    {
        return $first->getMaxSpeed() <=> $second->getMaxSpeed();
    }
}