<?php

namespace App\Library\Api;

/**
 *
 * @documentation https://swapi.co/documentation
 * @author Alexey Kostenko aleksey.kostenko.dev@gmail.com
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
        return $this->sendRequest($url)['results'];
    }

    public function people($url)
    {
        return $this->sendRequest($url)['results'];
    }
}
