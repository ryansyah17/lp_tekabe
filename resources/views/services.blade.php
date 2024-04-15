@extends('layouts/app')

@section('title') Services @endsection

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{ asset('assets/img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About us</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="services-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ asset('assets/img/icons/si-2.png')}}" alt="">
                        </div>
                        <h4>Scriptwriting and editing</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ asset('assets/img/icons/si-1.png')}}" alt="">
                        </div>
                        <h4>Motion graphics</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ asset('assets/img/icons/si-2.png')}}" alt="">
                        </div>
                        <h4>Scriptwriting and editing</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ asset('assets/img/icons/si-3.png')}}" alt="">
                        </div>
                        <h4>Video distribution</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ asset('assets/img/icons/si-4.png')}}" alt="">
                        </div>
                        <h4>Video hosting</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ asset('assets/img/icons/si-4.png')}}" alt="">
                        </div>
                        <h4>Video hosting</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection