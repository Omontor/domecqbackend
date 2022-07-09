@extends('layouts.frontend')
@section('title')
Citas
@endsection
@section('content')

            <div class="listView detailed">

                @foreach($appointments as $key => $appointment)


                <a href="{{ route('frontend.appointments.show', $appointment->id) }}" class="listItem">
                    <div class="image">
                        <img src="{{ $appointment->client->logo->getUrl() ?? '' }}" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>{{ $appointment->title ?? '' }}</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                 {{ $appointment->client->name ?? '' }}
                            </div>
                        </div>
                    </div>
                </a>
                    
                @endforeach


              
            </div>
            <hr>
            <a href="{{ url()->previous() }}" class="btn btn-block btn-danger">Regresar</a>


@endsection
@section('scripts')
@parent

@endsection