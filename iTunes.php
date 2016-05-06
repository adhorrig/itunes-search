<?php

/**
 * A simple PHP class for searching iTunes Store content.
 * Read iTunes search documentation here:
 * https://www.apple.com/itunes/affiliates/resources/documentation/itunes-store-web-service-search-api.html
 */
class iTunes
{

    const searchUrl = 'https://itunes.apple.com/search?';
    const lookupUrl = 'https://itunes.apple.com/lookup?';


    public static function search($data)
    {
        return self::getData(self::searchUrl . http_build_query($data));
    }

    public static function lookup($data)
    {
        return self::getData(self::lookupUrl . http_build_query($data));
    }

    private static function getData($url)
    {
        $content = file_get_contents($url);
        return json_decode($content);
    }
}
