@extends('frontend.app')
@section('title')
    Product Category | Carnival Offset Printers
@endsection
@section('main')
    <div class="pagehding-sec">
        <div class="pagehding-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1>Products Category</h1>
                        <ul>
                            <li><a href="{{ asset('/') }}">Home</a></li>
                            <li><a href="#">Products Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-page-sec pt-50 pb-50">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <div class="sec-title text-center">
                        <h1>OUR PRODUCT</h1>
                        <p>Our in-house team of designers are ready to work closely with clients</p>
                    </div>
                </div>
            </div>
            <div class="row">



                @foreach(\App\video::all() as $photos)
                    <div class="col-md-3 col-sm-6 inner">
                        <div class="single-project-inner">
                            <div class="project-thumb">
                                <img src="{{ asset('uploads/video/'.$photos->image) }}" alt="{{$photos->name}}">
                                <div class="project-thumb-overlay">
                                    <div class="project-icon">
                                        <a href="{{url('products_gallery',$photos->id)}}"><i class="icofont-camera"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-inner-desc">
                                <h2><a href="{{url('products_gallery',$photos->id)}}">{{$photos->name}}</a></h2>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection