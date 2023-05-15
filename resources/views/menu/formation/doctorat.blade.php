@extends('layout.app')
@section('title', 'Doctorat')
@section('content')

    {{-- SECTION-1 --}}
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Doctorat</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Formation</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Doctorat</li>
                </ul>
            </div>
        </div>
    </section>


    {{-- SECTION 2 --}}
    <section class="services-w3l-block py-5">
        <div class="container py-md-5 py-4">

            {{-- ROW-0 --}}
            <div class="row mb-5">
                <div class="col-md-12 col-lg-12">
                    <div class="icon-box icon-box-clr-2">
                        <div class="icon"><i class="fas fa-user-md"></i></div>
                        <hr>
                        <div style="text-align: center;">
                            <p class="mt-3 mb-2 ">
                                Domaine de formation :
                                <span style="font-weight: bold;color:orange">
                                    Sciences de la Santé
                                </span>
                            </p>
                            <p class="mt-3 mb-2 ">
                                Mention :
                                <span style="font-weight: bold;color: orange">
                                    Médecine Humaine Générale
                                </span>
                            </p>
                            <p class="mt-3 mb-2 ">
                                Spécialité :
                                <span style="font-weight: bold;color: orange">
                                    Néant
                                </span>
                            </p>
                            <p class="mt-3 mb-2 ">
                                Grade :
                                <span style="font-weight: bold;color: orange">
                                    Doctorat en médecine, diplôme d’État
                                </span>
                            </p>
                            <p class="mt-3 mb-2 ">
                                Durée Formation :
                                <span style="font-weight: bold;color: orange">
                                    7 ans
                                </span>
                            </p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            {{-- ROW-1 --}}
            <div class="row">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-1">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Objectif Général</a>
                        </div>
                        <hr>
                        <br>
                        <p style="text-align: justify">
                            Former des Médecins cinq (5) étoiles, tel que défini par l’Organisation Mondiale de la Santé :
                            <br>
                            <br>
                        <ul style="text-align: left" class="offset-1">
                            <li>
                                <span class="ml-5">•</span> dispensateur de soins ;
                            </li>
                            <br>
                            <li>
                                • décideur ;
                            </li>
                            <br>
                            <li>
                                • communicateur ;
                            </li>
                            <br>
                            <li>
                                • membre influent de la communauté ;
                            </li>
                            <br>
                            <li>
                                • gestionnaire.
                            </li>
                            <br>
                        </ul>
                        </p>
                        <hr>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-2">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Objectifs Spécifiques</a>
                        </div>
                        <hr>
                        <br>
                        <p style="text-align: justify; font-size: 19px">
                            A l’issue de la formation, l’apprenant doit être capable de :
                            <br>
                            <br>
                        <ul style="text-align: left" class="offset-1">
                            <li>
                                • Assurer les soins curatifs, préventifs, promotionnels et réadaptatifs ;
                            </li>
                            <br>
                            <li>
                                • identifier et évaluer les besoins sanitaires ;
                            </li>
                            <br>
                            <li>
                                • planifier et mettre en œuvre des programmes d’amélioration de la santé des individus et
                                des communautés ;
                            </li>
                            <br>
                            <li>
                                • intégrer, animer et diriger une équipe de santé ;
                            </li>
                            <br>
                            <li>
                                • planifier, mettre en œuvre et évaluer les services de santé ;
                            </li>
                            <br>
                            <li>
                                • diriger une équipe pour la gestion des épidémies et des catastrophes ;
                            </li>
                            <br>
                            <li>
                                • mener des activités de recherche en santé humaine.
                            </li>
                            <br>
                        </ul>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>


            {{-- ROW-2 --}}
            <div class="row mt-5">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-3">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Profils d'entrée</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            Titulaires du Baccalauréat de l'Enseignement du second degré séries scientifiques C ou D, ou
                            d'un Diplôme admis en équivalence.
                        </p>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-4">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Profils de Sortie</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            Médecin compétent, compétitif, auto entrepreneur, capable d’appréhender les problèmes de santé
                            de la communauté où il exerce et de mener des activités de recherche.
                        </p>
                        <hr>
                    </div>
                </div>
            </div>

            {{-- ROW-3 --}}
            <div class="row mt-5">
                <div class="col-md-6 col-lg-6">
                    <div class="icon-box icon-box-clr-1">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Débouchés</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            Médecin généraliste dans les hôpitaux et centres de santé.
                        </p>
                        <hr>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="icon-box icon-box-clr-2">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Modalités d'admission</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                            Admission directe : Titulaires du Baccalauréat de l'Enseignement du second degré séries
                            scientifiques C ou D, ou d'un Diplôme admis en équivalence, datant de deux ans au plus avec une
                            moyenne générale au moins égale à 12 sur 20 et une moyenne pondérée au moins égale à 12 sur 20
                            pour l’ensemble des matières fondamentales Mathématiques, Sciences Physiques, Chimiques et
                            Technologiques (SPCT) et Sciences de la Vie et de la Terre (SVT).
                        </p>
                        <br>
                        <p style="text-align: justify">
                            Admission par étude de dossiers par la Commission Universitaire d’Orientation.
                        </p>
                        <hr>
                    </div>
                </div>
            </div>

            {{-- ROW-4 --}}
            {{-- <div class="row mt-5">
                <div class="col-md-12 col-lg-12">
                    <div class="icon-box icon-box-clr-2">
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#" class="btn btn-style mt-lg-5 mt-4">Personnes à contacter pour plus
                                d'informations</a>
                        </div>
                        <hr>
                        <p style="text-align: justify">
                        </p>
                        <hr>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
