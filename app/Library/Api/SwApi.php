<?php

namespace App\Library\Api;

/**
 *
 * @documentation https://swapi.co/documentation
 */

use App\Library\Api;

class SwApi extends Api
{
    private $baseUrl = 'https://swapi.co/api/';

    public function getElements($endpoint, int $page = 1)
    {
        $url = $this->baseUrl . $endpoint . '/?page=' . $page;

        return $this->{$endpoint}($url); //elements
    }

    public function planets($url)
    {
        $response = $this->sendRequest($url);
        return isset($response['results']) ? $response['results'] : collect([]);
    }

    public function people($url)
    {
        $response = $this->sendRequest($url);
        return isset($response['results']) ? $response['results'] : collect([]);
    }
}
