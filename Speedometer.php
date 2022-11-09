<?php

class Speedometer
{
    public const KM = 0.621371;
    public const MILES = 1.609344;

    public static function convertKmToMiles($km): float
    {
        $miles = $km * self::MILES;
        return round($miles, 2);
    }

    public static function convertMilesToKm($miles): float
    {
        $km = $miles * self::KM;
        return round($km, 2);
    }
}
