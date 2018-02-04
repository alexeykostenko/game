@extends('wars.layout')

@section('buttons')
    <a class="btn btn-outline-primary" href="/">Home</a>
@stop

@section('content')
<form method="post">
    {{ csrf_field() }}
    <div class="row">
        @foreach($endpoints as $endpoint)
            <input id="input-{{ $endpoint->id }}" type="radio" name="element" onchange="submit();" value="{{ $endpoint->id }}" hidden>
            <label class="col-md-6" for="input-{{ $endpoint->id }}">
              <div class="card mb-4 box-shadow">
                <img src="{{ $endpoint->photo }}" class="mx-auto">
                <div class="card-body">
                  <p class="card-text">{{ $endpoint->name }}</p>
                </div>
              </div>
            </label>
        @endforeach
    </div>
</form>
@stop
