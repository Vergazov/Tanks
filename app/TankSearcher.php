<?php

namespace App;

class TankSearcher
{
    public function findRight($aim): array
    {
//        $tanks = [
//            new Tank('ТП-41',80,10),
//            new Tank('ТП-32',60,20),
//            new Tank('ТШ-605',90,5),
//            new Tank('ТШ-607',90,7),
//            new Tank('ТТ-22',40,20),
//            new Tank('ТТ-25',40,50)
//        ];

        $rightTanks = [];
        $tanks = new Tank();
        foreach($tanks as $tank){
            if($tank->getArmorPiercing() >= $aim->getArmorThickness()){
                $rightTanks[] = $tank;

            }
        }
        return $rightTanks;
    }
}