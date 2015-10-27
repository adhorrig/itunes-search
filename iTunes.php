<?php

/**
 * A simple PHP class for searching iTunes content.
 * Read iTunes search documentation here:
 * https://www.apple.com/itunes/affiliates/resources/documentation/itunes-store-web-service-search-api.html
 */
class iTunes
{

    const searchUrl = 'https://itunes.apple.com/search?';
    const lookupUrl = 'https://itunes.apple.com/lookup?';


     public function search($term, $media = null, $limit = 25, $country = 'IE', $entity = null)
    {
        return $this->getData(self::searchUrl . 'entity=' . $entity . '&country=' . $country . '&limit=' . $limit . '&media=' . $media . '&term=' . urlencode($term));
    }

    public function lookup($id, $media = null, $entity = null)
    {

        return $this->getData(self::lookupUrl . 'media=' . $media . '&entity=' . $entity . '&id=' . $id);
    }

    private function getData($url)
    {
        $content = file_get_contents($url);
        return json_decode($content);
    }
}
