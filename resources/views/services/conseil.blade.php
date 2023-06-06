@extends('layouts.main')

@section('title')
    Conseils Agricoles
@endsection

@section('content')
    <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('{{ asset('images/services/hero/2.png') }}') no-repeat center center / cover;">
        <div class="slider-inner">

            <div class="vertical-middle">
                <div class="container dark py-5 py-md-0">
                    <div class="row justify-content-between mt-5 col-mb-50">
                        <div class="col-lg-6 parallax" data-0="transform: translateY(0px); opacity: 1" data-300="transform: translateY(50px); opacity: 0">
                            <span class="gradient-underline h4">
                                Les conseillers agricoles de notre entreprise ont une grande expérience dans l'industrie agricole et offrent des conseils
                                personnalisés sur des sujets tels que la gestion des cultures, la planification des cultures et la gestion des ressources.
                            </span>
                            <h2 class="fw-bold display-2 mb-0">Conseils Agricoles</h2>
                        </div>
                        <div class="col-lg-6 d-flex align-items-lg-end flex-column parallax text-start text-lg-end mb-5 mb-lg-0" data-0="transform: translateY(0px)" data-700="transform: translateY(-50px)">
                            <div class="mt-auto">
                                <a href="{{ route('contacts') }}" class="button ls-1 text-uppercase fw-semibold button-xxlarge button-gradient m-0">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow">
                <img class="infinite animated fadeInDown" src="{{ asset('demos/business/images/mouse.svg') }}" alt="Image" >
            </a>

        </div>
    </section>

    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container">

            </div>

            @include('partials.contact')
        </div>
    </section>
@endsection


@section('script')
    <script src="{{ asset('js/plugins.bootstrap.js') }}"></script>
@endsection
