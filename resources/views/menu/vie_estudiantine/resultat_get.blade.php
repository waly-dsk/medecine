@extends('layout.app')
@section('title', 'Résultat')
@section('content')
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Obtenir un Résultat</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Vie Estudiantine</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Obtenir un Résultat</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- SECTION 1 --}}
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
                                <h4>
                                    {{ mb_strtoupper($etudiant->nom) }}
                                </h4>
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
                                <h5 style="color: orange" class="mb-3"> Date de Naissance</h5>
                                <div class="icon-box icon-box-clr-2">
                                    <h4>
                                        {{ \Carbon\Carbon::parse($etudiant->dateNaiss)->format('d/m/Y') }}
                                        {{-- {{ \Carbon\Carbon::parse($etudiant->dateNaiss)->format('d M Y') }} --}}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-3 mt-3">
                                <h5 style="color: aqua" class="mb-3"> Lieu de Naissance</h5>
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
                        <hr>

                        {{-- NOTES --}}
                        <div class="row mt-5 mb-5">
                            <div class="col-md-12 col-lg-12  mt-lg-0 mt-4">
                                <div class="icon-box-clr-4">
                                    <table style="color:white; table-layout: fixed;  width: 100%;"
                                        class="table  table-bordered">
                                        @if (count($notes) > 0)
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        UE
                                                    </th>
                                                    <th scope="col">
                                                        ECU
                                                    </th>
                                                    <th scope="col">
                                                        NOTE / 20
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($notes as $note)
                                                    <tr>
                                                        <th style="text-align:center; vertical-align:middle;"
                                                            scope="row">
                                                            {{ mb_strtoupper($note->libUe) }}
                                                        </th>
                                                        <td style="width: 33.33%;">
                                                            @foreach (explode(',', $note->note) as $key => $ecu_note)
                                                                @if ($ecu_note < 12)
                                                                    <span style="color:orange">
                                                                        {{ ucfirst(explode(',', $note->libEcu)[$key]) }}
                                                                    </span>
                                                                    <br>
                                                                @else
                                                                    {{ ucfirst(explode(',', $note->libEcu)[$key]) }}<br>
                                                                @endif
                                                            @endforeach

                                                            {{-- @foreach (explode(',', $note->libEcu) as $ecu_lib)
                                                                {{ ucfirst($ecu_lib) }}<br>
                                                            @endforeach --}}
                                                        </td>
                                                        <td style="width: 33.33%;">
                                                            @foreach (explode(',', $note->note) as $ecu_note)
                                                                @if ($ecu_note < 12)
                                                                    <span style="color:orange">{{ $ecu_note }}</span>
                                                                    <br>
                                                                @else
                                                                    {{ $ecu_note }}<br>
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        @else
                                            <a href="#" class="btn btn-style">
                                                Aucune note n'a été trouvée.
                                            </a>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>

                        {{-- DECISION --}}
                        <div class="row align-items-center">

                            <div class="col-md-12 col-lg-4 mt-3">
                                <div class="icon-box icon-box-clr-1">
                                    <h4 style="color:aqua;">Année : {{ $decision->anneeAca }} </h4>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-4 mt-3">
                                <div class="icon-box icon-box-clr-1">
                                    <h4>Classe : {{ $classe->libClasse }} </h4>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-4 mt-3">
                                <div class="icon-box icon-box-clr-1">
                                    <h4 style="color:orange;">Décision : {{ $decision->decision }} </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
