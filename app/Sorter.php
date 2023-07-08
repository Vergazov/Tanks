<?php


class Sorter
{
    public function sortBySpeed($rightTanks): array
    {
        usort($rightTanks, static fn($first, $second) => $first->getMaxSpeed() <=> $second->getMaxSpeed());
        return $rightTanks;

    }
}