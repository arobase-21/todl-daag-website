@extends('layouts.main')

@section('content')
    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-md-8">
                        <h2 class="display-4 text-dark fw-semibold ls--2">Conseils Agricoles</h2>
                        <p class="text-dark mb-0">
                            Les conseillers agricoles de l'entreprise ont une grande expérience dans l'industrie agricole et offrent des conseils
                            personnalisés sur des sujets tels que la gestion des cultures, la planification des cultures et la gestion des ressources.
                        </p>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="#" class="button button-rounded button-large m-0 text-center fw-medium text-transform-none ls-0 fw-normal">Contactez-nous</a>
                    </div>
                </div>

                <img src="{{ asset('demos/coworking/images/about/hero.jpg') }}" alt="Image" class="rounded-4 my-5">
            </div>

            @include('partials.contact')
        </div>
    </section>
@endsection


@section('script')

@endsection
