@extends('layout.app')
@section('title', 'Cursus')
@section('content')
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Cursus d'Étudiant</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Vie Estudiantine</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Cursus d'Étudiant</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    {{-- NOM & PRENOMS --}}
                    <div class="icon-box icon-box-clr-2">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4>
                                    @if ($etudiant->sexe == 'Masculin')
                                        M.
                                    @else
                                        Mlle
                                    @endif
                                    {{ ucfirst($etudiant->prenoms) }}

                                </h4>
                            </div>
                            <div class="col-auto">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col">
                                <h4> {{ mb_strtoupper($etudiant->nom) }} </h4>
                            </div>
                        </div>
                        <hr>

                        {{-- INFOS COMPLEMENTAIRES --}}
                        <div class="row mb-5">
                            <div class="col-md-12 col-lg-3 mt-3">
                                <h5 style="color:aqua" class="mb-3"> Matricule</h5>
                                <div class="icon-box icon-box-clr-1">
                                    <h4>{{ strtoupper($etudiant->matricule) }}</h4>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-3 mt-3">
                                <h5 style="color: orange" class="mb-3"> Date de Naissance </h5>
                                <div class="icon-box icon-box-clr-2">
                                    <h4>
                                        {{ \Carbon\Carbon::parse($etudiant->dateNaiss)->format('d/m/Y') }}
                                        {{-- {{ \Carbon\Carbon::parse($etudiant->dateNaiss)->locale('fr_FR')->isoFormat('LL') }} --}}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-3 mt-3">
                                <h5 style="color: aqua" class="mb-3">Lieu de Naissance</h5>
                                <div class="icon-box icon-box-clr-3">
                                    <h4>{{ ucfirst($etudiant->lieuNaiss) }}</h4>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-3 mt-3">
                                <h5 style="color: orange" class="mb-3">Sexe</h5>
                                <div class="icon-box icon-box-clr-4">
                                    <h4>{{ ucfirst($etudiant->sexe) }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="mb-3 text-center">
                        <h4>VOTRE CURSUS</h4>
                    </div>
                    {{-- CURSUS --}}
                    <div class="icon-box icon-box-clr-3">
                        <hr>
                        <div class="row mt-5 mb-5">
                            <div class="col-md-12 col-lg-12  mt-lg-0 mt-4">
                                <div class="icon-box-clr-4">
                                    <table style="color:white; table-layout: fixed;  width: 100%;"
                                        class="table  table-bordered">
                                        @if (count($cursus) > 0)
                                            <thead class="">
                                                <tr>
                                                    <th scope="col">Année Scolaire</th>
                                                    <th scope="col">Année d'Étude</th>
                                                    <th scope="col">Décision</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cursus as $decision_jury)
                                                    <tr>
                                                        <th scope="row">
                                                            <form id="details-form-{{ $loop->index }}" method="post"
                                                                action="{{ route('menu.vie_estudiantine.details') }}">
                                                                @csrf
                                                                <input type="hidden" name="matricule"
                                                                    value="{{ $etudiant->matricule }}">
                                                                <input type="hidden" name="anneeAca"
                                                                    value="{{ $decision_jury->anneeAca }}">
                                                                <a href="#"
                                                                    onclick="event.preventDefault(); document.getElementById('details-form-{{ $loop->index }}').submit();">
                                                                    {{ $decision_jury->anneeAca }}
                                                                </a>
                                                            </form>
                                                        </th>
                                                        <td style="width: 33.33%;">
                                                            <a href="#"
                                                                onclick="event.preventDefault(); document.getElementById('details-form-{{ $loop->index }}').submit();">
                                                                {{ $decision_jury->libClasse }}
                                                            </a>
                                                        </td>
                                                        <td style="width: 33.33%;">
                                                            <a href="#"
                                                                onclick="event.preventDefault(); document.getElementById('details-form-{{ $loop->index }}').submit();">
                                                                {{ $decision_jury->decision }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        @else
                                            <a href="#" class="btn btn-style">
                                                Aucun résultat trouvé
                                            </a>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
