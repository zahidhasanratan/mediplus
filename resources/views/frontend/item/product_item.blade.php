@extends('frontend.app')
@section('title')
    Product List | Carnival Offset Printers
@endsection
@section('main')
<div class="pagehding-sec">
    <div class="pagehding-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h1>Products List</h1>
                    <ul>
                        <li><a href="{{ asset('/') }}">Home</a></li>
                        <li><a href="#"> {{ $category->title }}</a></li>
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
                    <h1>{{ $category->title }}</h1>

                </div>
            </div>
        </div>
        <div class="row">

            @foreach($item as $image)
            <div class="col-md-3 col-sm-6 inner">
                <div class="single-project-inner">
                    <div class="project-thumb">
                        <img src="{{ asset('/') }}uploads/item/{{$image->image }}" alt=""/>
                        <div class="project-thumb-overlay">
                            <div class="project-icon">
                                <a href="{{url('products_details',$image->id)}}"><i class="icofont-external-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-inner-desc">
                        <h2><a href="{{url('products_details',$image->id)}}"> {{$image->name }}</a></h2>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>
@endsection
