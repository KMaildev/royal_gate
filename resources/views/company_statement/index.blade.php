@extends('layouts.app')
@section('title', 'VISION / MISSION / VALUES')
@section('content')
    <div class="page-title-area" style="background-image: url({{ asset('data/statement_banner.jpeg') }})">
        <div class="container">
            <div class="page-title-content">
                <h2 style="color: white">
                    VISION / MISSION / VALUES
                </h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" style="color: white">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        VISION / MISSION / VALUES
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class=""
        style="
        box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        background-color: #105195;
        background: -webkit-gradient(linear, left top, left bottom, from(#105195), to(#a5517a));
        background: -webkit-linear-gradient(top, #105195, #a5517a);
        background: -moz-linear-gradient(top, #105195, #a5517a);
        background: -ms-linear-gradient(top, #105195, #a5517a);
        background: -o-linear-gradient(top, #105195, #a5517a); 
       ">
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="app-img-1">
                                <img src="{{ asset('data/statement/3.png') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="app-downloading-content">
                                <h2 class="entry-title text-black text-uppercase pt-0 mt-0"
                                    style="text-shadow: 2px 2px gray; color: white;">
                                    Our Vision
                                </h2>
                                <div>
                                    <p style="color: white; text-align: justify; font-size: 18px;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum asperiores fuga
                                        aspernatur
                                        numquam! Rem tempore ullam molestias quia totam explicabo veniam cum cupiditate fuga
                                        corporis ratione, neque saepe. Veritatis, perspiciatis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>

    <section class=""
        style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        background-color: #3b9124;
        background: -webkit-gradient(linear, left top, left bottom, from(#3b9124), to(#0d0606));
        background: -webkit-linear-gradient(top, #3b9124, #0d0606);
        background: -moz-linear-gradient(top, #3b9124, #0d0606);
        background: -ms-linear-gradient(top, #3b9124, #0d0606);
        background: -o-linear-gradient(top, #3b9124, #0d0606); 
    ">
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="app-downloading-content">
                                <h2 class="entry-title text-black text-uppercase pt-0 mt-0"
                                    style="text-shadow: 2px 2px gray; color: white;">
                                    OUR MISSION
                                </h2>
                                <div>
                                    <p style="color: white; text-align: justify; font-size: 18px;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum asperiores fuga
                                        aspernatur
                                        numquam! Rem tempore ullam molestias quia totam explicabo veniam cum cupiditate fuga
                                        corporis ratione, neque saepe. Veritatis, perspiciatis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="app-img-1">
                                <img src="{{ asset('data/mission_banner.png') }}" alt="Image" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>


    <section class=""
        style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
    background-color: #bb8d2f;
    background: -webkit-gradient(linear, left top, left bottom, from(#bb8d2f), to(#9b517c));
    background: -webkit-linear-gradient(top, #bb8d2f, #9b517c);
    background: -moz-linear-gradient(top, #bb8d2f, #9b517c);
    background: -ms-linear-gradient(top, #bb8d2f, #9b517c);
    background: -o-linear-gradient(top, #bb8d2f, #9b517c); 
">
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="app-img-1">
                                <img src="{{ asset('data/value_banner.png') }}" alt="Image" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="app-downloading-content">
                                <h2 class="entry-title text-black text-uppercase pt-0 mt-0"
                                    style="text-shadow: 2px 2px gray; color: white;">
                                    OUR CORE VALUE
                                </h2>
                                <div>
                                    <p style="color: white; text-align: justify; font-size: 18px;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum asperiores fuga
                                        aspernatur
                                        numquam! Rem tempore ullam molestias quia totam explicabo veniam cum cupiditate fuga
                                        corporis ratione, neque saepe. Veritatis, perspiciatis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>

@endsection
@section('script')
@endsection
