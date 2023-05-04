@extends('layouts.main')

@section('content')
    {{--<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('{{ asset('demos/coworking/images/about/hero.jpg') }}') no-repeat center center / cover;">
        <div class="slider-inner">

            <div class="vertical-middle">
                <div class="container dark py-5 py-md-0">
                    <div class="row justify-content-between mt-5 col-mb-50">
                        <div class="col-lg-6 parallax" data-0="transform: translateY(0px); opacity: 1" data-300="transform: translateY(50px); opacity: 0">
                            <span class="gradient-underline h4">SemiColonWeb 2021</span>
                            <h2 class="fw-bold display-2 mb-0">Canvas Development Conference.</h2>
                        </div>
                        <div class="col-lg-6 d-flex align-items-lg-end flex-column parallax text-start text-lg-end mb-5 mb-lg-0" data-0="transform: translateY(0px)" data-700="transform: translateY(-50px)">
                            <div class="mt-auto">
                                <h2 class="mb-2 gradient-text">March 17-19, 2021</h2>
                                <h4 class="fw-normal">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</h4>
                                <a href="#section-tickets" class="button ls-1 text-uppercase fw-semibold button-xxlarge button-white button-gradient m-0" data-scrollto="#section-tickets">Get Tickets Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>--}}

    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-md-8">
                        <h2 class="display-4 text-dark fw-semibold ls--2">Courtage Agricole<!--<span>Home</span>--></h2>
                        <p class="text-dark mb-0">
                            Notre service de courtage agricole vous offre une panoplie de solutions pratiques pour les agriculteurs qui cherchent à vendre leurs produits.
                            Nous travaillons en étroite collaboration avec les producteurs locaux pour aider à trouver des acheteurs pour leurs produits,
                            tout en offrant des conseils et un soutien pour assurer que les transactions sont justes et équitables.
                        </p>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="#" class="button button-rounded button-large m-0 text-center fw-medium text-transform-none ls-0 fw-normal">Contactez-nous</a>
                    </div>
                </div>

                <img src="{{ asset('demos/coworking/images/about/hero.jpg') }}" alt="Image" class="rounded-4 my-5">

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
                        <img src="{{ asset('demos/coworking/images/about/1.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>

            {{--<div class="section p-0 testimonials">
                <div class="container" style="padding: 120px 0">
                    <div class="heading-block border-bottom-0 text-center">
                        <div class="before-heading">What our Members Say</div>
                        <h2 class="text-transform-none fw-semibold">Testimonials</h2>
                        <p class="mb-0 mt-1"><span class="fw-semibold">Excellent, 9.6</span> out of 10 based on <span class="fw-semibold">2,118</span> reviews. </p>
                    </div>

                    <div id="testimonials-carousel" class="owl-carousel carousel-widget testimonial testimonial-full mx-auto text-center" data-animate-in="fadeIn" data-animate-out="fadeOut" data-margin="24" data-nav="false" data-pagi="true" data-items="1" style="max-width: 740px">
                        <div class="slide">
                            <div class="testi-stars mb-4">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                            </div>
                            <h4 class="fw-normal">Collaboratively enhance intermandated innovation via cutting-edge core competencies. Professionally extend covalent e-markets and mission-critical communities. Dramatically communicate revolutionary web services for interactive synergy. Synergistically.</h4>
                            <h4 class="h6 mb-0 fw-medium mt-4 mb-1">- Steve Jobs</h4>
                            <span class="text-muted">Apple Inc.</span>
                        </div>
                        <div class="slide">
                            <div class="testi-stars mb-4">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill-half2"></i>
                            </div>
                            <h4 class="fw-normal">Intrinsicly synergize excellent content whereas user friendly action items. Rapidiously transitiond information after top-line alignments. Authoritatively integrate accurate outsourcing vis-a-vis principle-centered systems energistically</h4>
                            <h4 class="h6 mb-0 fw-medium mt-4 mb-1">- Collis Ta'eed</h4>
                            <span class="text-muted">Envato Inc.</span>
                        </div>
                        <div class="slide">
                            <div class="testi-stars mb-4">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                            </div>
                            <h4 class="fw-normal">Compellingly engage multimedia based niche markets via value-added manufactured products. Competently formulate goal-oriented content for installed base users. Uniquely leverage other's granular ROI without 24/365 collaboration and idea-sharing.</h4>
                            <h4 class="h6 mb-0 fw-medium mt-4 mb-1">- John Doe</h4>
                            <span class="text-muted">XYZ Inc.</span>
                        </div>
                    </div>
                </div>

            </div>--}}

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
{{--    <script src="{{ asset('js/jquery.js') }}"></script>--}}
@endsection
