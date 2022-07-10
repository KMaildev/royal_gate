@extends('layouts.app')
@section('title', 'Activities')
@section('content')
    <div class="page-title-area" style="background-image: url({{ asset('data/activities_banner1.jpg') }})">
        <div class="container">
            <center>
                <div class="page-title-content">
                    <h2 style="color: black">Activities</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}" style="color: black">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            Activities
                        </li>
                    </ul>
                </div>
            </center>
        </div>
    </div>

    <section class="blog-area bg-color pb-70">
        <div class="container" style="padding-top: 20px;">
            <div class="row">
                @foreach ($activities as $activitie)
                    <div class="col-md-12">
                        <div class="heading-line-bottom">
                            <h4 class="heading-title">
                                {{ $activitie->title }}
                            </h4>
                            <p>
                                {{ $activitie->description }}
                            </p>
                        </div>
                        <br>
                        <hr>
                    </div>
                    @php
                        $values = explode(',', $activitie->photo);
                    @endphp
                    @foreach ($values as $photo)
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-blog-post">
                                <div class="blog-img">
                                    <img data-enlargeable="" src="{{ $photo }}" alt="Image"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 10px;">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
