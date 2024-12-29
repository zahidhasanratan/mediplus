@extends('frontend.app')

@section('title')

        Facility | Carnival Offset Printers

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
                            <li><a href="#">Facility</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--product Section Start -->
    <div class="project-details-page pt-50 pb-50">
        <div class="container">
            @foreach(\App\Service::orderBy('id', 'ASC')->get() as $key => $feature)
            @if($key %= 2)
            <div class="row">
                <div class="col-md-6">
                    <div class="project-details-column-text">
                        <img src="{{ asset('/') }}uploads/service/{{ $feature->image }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project-details-column-text">

                        <h2>{{ $feature->title }}</h2>
                        <p>{{ $feature->short }}</p>
                    </div>
                </div>
            </div>
            @else
                    <div class="row">

                        <div class="col-md-6">
                            <div class="project-details-column-text">

                                <h2>{{ $feature->title }}</h2>
                                <p>{{ $feature->short }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="project-details-column-text">
                                <img src="{{ asset('/') }}uploads/service/{{ $feature->image }}" alt="">
                            </div>
                        </div>
                    </div>
             @endif
        @endforeach


        </div>
    </div>
    <!-- Project Section End -->
@endsection
