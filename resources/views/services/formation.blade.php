@extends('layouts.main')

@section('content')
    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-md-8">
                        <h2 class="display-4 text-dark fw-semibold ls--2">Formations et Accompagnement</h2>
                        <p class="text-dark mb-0">
                            Nos formations sont personnalisées pour répondre aux besoins des agriculteurs et des entrepreneurs,
                            et sont axées sur des sujets clés tels que la gestion des ressources humaines, le marketing et le développement de produits.
                            Le service d'accompagnement aide les agriculteurs à mettre en pratique les connaissances acquises lors des formations.
                        </p>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="#" class="button button-rounded button-large m-0 text-center fw-medium text-transform-none ls-0 fw-normal">S'inscrire</a>
                    </div>
                </div>

                <img src="{{ asset('images/services/hero/4.png') }}" alt="Image" class="rounded-4 my-5">

                <div class="row mt-5 mb-5 gutter-lg-50 align-items-center">
                    <div class="col-lg-6 p-lg-5">
                        <div class="heading-block border-bottom-0 mb-0">
                            <h2 class="text-transform-none fw-semibold mb-4">L'École de L'Investisseur Agricole</h2>
                            <p>
                                L'École de l'Investisseur Agricole (EIA) est une formation complète destinée aux investisseurs et aux producteurs
                                agricoles qui souhaitent développer leur expertise et leurs compétences dans le domaine de l'investissement agricole.
                                Cette formation est essentielle pour les entrepreneurs qui cherchent à maximiser leur potentiel de réussite et à saisir
                                les opportunités de croissance dans l'industrie agricole. L'EIA est subdivisée en quatre grands niveaux, chacun offrant
                                un contenu de formation spécifique adapté aux besoins des participants. Les niveaux de formation comprennent les bases de
                                l'investissement agricole, l'analyse de marché et la planification stratégique, la gestion de portefeuille et l'investissement
                                dans les infrastructures agricoles. Les participants à la formation bénéficieront de l'expertise de nos formateurs expérimentés,
                                ainsi que de l'accès à des ressources en ligne exclusives. Avec l'EIA, les investisseurs et les producteurs agricoles seront mieux
                                équipés pour réussir dans l'industrie en constante évolution de l'agriculture.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-lg-5">
                        <img src="{{ asset('demos/coworking/images/about/1.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row flex-row-reverse mb-5 gutter-lg-50 align-items-center">
                    <div class="col-lg-6 p-lg-5">
                        <div class="heading-block border-bottom-0 mb-0">
                            <h2 class="text-transform-none fw-semibold mb-4">NIVEAU DEBUTANT (EIA-D)</h2>
                            <ol class="list-numbers my-5">
                                <li>Production (céréales, tubercules, fruits…)</li>
                                <li>Marché interne et externe.</li>
                                <li>Organisation d’une filière agricole</li>
                                <li>Agriculture contractuelle</li>
                            </ol>
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
                            <h2 class="text-transform-none fw-semibold mb-4">NIVEAU INTERMEDIARE (EIA-I)</h2>
                            <ol class="list-numbers my-5">
                                <li>Développement d’une filière agricole de A à Z</li>
                                <li>Installation d’une ferme/exploitation agricole</li>
                                <li>Agriculture bio et équitable</li>
                                <li>Création est gestion d’une société coopérative</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">

                <div class="row flex-row-reverse mb-5 gutter-lg-50 align-items-center">
                    <div class="col-lg-6 p-lg-5">
                        <div class="heading-block border-bottom-0 mb-0">
                            <h2 class="text-transform-none fw-semibold mb-4">NIVEAU AVANCE (EIA-A)</h2>
                            <ol class="list-numbers my-5">
                                <li>Certification biologique et équitable</li>
                                <li>Projet d’agro-industrie</li>
                                <li>Mécanisation agricole</li>
                                <li>Digital agriculture</li>
                            </ol>
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
                            <h2 class="text-transform-none fw-semibold mb-4">BROKERAGE AND TRADING TRIP</h2>
                            <ol class="list-numbers my-5">
                                <li>Courtage et négoce international</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>

            @include('partials.contact')
        </div>
    </section>
@endsection


@section('script')
    <script src="{{ asset('js/plugins.bootstrap.js') }}"></script>
@endsection
