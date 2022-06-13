<?php
namespace App;
require 'vendor/autoload.php';

use \App\Services\ContactsService;
use App\Services\GeoIpService;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

$loader = new FilesystemLoader('templates');
$twig = new Environment($loader, []);

echo $twig->render('index.html.twig', ['contact' => ContactsService::getContactByCity(GeoIpService::getCityByIp($_SERVER['REMOTE_ADDR']))]);