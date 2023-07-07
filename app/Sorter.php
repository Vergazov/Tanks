<?php


class Sorter
{
    public function sortBySpeed($rightTanks){
        usort($rightTanks, static fn($first, $second) => $first->getMaxSpeed() <=> $second->getMaxSpeed());
        return $rightTanks;

    }
}