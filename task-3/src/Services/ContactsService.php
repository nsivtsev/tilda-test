<?php
namespace App\Services;

class ContactsService
{
    private const DEFAULT_CONTACT = '8-800-DIGITS';

    private const CONTACTS = [
        'Moscow' => '8-800-MOSCOW',
    ];

    public static function getContactByCity(string $city = null)
    {
        if ($city && isset(self::CONTACTS[$city])) {
            return self::CONTACTS[$city];
        } else {
            return self::DEFAULT_CONTACT;
        }

    }
}