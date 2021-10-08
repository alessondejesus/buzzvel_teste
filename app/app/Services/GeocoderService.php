<?php

namespace App\Services;

class GeocoderService
{

    /**
     * @param array $coordinates
     * @param array $reference
     * @return float
     */
    static function calculateDistance(array $coordinates, array $reference)
    {
        list($lat1, $lon1) = $coordinates;
        list($lat2, $lon2) = $reference;

        $theta = $lon1 - $lon2;
        $distance = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $distance = acos($distance);
        $distance = rad2deg($distance);

        return $distance * 60 * 1.1515;
    }
}
