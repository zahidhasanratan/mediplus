@extends('frontend.app')

@section('title')
    Contact Us | Carnival Offset Printers
@endsection


@section('main')
    <div class="pagehding-sec">
        <div class="pagehding-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="{{ asset('/') }}">Home</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-page-sec pt-100 pb-100 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form method="post" action="{{ route('contact.us') }}" >
                        @csrf
                    <div class="contact-field">
                        <h2>Write Your Message</h2>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-input-field">
                                <input placeholder="First Name" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-input-field">
                                <input placeholder="Last Name" type="text" name="lname" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-input-field">
                                <input placeholder="Phone" name="phone" type="text" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-input-field">
                                <input placeholder="Your E-mail" type="email" name="email" required >
                            </div>
                        </div>
                        <div class="col-md-12 message-input">
                            <div class="single-input-field">
                                <textarea placeholder="Message" name="message" required ></textarea>
                            </div>
                        </div>
                        <div class="single-input-fieldsbtn">
                            <input value="send now " type="submit">
                        </div>
                    </div>
                    </form>
                </div>
                @foreach(\App\Others::where('id',5)->get() as $contact)
                <div class="col-md-4">
                    <div class="contact-info-inner">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="icofont-smart-phone"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>phone</h2>
                                    <span>{!!   $contact->title !!}</span>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="icofont-ui-email"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>e-mail</h2>
                                    <span>{!!   $contact->slug !!}</span>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="icofont-google-map"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>Office</h2>
                                    <span>{!!   $contact->description !!}</span>
                                </div>
                            </div>
                        </div>
                        
                        
                          <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="icofont-google-map"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>Factory</h2>
                                    <span>268, Raza Nur Plaza (3rd Floor), D.T. Road, Dawanhat, Chittagong-4000, Bangladesh</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
