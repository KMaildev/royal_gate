@extends('layouts.app')
@section('title', 'Our Team')
@section('content')
    <div class="page-title-area" style="background-image: url({{ asset('data/activities_banner1.jpg') }})">
        <div class="container">
            <div class="page-title-content">
                <h2 style="color: black">Our Team</h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: black">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Our Team
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="freelancer-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Top Freelancer</span>
                <h2>Our Team</h2>
            </div>

            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-freelancer">
                            <img src="{{ $team->photo }}" alt="Royal Gate"
                                style="width: 100%; height: 230px; border-radius: 50%; object-fit: cover; background-size: contain; background-position: top; object-position: center">
                            <h3>
                                {{ $team->name }}
                            </h3>
                            <ul>
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star"></i>
                                </li>
                            </ul>
                            <a href="#" class="default-btn" style="width: 100%">
                                {{ $team->position }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <img src="{{ asset('data/team1.jpg') }}" alt="Royal Gate"
                        style="width: 100%; height: 300px; object-fit: cover; background-size: contain; background-position: top; object-position: center">
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6">
                    <img src="{{ asset('data/team2.jpg') }}" alt="Royal Gate"
                        style="width: 100%; height: 300px; object-fit: cover; background-size: contain; background-position: top; object-position: center">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
