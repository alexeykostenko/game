<?php

use App\Endpoint;
use Illuminate\Database\Seeder;

class EndpointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $endpoints = [
            [
                'title' => 'People (Star Wars)',
                'class' => App\Library\Api\SwApi::class,
                'endpoint' => 'people',
                'active' => 1
            ],
            [
                'title' => 'Pokemon',
                'class' => App\Library\Api\PokeApi::class,
                'endpoint' => 'pokemon',
                'active' => 1
            ],
            [
                'title' => 'Planets (Star Wars)',
                'class' => App\Library\Api\SwApi::class,
                'endpoint' => 'planets',
                'active' => 1
            ],
        ];

        foreach ($endpoints as $endpointData) {
            Endpoint::firstOrCreate($endpointData);
        }
    }
}
