@extends('layouts.frontend')
@section('title')
Checkin
@endsection
@section('content')


            <div class="card mb-3 mt-2">
                <div class="card-img-top" alt="image">
                <div id="dvMap" style="width: 100%; height:500px;"></div>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQM3TazAd8Wl_jF-kjHNcPuWQPix1QShw&callback=initMap">
                        </script>
                    </div>
                <div class="card-body">
                    <h5 class="card-title">Tu ubicación actual</h5>
                    <p class="card-text">Solo podrás hacer checkin si te encuentras en la ubicación exacta del cliente</p>
                        <form method="POST" action="{{ route("frontend.checkins.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <input class="form-control datetime" type="text" name="datetime" id="datetime" value="{{\Carbon\Carbon::now()->format('d-m-Y H:i:s')}}" required hidden >
                            @if($errors->has('datetime'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('datetime') }}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="lat" id="lat" value="19.384910789816534" required hidden >
                            @if($errors->has('lat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lat') }}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="lng" id="lng" value="-99.16647046792261" required hidden >
                            @if($errors->has('lng'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lng') }}
                                </div>
                            @endif

                        </div>
                        <input type="text" name="appointment" value="{{$appointment->id}}"  hidden>
                        <div class="form-group">
                            <button class="btn btn-block btn-success" type="submit">
                                Hacer Checkin
                            </button>
                        </div>
                    </form>
                    <a href="{{ url()->previous() }}" class="btn btn-block btn-danger">Regresar</a>
                </div>
            </div>

                   

@section('scripts')

<script type="text/javascript">

    window.onload = function () {
        initMap();
    }
    let map;

// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 21.089673186439846, lng: -86.77029743910538};
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("dvMap"), {
    zoom: 14,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;
window.initMap = initMap;
    
</script>

@endsection
@endsection