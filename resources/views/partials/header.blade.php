
<header
    id="header"
    class="full-header transparent-header dark header-size-md"
    data-sticky-class="not-dark"
    data-responsive-class="not-dark"
    data-sticky-offset="full"
    data-sticky-offset-negative="auto"
>
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <div id="logo">
                    <a href="/" class="p-2">
                        <img
                            class="logo-default"
                            srcset="{{ asset('images/logos/todl_consulting_logo_colored.png') }}, {{ asset('images/logos/todl_consulting_logo_colored_2x.png') }} 2x"
                            src="{{ asset('images/logos/todl_consulting_logo_colored_2x.png') }}" alt="Canvas Logo"
                        >
                        <img
                            class="logo-dark"
                            srcset="{{ asset('images/logos/todl_consulting_logo_white.png') }}, {{ asset('images/logos/todl_consulting_logo_white_2x.png') }} 2x"
                            src="{{ asset('images/logos/todl_consulting_logo_white_2x.png') }}"
                            alt="Canvas Logo"
                        >
                    </a>
                </div>

                <div class="header-misc">
                    <a class="top-phone" href="tel:{{ $companyContacts['phone'] }}">
                        <i class="fa-solid fa-phone"></i> <span class="d-none d-md-inline-block">{{ $companyContacts['phone'] }}</span>
                    </a>
                </div>

                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>

                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item active"><a class="menu-link" href="{{ route('home') }}"><div>Accueil</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('services') }}"><div>Services</div></a>
                            <ul class="sub-menu-container" data-class="up-lg:not-dark">
                                <li class="menu-item"><a class="menu-link" href="{{ route('service-details', ['service' => 'formation']) }}"><div>Formations et Accompagnement</div></a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ route('service-details', ['service' => 'courtage']) }}"><div>Courtage Agricole</div></a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ route('service-details', ['service' => 'conseil']) }}"><div>Conseils Agricoles</div></a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('contacts') }}"><div>Contacts</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="#"><div>FAQs</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="#"><div>Agenda</div></a></li>
                    </ul>

                </nav>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
