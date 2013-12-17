<?php
require_once dirname(__DIR__) . "/vendor/autoload.php";

use CloudFlare\CloudFlare;

if (!$_SERVER['HTTP_CF_CONNECTING_IP']) $_SERVER['HTTP_CF_CONNECTING_IP'] = "127.0.0.1";
if (!$_SERVER['HTTP_CF_IPCOUNTRY']) $_SERVER['HTTP_CF_IPCOUNTRY'] = "US";

echo "IP: " . CloudFlare::VisitorIP() . "; COUNTRY: " . CloudFlare::VisitorCountry();
