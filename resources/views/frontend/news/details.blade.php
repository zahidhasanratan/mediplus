@extends('frontend.app')

@section('title')

    {{$news->title}} | DMC Alumni

@endsection


@section('main')
    <!-- Inner Page Header Serction Start Here -->
    <div class="inner-page-header">
        <div class="banner">
            <img src="{{asset('front') }}/images/banner/3.jpg" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page-locator">
                            <ul>

                                <li><a href="{{ asset('') }}">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> News</li>

                            </ul>
                        </div>
                        <div class="header-page-title">

                            <h1>{{$news->title}}</h1>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inner Page Header serction end here -->
    <!-- Home About Start Here -->

    <div class="home-about-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
                    <ul class="nav nav-tabs title-custom">
                        <li class="title-bg"> News </li>
                    </ul>

                    <div class="trending-news news-inner" style="background:none">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="list-col">
                                    <a href="{{route('news.details',$news->slug)}}"> <img src="{{ asset('uploads/news/'.$news->image) }}" alt="" title="{{$news->title}}"></a>
                                    <div class="dsc">
                                        <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{$news->sub_title}} </span>
                                        <h3><a href="{{route('news.details',$news->slug)}}">{{$news->title}} </a></h3>

                                        {!! $news->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>

                @include('frontend.page.right')

            </div>
        </div>
    </div>
    <!-- Home About End Here -->
@endsection
