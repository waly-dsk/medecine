@extends('layout.app')
@section('title', 'Obtenir un Résultat')
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
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="row contact-block">
                <div class="col-md-4">
                </div>

                <div class="col-md-4">
                    @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('menu.vie_estudiantine.resultat.get') }}" method="post" class="signin-form">
                        @csrf
                        <div class="input-grids">
                            <input autofocus type="text" value="{{ old('matricule') }}" name="matricule" id="matricule"
                                placeholder="Matricule" class="contact-input" />
                            {{-- <div class="mb-4">
                                @if ($errors->has('matricule'))
                                    <span class="text-danger">{{ $errors->first('matricule') }}</span>
                                @endif
                            </div> --}}
                            <input type="text" name="dateNaiss" value="{{ old('dateNaiss') }}" id="dateNaiss"
                                placeholder="Date de Naissance" class="contact-input" />
                            {{-- <div class="mb-4">
                                @if ($errors->has('dateNaiss'))
                                    <span class="text-danger">{{ $errors->first('dateNaiss') }}</span>
                                @endif
                            </div> --}}
                            <input type="text" name="anneeAca" value="{{ old('anneeAca') }}" id="anneeAca"
                                placeholder="Année Académique" class="contact-input" />
                            {{-- <div class="mb-4">
                                @if ($errors->has('anneeAca'))
                                    <span class="text-danger">{{ $errors->first('anneeAca') }}</span>
                                @endif
                            </div> --}}
                        </div>

                        <button type="submit" class="btn btn-style btn-style-3">Valider</button>
                    </form>
                </div>

                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>
@endsection
