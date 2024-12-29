@extends('frontend.app')

@section('title')

    Photo Gallery | Carnival Offset Printers

@endsection


@section('main')

    <div class="pagehding-sec">
        <div class="pagehding-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1>Gallery </h1>
                        <ul>
                            <li><a href="{{ asset('/') }}">Home</a></li>
                            <li><a href="#">Gallery </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-page-sec pt-50 pb-50">
        <div class="container">
            <div class="row">
                @foreach($category as $photos)
                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{ asset('uploads/category/'.$photos->image) }}" alt="{{$photos->name}}">
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{url('products_item',$photos->id)}}"><i class="icofont-camera"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{url('products_item',$photos->id)}}">{{$photos->name}}</a></h2>
                        </div>
                    </div>
                </div>
                @endforeach


                <!-- Single project Inner End -->
            </div>
        </div>
    </div>
@endsection
