@extends('layouts.app')
@section('title', 'Countries')
@section('content')

    <div class="page-title-area" style="background-image: url({{ asset('data/about_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h2 style="color: white">
                    Client Countries
                </h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Client Countries
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <section class="blog-area bg-color pb-70" style="background-color: white">
        <br><br>
        <div class="container">
            <div class="section-title">
                <h2>
                    Long-Term Strategic Talent Acquisition
                </h2>
                <span style="text-align: justify">
                    Apart from urgent vacancies large corporations growing companies have an eternal demand for talented
                    manpower to take their business to the higher level. In such cases we keep a continuous lookout for
                    talented individuals who can add value to your organization. We handle these requirements across
                    multiple global locations and with a previously agreed pricing structure.
                </span>
                <span style="font-weight: bold;">
                    We provide customised recruitment services in these countries:
                </span>
            </div>

            <div class="row">
                @foreach ($countryies as $countryie)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <br>
                        <div class="single-blog-post"
                            style="padding: 20px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                            {{-- blog-img --}}
                            <div class="">
                                <a href="{{ route('country.show', $countryie->id) }}">
                                    <img src="{{ $countryie->photo }}" alt="Image"
                                        style="width: 100%; height: 150px; background-size: center; object-fit: cover; border: 1px solid gray;">
                                </a>
                            </div>

                            <div class="blog-content">
                                <h3>
                                    <a href="{{ route('country.show', $countryie->id) }}">
                                        {{ $countryie->country ?? '' }}
                                    </a>
                                </h3>
                                <a href="{{ route('country.show', $countryie->id) }}" class="read-more">
                                    Learn More
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <hr>
@endsection
@section('script')
@endsection
