<?php
namespace App\Services;

class GeoIpService
{
    public static function getCityByIp(string $ip)
    {
        $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
        if($query && $query['status'] == 'success')
        {
            return $query['city'];
        }
    }
}