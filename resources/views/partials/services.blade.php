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
