@extends('layouts.frontend')
@section('title')
Noticias
@endsection
@section('content')


            <div class="row mt-2">
                <!-- item -->

                @forelse($blogs as $key => $blog)

                <div class="col-6">
                    <a href="{{route('frontend.blogs.show', $blog)}}" class="postItem">
                        <div class="imageWrapper">
                            <img src="{{ $blog->thumb_image->getUrl() }}" alt="image" class="image">
                        </div>
                        <h2 class="title">{{ $blog->title ?? '' }}</h2>
                    </a>
                </div>
                <!-- * item --> 
                @empty
                    
                @endforelse



            </div>
            <hr>
            <a href="{{ url()->previous() }}" class="btn btn-block btn-danger">Regresar</a>

@endsection
@section('scripts')
@parent

@endsection