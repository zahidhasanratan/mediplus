@extends('frontend.app')

@section('title')
    @if(isset($page->title))
    {{$page->title}} | Carnival Offset Printers
    @endif
@endsection

@section('main')

    <div class="pagehding-sec">
        <div class="pagehding-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1>About Page</h1>
                        <ul>
                            <li><a href="{{ asset('/') }}">Home</a></li>
                            <li><a href="#">@if(isset($page->title))
                                       {{$page->title}}
                                    @endif</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-sec pt-100 pb-100">
        <div class="about-sec-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-desc">
                        <div class="about-title">
                            <h1>@if(isset($page->title))
                                    {{$page->title}}
                                @endif</h1>
                            <p class="text-justify">
                                @if(isset($page->description))
                                    {!! $page->description !!}
                                @endif
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-us-img">
                        @if(isset($page->image))
                            <img src="{{ asset('/') }}uploads/page/{{ $page->image }}" alt=""/>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
