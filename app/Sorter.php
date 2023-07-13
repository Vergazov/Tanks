<?php

namespace App;

class Sorter
{
    public function sortBySpeed($rightTanks)
    {
        usort($rightTanks, static function ($first, $second)
        {
            if ($first === $second) {
                return 0;
            }
            if ($first < $second) {
                return -1;
            }
            if ($first > $second) {
                return 1;
            }
        } );
        return $rightTanks;
        }
    }