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


    public function search($data)
    {
        return $this->getData(self::searchUrl . http_build_query($data));
    }

    public function lookup($data)
    {
        return $this->getData(self::lookupUrl . http_build_query($data));
    }

    private function getData($url)
    {
        $content = file_get_contents($url);
        return json_decode($content);
    }
}
