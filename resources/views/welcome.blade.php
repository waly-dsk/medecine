@extends('layout.app')
@section('title', 'Accueil')
@section('content')
    <section class="services-w3l-block py-5 w3l-banner" id="features">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                {{-- <h3 class="title-style">Achieve Your Goals With Edu School</h3> --}}
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="welcomelogo icon-box-clr-1">
                        <img src="{{ asset('assets/images/logo_medecine.jpg') }}" class="rounded-pill" alt="medecine">
                        <h4 class="title mt-3">
                            <a href="#">
                                FACULTE DE
                                <span style="font-weight: bold; color: orange">MEDECINE</span>
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div style="text-align: center; font-weight: bold">
                        <h4 class="title mt-4">
                            <a href="#">
                                MESSAGE DE BIENVENUE
                            </a>
                        </h4>
                    </div>
                    <div class="position-relative mt-5">
                        <img src="{{ asset('assets/images/welcome.png') }}" alt="image1" class="img-fluid radius-image">
                    </div>

                </div>
                <div class="col-md-6 col-lg-3 align-items-stretch mt-lg-0 mt-4">
                    <div class="welcomelogo icon-box-clr-4">
                        <img src="{{ asset('assets/images/logo_université_de_parakou.jpg') }}" class="rounded-pill"
                            alt="universite">
                        <h4 class="title mt-3">
                            <a href="#">
                                UNIVERSITE DE
                                <span style="font-weight: bold; color: orange">PARAKOU</span>
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section -->



    <!-- courses section -->
    <div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Best Courses</p>
                <h3 class="title-style">Find The Right Course For You</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="{{ asset('assets/images/c1.jpg') }}" alt="image4" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">Art & Design</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> 43 Lesson</li>
                                    <li> <i class="fas fa-star"></i> 4.5</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Educational Programs</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6>$42.00</h6>
                                <a class="btn btn-style-primary" href="courses.html">Know Details<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="{{ asset('assets/images/c2.jpg') }}" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html" class="sec-2">Meditation</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> 72 Lesson</li>
                                    <li> <i class="fas fa-star"></i> 4.3</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Best Meditation Classes</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6>$36.00</h6>
                                <a class="btn btn-style-primary" href="courses.html">Know Details<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="{{ asset('assets/images/c3.jpg') }}" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html" class="sec-3">Games</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> 14 Lesson</li>
                                    <li> <i class="fas fa-star"></i> 4.2</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Games Program in a Week</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6>$30.00</h6>
                                <a class="btn btn-style-primary" href="courses.html">Know Details<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-sm-5 mt-4 pt-sm-0 pt-1">
                <a class="btn btn-style btn-style-secondary mt-sm-3" href="courses.html">
                    Browse more courses</a>
            </div>
        </div>
    </div>

    <!-- footer block -->
@endsection
