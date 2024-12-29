@extends('frontend.app')

@section('title')
    {{$article->title}} | PRISM Bangladesh Foundation
@endsection

@section('about')

    <!--================who we are Area =================-->
    <section class="who_we_are_area">
        <div class="container">
            <div class="welcome_title">
                <h3>{{$article->title}}</h3>
                <img src="{{asset('front/img/w-title-b.png')}}" alt="">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="who_we_left">

                        {!! $article->description !!}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================End who we are Area =================-->
@endsection
