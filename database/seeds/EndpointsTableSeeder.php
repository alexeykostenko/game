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
        $endpointNames = [
            'Starships (Star Wars)',
            'Pokemon'
        ];

        foreach ($endpointNames as $endpointName) {
            $endpoint = Endpoint::firstOrNew(['title' => $endpointName]);
            $endpoint->title = $endpointName;
            $endpoint->active = 1;
            $endpoint->save();
        }
    }
}
