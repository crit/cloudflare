# CloudFlare Abstraction Class

This module provides static methods for server variables set by [CloudFlare](https://www.cloudflare.com/). Future updates as needed. Meant for small projects or for stand-alone systems.

## Requirements

- PHP 5.3.0+

## Install

Easy install with [Composer](http://getcomposer.org/).

```php
php composer.phar require "crit/cloudflare": "dev-master"
```

## Usage

```php
<?php
include "vendor/autoload.php";

use CloudFlare\CloudFlare;

$visitor_ip = CloudFlare::VisitorIP();
$visitor_country = CloudFlare::VisitorCountry();
```