@extends('frontend.app')
@section('title')
    {{ $item->name }} | Carnival Offset Printers
@endsection
@section('main')
    <div class="pagehding-sec">
        <div class="pagehding-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1>{{ $item->name }}</h1>
                        <ul>
                            <li><a href="{{ asset('/') }}">Home</a></li>
                            <li><a href="#">{{ $item->name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="project-details-page pt-50 pb-50">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="project-details-column-text">
                        <img src="{{ asset('/') }}uploads/item/{{ $item->image }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project-details-column-text">

                        <h2>{{ $item->name }}</h2>
                        {!!  $item->description  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
