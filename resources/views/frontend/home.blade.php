@extends('layouts.frontend')

@section('content')



            <!-- Card Overlay Carousel -->
            <div class="carousel-single splide mt-2 mb-4">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- slide -->
                    @forelse($posts as $post)

                        <li class="splide__slide">
                            <a href="#" class="card card-overlay text-white">
                                <img src="{{$post->thumb_image->getUrl()}}" class="card-img img-fluid" alt="image">
                                <div class="card-img-overlay">

                                    <div class="content">
                                        <h1>{{$post->title}}</h1>
                                        <footer>
                                            <div class="author">
                                                <img src="/template/assets/img/sample/avatar3.jpg" alt="avatar">
                                                Domecq
                                            </div>
                                            <div class="date">
                                                {{$post->created_at->diffForHumans()}}
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </li>
                       @empty
                       @endforelse
                    </ul>
                </div>
            </div>
            <!-- * Card Overlay Carousel -->
<br>
<hr>
            @if(auth()->user()->appointment->count() > 0)
                        <!-- Post Carousel -->
            <div class="sectionTitle mb-2 mt-4">
                <div class="title">
                    <h1>Mis Citas</h1>
                    <a href="#">Ver Todas</a>
                </div>
            </div>
            <div class="carousel-multiple postCarousel splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- slide -->
                        @foreach(auth()->user()->appointment as $appointment)
                        <li class="splide__slide">
                            <a href="#">
                                <img src="/images/calendar.png" alt="image" class="image">
                                <h2 class="title">{{$appointment->title}}</h2>
                                <h2 class="subtitle">{{$appointment->client->name}}</h2>
                                <h2 class="title">{{\Carbon\Carbon::parse($appointment->date)->diffForHumans()}}</h2>
                            </a>
                        </li>
                        @endforeach
                        <!-- * slide -->
                        <!-- slide -->

                    </ul>
                </div>
            </div>
            <!-- * Post Carousel -->
            @endif

            @if(\App\Models\Client::where('ejecutivo_id', auth()->user()->id)->count() > 0)
            <div class="divider mt-4 mb-2"></div>

            <div class="sectionTitle mb-2 mt-4">
                <div class="text-muted">Cartera</div>
                <div class="title">
                    <h1>Tus Clientes</h1>

                    <a href="#">Ver Todos</a>
                </div>
            </div>
            <!-- Button Carousel -->
            <div class="carousel-small splide buttonCarousel">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- slide -->
                        @foreach(\App\Models\Client::where('ejecutivo_id', auth()->user()->id)->get() as $client)
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="{{$client->logo->getUrl()}}" alt="image">
                                </div>
                                <strong>{{$client->name}}</strong>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- * Button Carousel -->

            @endif
            <div class="divider mt-2 mb-4"></div>

            <!-- Iconed Box -->
            <div class="row">
                <!-- item -->
                                <div class="text-muted">Puntos Importantes</div>
                <div class="title">
                    <h1>Recuerda</h1>

   
                </div>
                <br>
                <br>
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-primary">
                            <i class="icon ion-ios-wine"></i>
                        </div>
                        <h4 class="title">Productos</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-danger">
                            <i class="icon ion-ios-people"></i>
                        </div>
                        <h4 class="title">Usuario</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-success">
                            <i class="icon ion-ios-folder-open"></i>
                        </div>
                        <h4 class="title">Lorem Ipsum</h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-info">
                            <i class="icon ion-ios-thumbs-up"></i>
                        </div>
                        <h4 class="title">Lorem Ipsum</h4>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                </div>
                <!-- item -->
            </div>
            <!-- * Iconed Boxes -->

@endsection