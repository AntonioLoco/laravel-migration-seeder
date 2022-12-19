@extends('layouts.app')

@section('title', 'All Trains')

@section('content')
    <div class="container py-3">
        <section>
            <h1>Tutti i treni</h1>
            <div class="row row-cols-2 g-3">
                @foreach ($trains as $train)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $train->departure_station }} -> {{ $train->arrival_station }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $train->agency }}</h6>
                                <p class="card-text">Orario partenza: {{ $train->departure_time }}</p>
                                <p class="card-text">Orario arrivo: {{ $train->arrival_time }}</p>
                                @if (!$train->in_time)
                                    <p class="card-text fs-3 text-warning">IN RITARDO</p>
                                @endif
                                @if ($train->deleted)
                                    <p class="card-text fs-3 text-danger">CANCELLATO</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="pt-5">
            <h1>Treni di oggi</h1>
            <div class="row row-cols-2 g-3">
                @foreach ($today_trains as $train)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $train->departure_station }} -> {{ $train->arrival_station }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $train->agency }}</h6>
                                <p class="card-text">Orario partenza: {{ $train->departure_time }}</p>
                                <p class="card-text">Orario arrivo: {{ $train->arrival_time }}</p>
                                @if (!$train->in_time)
                                    <p class="card-text fs-3 text-warning">IN RITARDO</p>
                                @endif
                                @if ($train->deleted)
                                    <p class="card-text fs-3 text-danger">CANCELLATO</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </div>
@endsection
