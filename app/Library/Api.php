<?php

namespace App\Library;

abstract class Api
{
    /**
     * @param string $url
     * @return object
     */
    protected function sendRequest($url)
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($http_code != 200) {
            return json_encode('An error has occured.');
        }
        return json_decode($data, true);
    }

    /**
     * @param int $endpoint
     * @param int $page
     */
    public abstract function getElements($endpoint, int $page);
}
