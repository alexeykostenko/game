<?php

namespace App\Library\Api;

/**
 *
 * @documentation https://www.pokeapi.co/docsv2/
 */

use App\Library\Api;

class PokeApi extends Api
{
    private $baseUrl = 'https://pokeapi.co/api/v2/';
    private $limit = 10;

    public function getElements($endpoint, int $page = 1)
    {
        $offset = ($page - 1) * $this->limit;
        $url = $this->baseUrl . $endpoint . '/?limit=' . $this->limit . '&offset=' . $offset;

        $elements = $this->{$endpoint}($url);

        return $elements;
    }

    public function pokemon($url)
    {
        $response = $this->sendRequest($url);

        if (!isset($response['results'])) {
            return collect([]);
        }

        $elements = $response['results'];

        foreach ($elements as $key => &$element) {
            $pokemon = $this->sendRequest($element['url']);
            $element['photo'] = $pokemon['sprites']['front_default'];
        }
        unset($element);

        return $elements;
    }
}
