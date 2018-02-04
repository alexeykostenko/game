<?php

namespace App\Http\Controllers;

use App\Endpoint;
use App\Voter;

class WarController extends Controller
{
    public function home()
    {
        $endpoints = Endpoint::getActiveList();

        return view('wars.home', compact('endpoints'));
    }

    public function play()
    {
        $randomEnpoint = Endpoint::inRandomOrder()->firstOrFail();

        return redirect()->route('endpoint', $randomEnpoint->id);
    }

    public function vote(Endpoint $endpoint, Voter $voter)
    {
        $opponents = $endpoint->getOpponents();

        $voter = $voter->firstOrCreate([
            'user_agent' => request()->header('user-agent'),
            'ip' => request()->ip()
        ]);

        if (!auth()->guard('voter')->check()) {
            auth()->guard('voter')->login($voter);
        }

        $endpoint->changeRating();
        $previousOpponents = $endpoint->getPreviousOpponents();

        return view('wars.vote', compact('opponents', 'previousOpponents'));
    }

    public function endpoint(Endpoint $endpoint)
    {
        $opponents = $endpoint->getOpponents();

        return view('wars.vote', compact('opponents'));
    }
}
