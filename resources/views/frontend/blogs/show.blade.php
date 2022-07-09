@extends('layouts.frontend')
@section('content')



            <!-- title -->
            <h1 class="title-lg mt-2 mb-2">
                {{$blog->title}}
            </h1>
            <!-- * title -->

            <!-- post header -->
            <div class="postHeader mb-2">
                <div>
                    <a href="#" class="badge badge-primary">NOTICIAS</a>
                </div>
                <div>
                    {{$blog->created_at->diffForHumans()}}
                </div>
            </div>
            <!-- * post header-->

            <!-- post body -->
            <div class="postBody">

                <p>
                    {{$blog->excerpt}}
                </p>

                <figure>
                    <img src="{{ $blog->banner_image->getUrl() }}" alt="image">
                </figure>

               <p>{!!$blog->description!!}</p>


            </div>

            <h5>Gallería</h5>

            <!-- Gallery Carousel -->
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">
                    @foreach($blog->gallery as $key => $media)
                                         <li class="splide__slide">
                            <img src="{{ $media->getUrl() }}" alt="image" class="imageBlock img-fluid rounded">
                        </li>

                        @endforeach

                    </ul>
                </div>
            </div>



            <!-- post buttons -->
            <div class="row mt-2">
                <div class="col-6">
                    <a href="javascript:;" class="btn btn-primary btn-block">
                        <i class="icon ion-md-share"></i> Share
                    </a>
                </div>
                <div class="col-6">
                    <a href="javascript:;" class="btn btn-success btn-block">
                        <i class="icon ion-ios-heart"></i> 1.2k
                    </a>
                </div>
            </div>
            
            <br>

            <a href="{{ url()->previous() }}" class="btn btn-block btn-danger">Regresar</a>


@endsection