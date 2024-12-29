@extends('frontend.app')

@section('title')

    {{$category->name }} | Carnival Offset Printers

@endsection


@section('main')
    <div class="pagehding-sec">
        <div class="pagehding-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1>{{$category->name }}</h1>
                        <ul>
                            <li><a href="{{ asset('/') }}l">Home</a></li>
                            <li><a href="#">{{$category->name }} </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Start -->
    <div class="container">
        <div class="row">
            <div class="gallery">
                @foreach(explode(',', $category->images2) as $image)
                <figure>
                    <img src="{{ asset('images/' . $image) }}" alt="" />
                    {{--<figcaption>Daytona Beach <small>United States</small></figcaption>--}}
                </figure>
                @endforeach


            </div>

        </div>
    </div>
@endsection
