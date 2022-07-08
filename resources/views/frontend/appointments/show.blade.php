@extends('layouts.frontend')
@section('title')
{{$appointment->title ?? ''}}
@endsection
@section('content')


            <div class="card cardOverlay mb-3">
                <img src="{{$appointment->client->logo->getUrl()}}" class="card-img-top" alt="image">
                <div class="card-img-overlay">
                    <h5 class="card-title">{{$appointment->client->name ?? ''}}</h5>
                    <p class="card-text">Fecha: {{$appointment->date}}</p>
                    <p class="card-text">Hora: {{$appointment->hour}}</p>
                    <p class="card-text">Last updated 3 mins ago</p>
                </div>
            </div>


            <div class="card mb-1">
                <div class="card-body">
                    <h5 class="card-title">Dirección</h5>
                    <p>{{$appointment->client->address}}</p>


                    <div class="accordion full styled" id="accordionExample3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="exampleHeading1a">
                                <button class="accordion-button btn-primary collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse1a" aria-expanded="true"
                                    aria-controls="collapse1a">
                                    <i class="icon ion-ios-map"></i>
                                    Mapa
                                </button>
                            </h2>
                            <div id="collapse1a" class="accordion-collapse collapse" aria-labelledby="exampleHeading1a"
                                data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                     <div id="dvMap" style="width: 100%; height:500px;"></div>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQM3TazAd8Wl_jF-kjHNcPuWQPix1QShw&callback=initMap">
                        </script>                   
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>

            <div class="card mb-3 mt-2">
                <div class="card-img-top" alt="image">
                    
                </div>
                <div class="card-body">
                    <a href="{{route('frontend.checkins.appointmentcheckin', $appointment->id)}}" class="btn btn-block btn-primary">Hacer Checkin</a>
                    <br>
                    <br>
                    <a href="{{route('frontend.checkouts.appointmentcheckout', $appointment->id)}}" class="btn btn-block btn-primary">Hacer Checkout</a>
                    <br>
                    <br>
                    <a href="{{route('frontend.witnesses.appointment', $appointment->id)}}" class="btn btn-block btn-primary">Capturar Fotografías</a>
                    <br>

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
  const uluru = { lat: 19.384900669182226, lng: -99.16647046806497};
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