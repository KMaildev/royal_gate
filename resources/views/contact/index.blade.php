@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Contact Us
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="main-contact-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <ul class="address">
                            <p>
                                If you have any queries about recruitments, vacancies, or anything else, our team is ready
                                to response all your queries.
                            </p>
                            <hr>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <span>Phone</span>
                                <a href="tel:951 201484">
                                    951 201484,
                                </a>
                                <a href="tel:8619080">
                                    8619080,
                                </a>
                            </li>

                            <li>
                                <i class="bx bx-phone-call"></i>
                                <span>Phone</span>
                                <a href="tel:959 5100542">
                                    959 5100542,
                                </a>
                                <a href="tel:951 202836">
                                    951 202836
                                </a>
                            </li>

                            <li>
                                <i class="bx bx-envelope"></i>
                                <span>Email</span>
                                <a href="mailto:info@royalgatecompany.com">
                                    info@royalgatecompany.com
                                </a>
                            </li>

                            <li>
                                <i class="bx bx-envelope"></i>
                                <span>Email</span>
                                <a href="mailto:admin@royalgatecompany.com">
                                    admin@royalgatecompany.com
                                </a>
                            </li>

                            <li>
                                <i class="bx bx-envelope"></i>
                                <span>Gmail</span>
                                <a href="mailto:royalgateagency@gmail.com">
                                    royalgateagency@gmail.com
                                </a>
                            </li>


                            <li class="location">
                                <i class="bx bx-location-plus"></i>
                                <span>Address</span>
                                No. 76/80, 2nd Floor, Banyardala Road, Tha Pyay Gone Quarter, Mingalar Taung Nyunt Township,
                                Yangon.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <h3>Contact Form</h3>
                    <div id="contactForm">
                        <p>
                            Alternatively, you may contact us by filling up the contact form. Our team will response you
                            shortly.
                        </p>
                        <hr>
                        <form autocomplete="off" method="POST" action="{{ route('contact.store') }}" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" class="form-control"
                                            value="{{ old('subject') }}">
                                        @error('subject')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea name="message" class="form-control" cols="30" rows="10" data-error="Write your message">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        <span>Send Message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.715783924282!2d96.16822621498369!3d16.79081012415504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec947115f253%3A0x91a863f6c8abcb56!2sRoyal%20Gate%20Co.%2C%20Ltd.!5e0!3m2!1sen!2smm!4v1657043949318!5m2!1sen!2smm"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
