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

    public static function getRuffierIndex($pulse1, $pulse2, $pulse3)
    {
        $ruffierTest['index'] = ($pulse1 + $pulse2 + $pulse3 - 200) / 10;
        $ruffierTest['result'] = match (true) {
            $ruffierTest['index'] < 5 => 'Excellent cardiovascular health',
            $ruffierTest['index'] < 10 => 'Good fitness, but with room for improvement',
            $ruffierTest['index'] < 15 => 'Fair fitness level, some concern about heart health',
            $ruffierTest['index'] >= 15 => 'Poor fitness or cardiovascular concerns'
        };

        return $ruffierTest;
    }
}

