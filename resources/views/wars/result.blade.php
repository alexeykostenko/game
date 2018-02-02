@extends('wars.layout')

@section('buttons')
    <a class="btn btn-outline-primary" href="/">Start</a>
@stop

@section('content')
<form id="form-vote" action="/result">
    <input id="input-1" type="radio" name="element" onchange="submit();" value="1">
    <input id="input-2" type="radio" name="element" onchange="submit();" value="2">
    <div class="row">
        <label class="col-md-6" for="input-1">
          <div class="card mb-4 box-shadow">
            <img src="https://cdn.bulbagarden.net/upload/thumb/5/57/791Solgaleo.png/250px-791Solgaleo.png" style="max-width: 200px" class="mx-auto">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </label>

        <label class="col-md-6" for="input-2">
          <div class="card mb-4 box-shadow">
            <img src="https://www.tinkercad.com/img/pokemon-litten.png" style="max-width: 200px" class="mx-auto">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </label>
    </div>
</form>

<div class="card mb-4 box-shadow">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h1 class="card-title pricing-card-title">
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
                    <small class="text-muted subtitle">Pokemon</small>
                </h1>
                <h4 class="text-primary">55 votes</h4>
            </div>
            <div class="col col-sm-4">
                <img  src="https://cdn.bulbagarden.net/upload/thumb/3/3e/114Tangela.png/250px-114Tangela.png" style="max-width: 100px" class="mx-auto float-right">
            </div>
        </div>
    </div>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>
@stop
