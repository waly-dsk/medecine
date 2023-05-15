@extends('layout.app')
@section('title', 'Mot Du Doyen')
@section('content')
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Mot Du Doyen</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Gouvernance</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Mot Du Doyen</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-6 col-lg-6 align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <div class="icon"><i class="fas fa-user-graduate"></i></div>
                        <h4 class="title"><a href="#about">Le Doyen (Profile Grand format)</a></h4>
                        {{-- <p>Ras effic itur metusga via suscipit consect eturerse adi unde omnis.</p> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="icon-box icon-box-clr-1">
                        <div class="icon"><i class="fas fa-user-friends"></i></div>
                        <h4 class="title"><a>Message du doyen</a></h4>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, enim
                            animi officia provident
                            quae tenetur. Nesciunt facere ut neque perspiciatis deserunt impedit tempora dolores hic, esse
                            beatae illum aperiam fugit?Natus harum quibusdam aliquam a. Aliquam possimus voluptates laborum
                            quos blanditiis autem eius placeat at harum similique dolor, omnis, numquam temporibus. Quam
                            reiciendis numquam totam maiores dignissimos repudiandae et possimus.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
