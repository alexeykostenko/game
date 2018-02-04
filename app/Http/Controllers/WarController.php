<?php

namespace App\Http\Controllers;

use App\Endpoint;

class WarController extends Controller
{
    public function start()
    {
        $randomEnpoint = Endpoint::inRandomOrder()->firstOrFail();

        return redirect()->route('endpoint', $randomEnpoint->id);
    }

    public function endpoint(Endpoint $endpoint)
    {
        $endpoints = $endpoint->getOpponents();

        return view('wars.vote', compact('endpoints'));
    }
}
