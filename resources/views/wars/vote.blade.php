@extends('wars.layout')

@section('buttons')
    <a class="btn btn-outline-primary" href="/">Start</a>
@stop

@section('content')
<form action="/result">
    <input id="input-1" type="radio" name="element" onchange="submit();" value="1">
    <input id="input-2" type="radio" name="element" onchange="submit();" value="2">
    <div class="row">
        <label class="col-md-6" for="input-1">
          <div class="card mb-4 box-shadow">
            <img  src="https://cdn.bulbagarden.net/upload/thumb/3/3e/114Tangela.png/250px-114Tangela.png" style="max-width: 200px" class="mx-auto">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </label>
        <label class="col-md-6" for="input-2">
          <div class="card mb-4 box-shadow">
            <img  src="https://assets.pokemon.com/assets/cms2/img/pokedex/full//722.png" style="max-width: 200px" class="mx-auto">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </label>
    </div>
</form>
@stop
