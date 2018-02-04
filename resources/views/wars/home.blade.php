@extends('wars.layout')

@section('content')
    @foreach($endpoints as $endpoint)
        <div class="card mb-4 box-shadow">
            @if($endpoint->elements->count() && $endpoint->elements()->first())
                <div class="card-body">
                    <div class="row">
                        @php
                            $element = $endpoint->elements()->orderBy('votes', 'desc')->first();
                            $name = ucfirst($element->name);
                        @endphp
                        @if ($element->photo)
                            <div class="col col-sm-8">
                                <h1 class="card-title pricing-card-title">
                                    {{ $name }}
                                    <small class="text-muted subtitle">{{ $endpoint->title }}</small>
                                </h1>
                                <h4 class="text-primary">{{ $element->votes }} votes</h4>
                            </div>
                            <div class="col col-sm-4">
                                <img  src="{{ $element->photo }}" style="max-width: 150px" class="mx-auto float-right">
                            </div>
                        @else
                            <div class="col">
                                <h1 class="card-title pricing-card-title">
                                    {{ $name }}
                                    <small class="text-muted subtitle">{{ $endpoint->title }}</small>
                                </h1>
                                <h4 class="text-primary">{{ $element->votes }} votes</h4>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{ $endpoint->elements->first()->votes }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            @else
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h1 class="card-title pricing-card-title">
                                <small class="text-muted subtitle">{{ $endpoint->title }}</small>
                            </h1>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endforeach
@stop
