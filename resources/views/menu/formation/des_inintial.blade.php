@extends('layout.app')
@section('title', 'DES')
@section('content')

    {{-- SECTION-1 --}}
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">DES</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#"> Formation</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Diplôme d’Études Spécialisées</li>
                </ul>
            </div>
        </div>
    </section>


    {{-- SECTION 2 --}}
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="icon-box icon-box-clr-1">
                        <a href="{{ route('menu.formation.des.un') }}">
                            <div class="icon">
                                <i class="fas fa-user-friends">
                                </i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.des.un') }}">
                                Diplôme d’Études Spécialisées de Chirurgie Générale
                            </a>
                        </h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <a href="{{ route('menu.formation.des.deux') }}">
                            <div class="icon">
                                <i class="fas fa-book-reader"></i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.des.deux') }}">
                                Diplôme d’Études Spécialisées de Gynécologie
                            </a>
                        </h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <a href="{{ route('menu.formation.des.trois') }}">
                            <div class="icon">
                                <i class="fas fa-wheelchair"></i>
                            </div>
                        </a>
                        <h4 class="title">
                            <a href="{{ route('menu.formation.des.trois') }}">
                                Diplôme d’Études Spécialisées de Pédiatrie
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
