@extends('layouts.main')

@section('content')
    <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-loop="true">

        <div class="slider-inner">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <div>
                                    <h2 class="font-primary text-transform-none">2ᵉ édition de la Conférence sur l'Entrepreneuriat Agricole</h2>
                                    <p class="fw-light font-primary d-none d-sm-block">Rencontrez des experts du domaine, échangez des idées et découvrez comment lancer et développer une entreprise agricole prospère. Inscrivez-vous dès maintenant !</p>
                                    <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2F2PwH8WZzGzv1KUki9%3Ffbclid%3DIwAR3LN6LtTRi2mE7gKTylUJRVd2me-iaABnAHmtAozFxlXDJeT469QGTAwew&h=AT08A2oz-Fn7x0QsAqoMPUWlO3iDaYbWuddFxZvKY4IPum7mGFKnPtEyio6iQTSxiW47WSEMoA2hl1pobNdhkBEjGtduOnmitvaPPOlldlyBRmSUv4T7g8HxzpMZ2CRtmj7e" class="button button-rounded button-large text-transform-none ls-0 font-primary">S'inscrire</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url('{{ asset('demos/business/images/slider/1.png') }}');"></div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <div>
                                    <h2 class="font-primary">Une passion pour l'agriculture et l'entrepreneuriat.</h2>
                                    <p class="fw-light font-primary d-none d-sm-block"> Nous croyons que ces deux domaines sont étroitement liés et qu'ils ont un rôle important à jouer dans l'avenir de notre économie et de notre société.</p>
                                    <a href="{{ route('contacts') }}" class="button button-rounded button-large text-transform-none ls-0 font-primary">Nous rejoindre</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url('{{ asset('demos/business/images/slider/2.png') }}');"></div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <div>
                                    <h2 class="font-primary">Développez vos compétences en entrepreneuriat agricole</h2>
                                    <p class="fw-light font-primary d-none d-sm-block">Nos formations vous préparent à réussir dans l'industrie agricole et à faire prospérer votre entreprise.</p>
                                    <a href="{{ route('contacts') }}" class="button button-rounded button-large text-transform-none ls-0 font-primary">Nous contacter</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url('{{ asset('demos/business/images/slider/3.png') }}');"></div>
                    </div>
                </div>

                <div class="slider-arrow-left"><i class="bi-arrow-left"></i></div>
                <div class="slider-arrow-right"><i class="bi-arrow-right"></i></div>
            </div>

            <a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow">
                <img class="infinite animated fadeInDown" src="{{ asset('demos/business/images/mouse.svg') }}" alt="Image" >
            </a>
        </div>

    </section>

    <section id="content">
        <div class="content-wrap pt-0">

            <div class="section m-0" style="background-color: #eef2f5;">
                <div class="container">

                    <div class="heading-block text-center border-bottom-0 mb-5 mt-4 mx-auto" style="max-width: 640px">
                        <h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">Nos services</h3>
                        <span>Découvrez comment nous pouvons aider votre entreprise agricole à réussir grâce à nos services sur mesure et notre expertise de l'industrie.</span>
                    </div>

                    <div class="row align-items-stretch g-4">

                        @foreach($companyServices as $service)
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box media-box fbox-bg h-100">
                                    <div class="fbox-media">
                                        <a href="{{ $service['url'] }}">
                                            <img src="{{ $service['image'] }}" alt="Featured Box Image">
                                        </a>
                                    </div>
                                    <div class="fbox-content border-0">
                                        <h3 class="text-transform-none ls-0 fw-semibold">
                                            {{ $service['title'] }}<span class="subtitle fw-light ls-0">{{ $service['description'] }}</span>
                                        </h3>
                                        <a href="{{ $service['url'] }}" class="button-link border-0 color">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>


            <div class="section p-0 mt-0 bg-transparent" style="border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
                <div class="row align-items-stretch">
                    <div class="col-lg-6 text-center col-padding" style="background: url('{{ asset('demos/business/images/sections/1.png') }}') center center no-repeat; background-size: cover;">
                        <div>&nbsp;</div>
                    </div>

                    <div class="col-lg-6 col-padding">
                        <div>
                            <div style="position: relative;">
                                <div class="heading-block border-0" data-heading="A">
                                    <h3 class="text-transform-none ls-0">A propos de nous</h3>
                                </div>
                            </div>

                            <div class="row g-5">
                                <div class="col-lg-10 col-md-8">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-globe"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Expérience et expertise</h3>
                                            <p>
                                                Notre entreprise possède une grande expérience et une expertise approfondie dans le domaine de l'entrepreneuriat agricole.
                                                Nous sommes des professionnels passionnés et dévoués qui sont engagés à aider nos clients à réussir dans l'industrie agricole.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-gears"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Approche personnalisée</h3>
                                            <p>
                                                Nous croyons que chaque client est unique et mérite une approche personnalisée.
                                                Nous travaillons en étroite collaboration avec nos clients pour comprendre leurs besoins
                                                spécifiques et élaborer des solutions sur mesure qui répondent à leurs besoins.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-document"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Engagement envers la durabilité</h3>
                                            <p>
                                                Nous sommes convaincus que l'agriculture durable est la clé de l'avenir de l'industrie agricole.
                                                C'est pourquoi nous nous engageons à promouvoir des pratiques agricoles durables et à soutenir
                                                les agriculteurs qui cherchent à adopter des pratiques agricoles respectueuses de l'environnement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container py-6" style="
                margin-left: 0;
                margin-right: 0;
                width: 100%;
                max-width: unset;
            ">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row col-mb-30">
                            <div class="col-md-4" style="max-width: 375px">
                                <div class="feature-box fbox-small fbox-effect">
                                    <div class="fbox-icon mb-4 mt-3">
                                        <i class="bi-building-gear"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <div class="counter"><span data-from="1" data-to="15" data-refresh-interval="3" data-speed="600"></span>+</div>
                                        <h3>Cooperative agricole partenaire.</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quod consectetur.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="max-width: 375px">
                                <div class="feature-box fbox-small fbox-effect">
                                    <div class="fbox-icon mb-4 mt-3">
                                        <i class="bi-truck"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <div class="counter"><span data-from="100" data-to="3000" data-refresh-interval="300" data-speed="900"></span>+</div>
                                        <h3>Tonnes exportées</h3>
                                        <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Beatae impedit, dignissimos vitae!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="max-width: 375px">
                                <div class="feature-box fbox-small fbox-effect">
                                    <div class="fbox-icon mb-4 mt-3">
                                        <i class="bi-people"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <div class="counter"><span data-from="100" data-to="5000" data-refresh-interval="100" data-speed="1000"></span>+</div>
                                        <h3>Producteurs partenaires</h3>
                                        <p>Amet consectetur adipisicing elit. Accusantium dolores magnam ab consequuntur, impedit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="max-width: 375px">
                                <div class="feature-box fbox-small fbox-effect">
                                    <div class="fbox-icon mb-4 mt-3">
                                        <i class="bi-calendar"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <div class="counter"><span data-from="1" data-to="8" data-refresh-interval="2" data-speed="300"></span>+</div>
                                        <h3>Années d'expérience</h3>
                                        <p>Amet consectetur adipisicing elit. Accusantium dolores magnam ab consequuntur, impedit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{--<div class="section mb-0">
                <div class="heading-block text-center border-bottom-0 mb-0 mx-auto" style="max-width: 640px">
                    <h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">Gallery</h3>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel.</span>
                </div>
            </div>

            <div class="masonry-thumbs row row-cols-6 grid-container" data-big="3" data-lightbox="gallery">
                <a class="grid-item" href="demos/pet/images/gallery/1.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/1.jpg" alt="Gallery Thumb 1">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/2.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/2.jpg" alt="Gallery Thumb 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/3.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/3.jpg" alt="Gallery Thumb 3">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/4.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/4.jpg" alt="Gallery Thumb 4">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/5.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/5.jpg" alt="Gallery Thumb 5">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/6.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/6.jpg" alt="Gallery Thumb 6">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/7.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/7.jpg" alt="Gallery Thumb 7">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/8.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/8.jpg" alt="Gallery Thumb 8">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/9.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/9.jpg" alt="Gallery Thumb 9">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/10.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/10.jpg" alt="Gallery Thumb 10">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/11.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/11.jpg" alt="Gallery Thumb 11">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/12.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/12.jpg" alt="Gallery Thumb 12">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/13.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/13.jpg" alt="Gallery Thumb 13">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/14.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/14.jpg" alt="Gallery Thumb 14">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
                <a class="grid-item" href="demos/pet/images/gallery/15.jpg" data-lightbox="gallery-item">
                    <div class="grid-inner">
                        <img src="demos/pet/images/gallery/thumbs/15.jpg" alt="Gallery Thumb 15">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </a>
            </div>--}}

            @include('partials.contact')

            <div class="container mt-6">
                <div class="heading-block text-center border-bottom-0 mx-auto" style="max-width: 640px">
                    <h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">évènements à venir</h3>
                    <span>Ne manquez plus aucune de nos futures rencontres.</span>
                </div>
                <div class="row contact-properties">
                    <div class="col-md-4">
                        <a href="event-second-edition.html" style="background: url('{{ asset('demos/pet/images/help/1.png') }}') no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark text-center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize fw-normal font-secondary">2ᵉ édition de la Conférence sur l'Entrepreneuriat Agricole</h3>
                                    <span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
                                            01BP1415, rue en face cour d'appel, Lomé<br>
                                            655W+7J Lomé, Togo
                                        </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script>
        jQuery(window).on( 'pluginCarouselReady', function(){
            jQuery('#oc-features').owlCarousel({
                items: 1,
                margin: 60,
                nav: true,
                navText: ['<i class="bi-arrow-left"></i>','<i class="bi-arrow-right"></i>'],
                dots: false,
                stagePadding: 30,
                responsive:{
                    768: { items: 2 },
                    1200: { stagePadding: 200 }
                },
            });
        });
    </script>
@endsection
