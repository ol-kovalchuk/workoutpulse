<?php

namespace App\Helpers;

class VitalSignsMetrics
{
    public static function checkTemperature($temperature)
    {
        $result = match(true) {
            $temperature < 35 => 'Hypothermia, dangerously low body temperature.',
            $temperature < 36 => 'Low temperature',
            $temperature < 37 => 'Normal temperature',
            $temperature < 38 => 'High temperature',
            $temperature > 38 => 'Fever, very high temperature'
        };

        return $result;
    }

    public static function checkPulse($pulse)
    {
        $result = match(true) {
            $pulse < 50 => 'Very low, could be normal in athletes, but may signal bradycardia in others',
            $pulse < 60 => 'Low, often seen in fit individuals; usually okay unless symptoms',
            $pulse < 80 => 'Normal, healthy resting range for most adults',
            $pulse < 100 => 'Elevated, slightly high; may indicate stress, dehydration, or low fitness',
            $pulse < 120 => 'High (Tachycardia), Can be due to stress, illness, or heart conditions',
            $pulse > 120 => 'Very high, Usually not normal at rest; medical attention recommended'
        };

        return $result;
    }

    public static function checkBreathing($breathing)
    {
        $result = match(true) {
            $breathing < 10 => 'Bradypnea, your respiration rate is very low',
            $breathing < 20 => 'Normal respiration rate',
            $breathing > 20 => 'Tachypnea,  high respiration rate, in calm state could be sign of panic attack, heart failure or
            respiratory infections'
        };

        return $result;
    }

    public static function checkPressure($systolic, $diastolic)
    {
        $result = match(true) {
            $systolic < 110 && $diastolic < 70 => 'Hypotension, too low blood pressure',
            $systolic < 130 && $diastolic < 80 => 'Normal blood pressure',
            $systolic < 140 && $diastolic < 90 => 'Elevated blood pressure',
            $systolic < 160 && $diastolic < 100 => 'Hypertension',
            $systolic < 110 && $diastolic < 70 => 'Hypertension crisis',
        };

        return $result;
    }
}
