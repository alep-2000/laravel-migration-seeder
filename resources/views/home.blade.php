@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-5">TRAINS</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center pb-5">
                @foreach($trains as $train)
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="card px-2">
                        <h4>{{ $train->agency }}</h4>
                        <p>Departure station: {{ $train->departure_station }}</p>
                        <p>Arrival station: {{ $train->arrival_station }}</p>
                        <p>Departure time: {{ $train->departure_time }}</p>
                        <p>Arrival time: {{ $train->arrival_time }}</p>
                        <p>Train code: {{ $train->train_code }}</p>
                        <p>Number carriage: {{ $train->n_carriages }}</p>
                        <p>In time: 
                            @if($train->in_time)
                                Si
                            @else
                                No
                            @endif
                        </p>
                        <p>Deleted: 
                            @if($train->deleted)
                                Si
                            @else
                                No
                            @endif
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection
    