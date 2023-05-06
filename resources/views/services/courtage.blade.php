@extends('layouts.main')

@section('title')
    Courtage Agricole
@endsection

@section('content')
    <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('{{ asset('images/services/hero/1.png') }}') no-repeat center center / cover;">
        <div class="slider-inner">

            <div class="vertical-middle">
                <div class="container dark py-5 py-md-0">
                    <div class="row justify-content-between mt-5 col-mb-50">
                        <div class="col-lg-6 parallax" data-0="transform: translateY(0px); opacity: 1" data-300="transform: translateY(50px); opacity: 0">
                            <span class="gradient-underline h4">
                                Nous travaillons en étroite collaboration avec les producteurs locaux pour aider à trouver des acheteurs pour leurs produits,
                                tout en offrant des conseils et un soutien pour assurer que les transactions sont justes et équitables.
                            </span>
                            <h2 class="fw-bold display-2 mb-0">Courtage Agricole</h2>
                        </div>
                        <div class="col-lg-6 d-flex align-items-lg-end flex-column parallax text-start text-lg-end mb-5 mb-lg-0" data-0="transform: translateY(0px)" data-700="transform: translateY(-50px)">
                            <div class="mt-auto">
                                <a href="{{ route('contacts') }}" class="button ls-1 text-uppercase fw-semibold button-xxlarge button-gradient m-0">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container">

                <div class="row mt-5 mb-5 gutter-lg-50 align-items-center">
                    <div class="col-lg-6 p-lg-5">
                        <div class="heading-block border-bottom-0 mb-0">
                            <h2 class="text-transform-none fw-semibold mb-4">Nos partenaires</h2>
                            <p>
                                Notre entreprise dispose d'une vaste base de données de partenaires dans le monde entier.
                                Nous avons établi des relations de confiance avec des producteurs, des acheteurs et des fournisseurs dans différentes régions,
                                ce qui nous permet de fournir un service de courtage agricole de qualité supérieure.
                                Nous avons une équipe dédiée de professionnels qui travaille en étroite collaboration avec nos partenaires pour s'assurer que les transactions sont effectuées de manière équitable et transparente.
                                Nous comprenons l'importance de trouver des partenaires de confiance pour nos clients, c'est pourquoi nous travaillons constamment à élargir notre réseau de partenaires dans le monde entier.
                                Nos clients peuvent être assurés que nous mettrons tout en œuvre pour trouver les meilleurs partenaires pour leurs besoins et leur assurer une expérience de courtage agricole positive.
                            </p>
                            <div class="row">
                                <div class="col-6 col-sm-6 mb-4">
                                    <div class="counter color fw-semibold"><span data-from="1" data-to="15" data-refresh-interval="3" data-speed="600"></span>+</div>
                                    <h5 class="mt-0 fw-medium">Cooperatives agricoles partenaires</h5>
                                </div>

                                <div class="col-6 col-sm-6 mb-4">
                                    <div class="counter color fw-semibold"><span data-from="100" data-to="3000" data-refresh-interval="300" data-speed="900"></span>+</div>
                                    <h5 class="mt-0 fw-medium">Tonnes exportées (dernier exercice)</h5>
                                </div>

                                <div class="col-6 col-sm-6 mb-4">
                                    <div class="counter color fw-semibold"><span data-from="100" data-to="5000" data-refresh-interval="3" data-speed="1000"></span>+</div>
                                    <h5 class="mt-0 fw-medium">Producteurs partenaires</h5>
                                </div>

                                <div class="col-6 col-sm-6 mb-4">
                                    <div class="counter color fw-semibold"><span data-from="1" data-to="8" data-refresh-interval="100" data-speed="1500"></span>+</div>
                                    <h5 class="mt-0 fw-medium">Années d'expérience</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-lg-5">
                        <img src="{{ asset('images/services/courtage/partner.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row flex-row-reverse mb-5 gutter-lg-50 align-items-center">
                    <div class="col-lg-6 p-lg-5">
                        <div class="heading-block border-bottom-0 mb-0">
                            <h2 class="text-transform-none fw-semibold mb-4">La solution ODI</h2>
                            <p>ODI est une solution de financement solidaire qui repose sur le prêt permettant de faire appel au public (sans passer par les banques ou IMF) pour financer un projet.</p>
                            <p>ODI intervient exclusivement dans le cadre d’un contrat d’achat/vente de matières premières agricoles, de produits agroalimentaires, de semences agricoles et/ou de matériels agricoles.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-lg-5">
                        <img src="{{ asset('demos/coworking/images/about/2.jpg') }}" alt="Image">
                    </div>
                </div>

            </div>

            <div class="container">

                <div class="row flex-row-reverse mb-5 gutter-lg-50 align-items-center">
                    <div class="col-lg-6 p-lg-5">
                        <img src="{{ asset('demos/coworking/images/about/2.jpg') }}" alt="Image">
                    </div>
                    <div class="col-lg-6 p-lg-5">
                        <div class="heading-block border-bottom-0 mb-0">
                            <h2 class="text-transform-none fw-semibold mb-4">La solution FARM-LEND</h2>
                            <p>FARM-LEND est une solution de financement solidaire des actifs mobiliers et/ou des services d’entretiens d’exploitations agricoles.</p>
                            <p>Il finance la location des exploitations et/ou le labour, sarclage, semis, récolte et récupère en retour le remboursement en nature avec intérêt.</p>
                        </div>
                    </div>
                </div>

            </div>

            @include('partials.contact')
        </div>
    </section>
@endsection


@section('script')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.bootstrap.js') }}"></script>
    <script src="{{ asset('js/plugins.counter.js') }}"></script>
@endsection
