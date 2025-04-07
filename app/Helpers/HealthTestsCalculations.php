<?php

namespace App\Helpers;

class HealthTestsCalculations
{
    public static function getBmi($weight, $height)
    {
        $bmi['index'] = round($weight/($height ** 2), 2);
        $bmi['result'] = match (true) {
            $bmi['index'] < 18.5 => 'Underweight',
            $bmi['index'] < 25 => 'Normal weight',
            $bmi['index'] < 30 => 'Overweight',
            $bmi['index'] >= 30 => 'Obesity'
        };

        return $bmi;
    }
}

