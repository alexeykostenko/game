@extends('wars.layout')

@section('content')
    <div class="card mb-4 box-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h1 class="card-title pricing-card-title">
                        T-65 X-wing
                        <small class="text-muted subtitle">Starships (Star Wars)</small>
                    </h1>
                    <h4 class="text-primary">45 votes</h4>
                </div>
            </div>
        </div>

        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <div class="card mb-4 box-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col col-sm-8">
                    <h1 class="card-title pricing-card-title">
                        Tangela (114)
                        <small class="text-muted subtitle">Pokemon</small>
                    </h1>
                    <h4 class="text-primary">13 votes</h4>
                </div>
                <div class="col col-sm-4">
                    <img  src="https://cdn.bulbagarden.net/upload/thumb/3/3e/114Tangela.png/250px-114Tangela.png" style="max-width: 150px" class="mx-auto float-right">
                </div>
            </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 13%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
@stop
