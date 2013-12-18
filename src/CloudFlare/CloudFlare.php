<?php
namespace CloudFlare;

/**
 * Class CloudFlare
 *
 * @package CloudFlare
 */
class CloudFlare
{
    /**
     * @return string
     */
    public static function VisitorIP()
    {
        // [HTTP_CF_CONNECTING_IP] => xxx.xxx.xxx.xxx
        return $_SERVER['HTTP_CF_CONNECTING_IP'] ?: "";
    }

    /**
     * @return string
     */
    public static function VisitorCountry()
    {
        // [HTTP_CF_IPCOUNTRY] => US
        return $_SERVER['HTTP_CF_IPCOUNTRY'] ?: "";
    }

    /**
     * @return array
     */
    public static function Visitor()
    {
        // [HTTP_CF_VISITOR] => {"scheme":"https"}
        $raw = $_SERVER['HTTP_CF_VISITOR'] ?: "{}";

        return json_decode($raw, true) ?: array();
    }
}