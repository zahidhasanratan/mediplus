@extends('frontend.app')
@section('title','Carnival Offset Printers')
@section('main')
    <!-- Slider Section Start -->
    <div class="slider">
        <div class="all-slide owl-item">
            @foreach(\App\Slider:: all() as $slider)
            <div class="single-slide" style="background-image:url({{ asset('uploads/slider/'.$slider->image) }});">
                <div class="slider-overlay"></div>
                <div class="slider-wrapper">
                    <div class="slider-text">
                        <div class="slider-caption">
                            <h1>{{ $slider->title }}</h1>

                            <ul>
                                <li><a href="{{ $slider->sub_title }}">learn more</a></li>
                                <li><a href="{{ asset('/contact') }}">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Slider Section End -->


    <div class="service-cat-sec pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @foreach($objects as $object)
                    <div class="sec-title text-center">
                        <h1>{{ $object->title }}</h1>
                        {!!  $object->short  !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">



            @foreach(\App\Service::orderBy('id', 'DESC')->take(3)->get() as $service)
                <div class="col-md-4">
                    <div class="single-service-cat">
                        <div class="service-cat-img">
                            <img src="{{asset('/') }}uploads/service/{{  $service->image }}" alt="">
                            <a href="{{route('service.details',$service->slug)}}" class="service-cat-btn">Read More</a>
                        </div>
                        <div class="service-cat-desc">
                            <span class="service-cat-icon"><i class="icofont-recycle-alt"></i></span>
                            <div class="service-cat-title">
                                <h2><a href="{{route('service.details',$service->slug)}}">{{ $service->title }}</a></h2>
                            </div>
                            {!!  $service->short  !!}
                            <a href="{{route('service.details',$service->slug)}}" class="service-cat-redmore">View Details <i class="icofont-thin-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach


            </div>
        </div>
    </div>
    <!-- service Section End -->


    <!--project Section Start -->
    <div class="project-page-sec pt-100 pb-70">
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
             @foreach(\App\video::all() as $category)
                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{asset('/') }}uploads/video/{{ $category->image }}" alt=""/>
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{url('products_gallery',$category->id)}}"><i class="icofont-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{url('products_gallery',$category->id)}}">{{ $category->title }}</a></h2>
                            {!!  $category->short  !!}
                        </div>
                    </div>
                </div>
             @endforeach

            </div>
        </div>
    </div>
    <!-- Project Section End -->

    <div class="counter-v2-sec">
        <!-- <div class="counter-v2-sec-overlay"></div> -->
        <div class="container">
        @foreach(\App\Others::where('id', 2)->get() as $goal)
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 inner">
                    <div class="counter-v2-up-inner">
                        <div class="countup-text">
                            <h2 class="counter">{{ $goal->title }}</h2>
                            <h4>Shipment Delivered</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 inner">
                    <div class="counter-v2-up-inner">
                        <div class="countup-text">
                            <h2 class="counter">{{ $goal->slug }}</h2>
                            <h4>Qualified Executives</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 inner">
                    <div class="counter-v2-up-inner">
                        <div class="countup-text">
                            <h2 class="counter">{{ $goal->description }}</h2>
                            <h4>Expert Workers</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 inner">
                    <div class="counter-v2-up-inner">
                        <div class="countup-text">
                            <h2 class="counter">{{ $goal->phone }}</h2>
                            <h4>Happy Buyers</h4>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>






    <!-- Testimonial Section Start -->
    <div class="testimonial-sec pt-100 pb-100">
        <div class="testimonial-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-testimonial">
                        @foreach(\App\Activity::all() as $client)
                        <div class="single-testimonial">
                            <div class="client-comment">
                                <div class="client-thumb">
                                    <img src="{{asset('/') }}uploads/activity/{{ $client->image }}" alt=""/>
                                </div>
                                <h2>{{ $client->title }}</h2>
                                <h3>{{ $client->sub_title }}</h3>
                                <p>{!!  $client->short  !!}</p>
                            </div>
                        </div>
                       @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->
@endsection
