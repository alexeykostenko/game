@extends('wars.layout')

@section('buttons')
    <a class="btn btn-outline-primary" href="/">Home</a>
@stop

@section('content')
<form method="post" action="{{ $opponents->nextPageUrl() }}">
    {{ csrf_field() }}
    <div class="row">
        @foreach($opponents as $opponent)
            <input id="input-{{ $opponent->id }}" type="radio" name="element" onchange="submit();" value="{{ $opponent->id }}" hidden>
            <input type="hidden" name="elements[]" value="{{ $opponent->id }}">
            <label class="col-md-6" for="input-{{ $opponent->id }}">
              <div class="card mb-4 box-shadow opponent">
                <img src="{{ $opponent->photo }}" class="mx-auto">
                <div class="card-body">
                  <p class="card-text">{{ ucfirst($opponent->name) }}</p>
                </div>
              </div>
            </label>
        @endforeach
    </div>
</form>

@if(request()->isMethod('post') && isset($previousOpponents))
    @foreach($previousOpponents as $previousOpponent)
    <div class="card mb-4 box-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h1 class="card-title pricing-card-title">
                        <small class="text-muted subtitle">{{ ucfirst($previousOpponent->name) }}</small>
                    </h1>
                    <h4 class="text-primary">{{ $previousOpponent->votes }} votes</h4>
                </div>
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ $previousOpponent->votes }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    @endforeach
@endif
@stop
