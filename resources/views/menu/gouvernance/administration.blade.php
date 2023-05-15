@extends('layout.app')
@section('title', 'Administration')
@section('content')
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Administration</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Gouvernance</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Administration</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            {{-- ROW 1 --}}
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    {{-- CARD 1 --}}
                    <div class="icon-box icon-box-clr-1">
                        <img src="{{ asset('assets/images/team2.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">FATIGBA O. Holden</h4>
                        <h4 style="color:orange">DOYEN</h4>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <img src="{{ asset('assets/images/team3.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">GOMINA Moutawakilou</h4>
                        <h4 style="color:orange">VICE DOYEN</h4>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <img src="{{ asset('assets/images/team1.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4>BIAO AMADOU Alidou</h4>
                        <h4 class="mt-3" style="color:orange">SECRETAIRE GÉNÉRALE D'ENTITE</h4>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-4">
                        <img src="{{ asset('assets/images/team4.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">ADONOU Max Boris</h4>
                        <h4 style="color:orange">CHEF SERVICE COMPTABILITE</h4>
                        <hr>
                    </div>
                </div>
            </div>


            {{-- ROW 2    --}}

            <div class="row mt-5">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-1">
                        <img src="{{ asset('assets/images/team1.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">JOCOUE Viviane Innoncentia A.</h4>
                        <p style="color:aqua">CHEF DIVISION / SECRETARIAT ADMINISTRATIF</p>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <img src="{{ asset('assets/images/team2.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">AGONTINGLO Comlan Félix</h4>
                        <p style="color:aqua">CHEF DIVISION / COMPTABILITE </p>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-4">
                        <img src="{{ asset('assets/images/team3.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">ALAZA ABDOULAYE Loukayatou</h4>
                        <p style="color:aqua">CHEF DIVISION / SCOLARITE / STATISTIQUES</p>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <img src="{{ asset('assets/images/team4.png') }}" class="rounded-pill arrow-png img-responsive">
                        <hr>
                        <h4 class="mb-3">SABI KOTE OROU BOUANRA Mohamadou</h4>
                        <p style="color:aqua">CONDUCTEUR / DOYEN</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
