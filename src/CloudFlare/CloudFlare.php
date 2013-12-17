<?php
namespace CloudFlare;

class CloudFlare
{
	public static function VisitorIP()
	{
		// [HTTP_CF_CONNECTING_IP] => xxx.xxx.xxx.xxx
		return $_SERVER['HTTP_CF_CONNECTING_IP'];
	}

	public static function VisitorCountry()
	{
		// [HTTP_CF_IPCOUNTRY] => US
		return $_SERVER['HTTP_CF_IPCOUNTRY'];
	}
}
