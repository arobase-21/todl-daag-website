@extends('layouts.main')

@section('title')
    2ᵉ édition de la Conférence sur l'Entrepreneuriat Agricole
@endsection

@section('content')
    <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('{{ asset('demos/conference/images/hero-2.jpg') }}') no-repeat center center / cover;">
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
    </section>

    <section id="content" style="background-color: #000;">
        <div class="content-wrap pt-0" style="overflow: visible;">

            <div id="section-about" class="section page-section bg-transparent pt-0">

                <div class="container">

                    <div class="mb-5 dark">
                        <span class="display-4 fw-bold gradient-underline font-primary">About The Conference</span>
                    </div>

                    <div class="clear"></div>

                    <div class="row justify-content-around dark">
                        <div class="col-md-6">
                            <h4 class="font-body ls-1 text-uppercase">About Meetup</h4>
                            <p class="text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, vel omnis repellendus mollitia, explicabo, maiores quisquam numquam quia reiciendis sit, accusantium atque ex animi perspiciatis ab odit earum assumenda aliquid.</p>
                            <p class="text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, vel omnis repellendus mollitia, explicabo, maiores quisquam numquam quia reiciendis sit, accusantium atque ex animi perspiciatis ab odit earum assumenda aliquid.</p>
                            <div class="row mt-5">
                                <div class="col-6 col-sm-3">
                                    <div class="counter gradient-text"><span data-from="0" data-to="3" data-refresh-interval="1" data-speed="400"></span></div>
                                    <h5 class="font-body">Day Event</h5>
                                </div>

                                <div class="col-6 col-sm-3">
                                    <div class="counter gradient-text"><span data-from="1" data-to="11" data-refresh-interval="2" data-speed="600"></span>+</div>
                                    <h5 class="font-body">Speakers</h5>
                                </div>

                                <div class="col-6 col-sm-3">
                                    <div class="counter gradient-text"><span data-from="1" data-to="23" data-refresh-interval="3" data-speed="1200"></span>+</div>
                                    <h5 class="font-body">Sponsors</h5>
                                </div>

                                <div class="col-6 col-sm-3">
                                    <div class="counter gradient-text"><span data-from="100" data-to="500" data-refresh-interval="50" data-speed="1500"></span>+</div>
                                    <h5 class="font-body">Participants</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="about-img position-relative">
                                <div class="my-3 my-lg-0"><div class="gradient-bg"><img src="demos/conference/images/about/2.jpg" alt="About Image"></div></div>
                                <div data-0="top: 160px" data-end="top: 120px"><div class="gradient-bg"><img src="demos/conference/images/about/1.jpg" alt="About Image"></div></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- #section-about end -->

            <div class="clear"></div>

            <div id="section-speakers" class="section page-section bg-transparent pt-0 mt-6">
                <div class="container">
                    <div class="mb-5 dark d-flex flex-wrap justify-content-between align-items-center">
                        <span class="display-4 fw-bold gradient-underline mb-0">Speakers</span>
                        <a href="#" class="button ls-1 text-uppercase fw-semibold button-effect m-0">Show All Speakers</a>
                    </div>
                    <div class="row mx-auto dark"  style="max-width: 1000px;">
                        <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                            <div class="team-image">
                                <img src="demos/conference/images/speakers/1.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4 class="gradient-text">Gunther Beard</h4><span>Software Designer</span></div>
                            </div>
                        </a>

                        <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                            <div class="team-image">
                                <img src="demos/conference/images/speakers/2.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4 class="gradient-text">Desmond Eagle </h4><span>Canvas Business</span></div>
                            </div>
                        </a>

                        <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                            <div class="team-image">
                                <img src="demos/conference/images/speakers/3.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4 class="gradient-text">Will Barrow</h4><span>Cloud Management</span></div>
                            </div>
                        </a>

                        <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                            <div class="team-image">
                                <img src="demos/conference/images/speakers/4.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4 class="gradient-text">Pelican Steve</h4><span>Community</span></div>
                            </div>
                        </a>

                        <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                            <div class="team-image">
                                <img src="demos/conference/images/speakers/5.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4 class="gradient-text">Gunther Beard</h4><span>Software Designer</span></div>
                            </div>
                        </a>

                        <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                            <div class="team-image">
                                <img src="demos/conference/images/speakers/6.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4 class="gradient-text">Desmond Eagle </h4><span>Canvas Business</span></div>
                            </div>
                        </a>

                        <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                            <div class="team-image">
                                <img src="demos/conference/images/speakers/7.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4 class="gradient-text">Will Barrow</h4><span>Cloud Management</span></div>
                            </div>
                        </a>

                        <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                            <div class="team-image">
                                <img src="demos/conference/images/speakers/8.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4 class="gradient-text">Piff Jenkins</h4><span>Community</span></div>
                            </div>
                        </a>

                        <a href="#" class="team joinspeaker col-lg-4 col-sm-6 mb-5">
                            <div class="team-image gradient-bg">
                                <img src="demos/conference/images/speakers/blank.jpg" alt="John Doe">
                                <i class="bi-plus-circle gradient-text"></i>
                            </div>
                            <div class="team-desc" style="z-index: 3;">
                                <div class="team-title"><h4 class="gradient-text">Join as a Speaker</h4></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!-- #section-speaker end -->

            <div class="clear"></div>

            <!-- Section Schedule
            ============================================= -->
            <div id="section-schedule" class="section page-section bg-transparent pt-0 mt-5 clearix">
                <div class="container">
                    <div class="mb-5 dark d-flex justify-content-between align-items-center">
                        <span class="display-4 fw-bold gradient-underline mb-0">Schedule</span>
                    </div>

                    <div class="schedule-wrap mx-auto rounded" style="max-width: 1000px;">

                        <ul class="nav canvas-alt-tabs tabs-alt tabs-bb tabs nav-tabs nav-fill mb-5" id="tab-9" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="canvas-tab-1" data-bs-toggle="pill" data-bs-target="#tabs-1"
                                        type="button" role="tab" aria-controls="canvas-tab-1" aria-selected="true">17th <span class="d-none d-md-inline-block">March</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="canvas-tab-2" data-bs-toggle="pill" data-bs-target="#tabs-2"
                                        type="button" role="tab" aria-controls="canvas-tab-2" aria-selected="false">18th <span class="d-none d-md-inline-block">March</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="canvas-tab-3" data-bs-toggle="pill" data-bs-target="#tabs-3"
                                        type="button" role="tab" aria-controls="canvas-tab-3" aria-selected="false">19th <span class="d-none d-md-inline-block">March</span></button>
                            </li>
                        </ul>

                        <div id="canvas-tab-alt-content" class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1" role="tabpanel" aria-labelledby="canvas-tabs-1-tab" tabindex="0">
                                <dl class="row dark mb-0">

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">8:30 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Registration And Breakfast</div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">9.00 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Opening Remarks And Keynote<small>- Piff Jenkins</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">10.00 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Web Accessible Designs<small>- Will Barrow</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">11:30 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Delicious Lunch<small>- Cafeteria</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">12.30 pm</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Canvas Rest API<small>- Desmond Eagle</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">2.00 pm</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Building Communities<small>- Jack Steve</small></div>
                                    </dd>

                                </dl>
                            </div>
                            <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="canvas-tabs-2-tab" tabindex="0">
                                <dl class="row dark mb-0">

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">9:00 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Why To Attend Event</div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">10.00 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Surprise Event<small>- Gunther Beard</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">10.00 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Hiring The Right Way in Ecosystem<small>- Will Barrow</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">11:30 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Delicious Lunch<small>- Cafeteria</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">12.45 pm</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Panel Discussion: Future of Canvas<small>- Will Barrow</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">2.30 pm</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Why Should I Choose Customer Support<small>- Indigo Violet</small></div>
                                    </dd>

                                </dl>
                            </div>
                            <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="canvas-tabs-3-tab" tabindex="0">
                                <dl class="row dark mb-0">

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">9:00 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">20 Effective Ways To Build A Better Customer Experience</div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">10.00 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">How to Prepare for your Hacked website?<small>- Pelican Steve</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">10.00 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Inbound Marketing Strategies for Entrepreneurs<small>-  Max Conversion</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">11:30 am</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">Delicious Lunch<small>- Cafeteria</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">2.00 pm</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="schedule-desc">FeedBack, Quiz, Interaction &amp; Gifts<small>- Chauffina Carr, Guy Mann</small></div>
                                    </dd>

                                    <dt class="col-sm-3"><div class="schedule-time font-primary">7.00 pm</div></dt>
                                    <dd class="col-sm-9">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-sm-9">
                                                <div class="schedule-desc">After Party<small>- J W Marriot</small></div>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="https://maps.google.com" target="_blank" class="button ls-1 text-uppercase fw-semibold button-small button-black button-dark bg-dark mt-2 mt-sm-0 float-none float-sm-right">View Map</a>
                                            </div>
                                        </div>
                                    </dd>

                                </dl>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- #section-scedule end -->

            <div class="clear"></div>

            <!-- Section Tickets
            ============================================= -->
            <div id="section-tickets" class="section page-section bg-transparent pt-0">
                <div class="container">
                    <div class="mb-5 dark d-flex justify-content-between align-items-center">
                        <span class="display-4 fw-bold gradient-underline mb-0">Tickets</span>
                    </div>
                </div>


                <div class="position-relative">

                    <div class="container">
                        <div class="row pricing align-items-center">

                            <div class="col-lg-3 col-sm-6">
                                <div class="pricing-box disabled text-center">
                                    <div class="pricing-title title-sm">
                                        <h3 class="text-transform-none ls-0">Early Bird(Full Event)</h3>
                                        <span>Valid until 28th Feb</span>
                                    </div>
                                    <div class="pricing-price early-bird-pricing font-primary fw-bold">
                                        <span class="price-unit">&dollar;</span>39
                                    </div>
                                    <div class="pricing-persons">
                                        <select class="required form-select" name="early-bird-person" id="early-bird-person">
                                            <option value="1" selected>1 Person</option>
                                            <option value="2">2 Persons</option>
                                            <option value="3">3 Persons</option>
                                            <option value="4">4 Persons</option>
                                            <option value="5">5 Persons</option>
                                            <option value="6">6 Persons</option>
                                            <option value="7">7 Persons</option>
                                            <option value="8">8 Persons</option>
                                        </select>
                                    </div>
                                    <div class="pricing-action px-5">
                                        <a href="#" class="button ls-1 text-uppercase fw-semibold button-large button-gradient w-100 m-0">Buy Ticket</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
                                <div class="pricing-box text-center">
                                    <div class="pricing-title title-sm">
                                        <h3 class="text-transform-none ls-0">1 Day Pass</h3>
                                        <span class="text-transform-none">Valid until 19th March</span>
                                    </div>
                                    <div class="pricing-price 1-day-pricing font-primary fw-bold">
                                        <span class="price-unit">&dollar;</span>29
                                    </div>
                                    <div class="pricing-persons">
                                        <select class="required form-select" name="1-day-pricing-person" id="1-day-pricing-person">
                                            <option value="1" selected>1 Person</option>
                                            <option value="2">2 Persons</option>
                                            <option value="3">3 Persons</option>
                                            <option value="4">4 Persons</option>
                                            <option value="5">5 Persons</option>
                                            <option value="6">6 Persons</option>
                                            <option value="7">7 Persons</option>
                                            <option value="8">8 Persons</option>
                                        </select>
                                    </div>
                                    <div class="pricing-action px-5">
                                        <a href="#" class="button ls-1 text-uppercase fw-semibold button-large button-gradient w-100 m-0">Buy Ticket</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                                <div class="pricing-box text-center">
                                    <div class="pricing-title title-sm">
                                        <h3 class="text-transform-none ls-0">2 Days Pass</h3>
                                        <span class="text-transform-none">Valid until 17th March</span>
                                    </div>
                                    <div class="pricing-price 2-day-pricing font-primary fw-bold">
                                        <span class="price-unit">&dollar;</span>49
                                    </div>
                                    <div class="pricing-persons">
                                        <select class="required form-select" name="2-day-pricing-person" id="2-day-pricing-person">
                                            <option value="1" selected>1 Person</option>
                                            <option value="2">2 Persons</option>
                                            <option value="3">3 Persons</option>
                                            <option value="4">4 Persons</option>
                                            <option value="5">5 Persons</option>
                                            <option value="6">6 Persons</option>
                                            <option value="7">7 Persons</option>
                                            <option value="8">8 Persons</option>
                                        </select>
                                    </div>
                                    <div class="pricing-action px-5">
                                        <a href="#" class="button ls-1 text-uppercase fw-semibold button-large button-gradient w-100 m-0">Buy Ticket</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                                <div class="pricing-box text-center">
                                    <div class="pricing-title title-sm">
                                        <h3 class="text-transform-none ls-0">Full Event</h3>
                                        <span class="text-transform-none">Valid until 17th March</span>
                                    </div>
                                    <div class="pricing-price full-pricing font-primary fw-bold">
                                        <span class="price-unit">&dollar;</span>69
                                    </div>
                                    <div class="pricing-persons">
                                        <select class="required form-select" name="full-pricing-person" id="full-pricing-person">
                                            <option value="1" selected>1 Person</option>
                                            <option value="2">2 Persons</option>
                                            <option value="3">3 Persons</option>
                                            <option value="4">4 Persons</option>
                                            <option value="5">5 Persons</option>
                                            <option value="6">6 Persons</option>
                                            <option value="7">7 Persons</option>
                                            <option value="8">8 Persons</option>
                                        </select>
                                    </div>
                                    <div class="pricing-action px-5">
                                        <a href="#" class="button ls-1 text-uppercase fw-semibold button-large button-gradient w-100 m-0">Buy Ticket</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="dotted-bg" style="background: url('demos/conference/images/dotted-bg.svg') repeat center center / contain; min-height: 75%"></div>
                </div>

                <div class="container mt-6">
                    <div class="mx-auto dark text-center" style="max-width: 850px">
                        <h3 class="display-4 gradient-text">Still Getting Confused?</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat nesciunt sint voluptatibus quibusdam veritatis quos dolorum quasi minus, rerum? Officia explicabo hic porro voluptatem ducimus dolor, dolore et. Magni, quidem?</p>
                        <a href="#" class="button ls-1 text-uppercase fw-semibold button-xxlarge button-white button-light button-gradient-hover mt-4">Contact Us</a>
                    </div>
                </div>
            </div><!-- #section-tickets end -->

            <div class="clear"></div>

            <!-- Section Sponsors
            ============================================= -->
            <div id="section-sponsors" class="section page-section bg-transparent pt-0 mt-6">
                <div class="container">
                    <div class="mb-5 dark d-flex justify-content-between align-items-center">
                        <span class="display-4 fw-bold gradient-underline mb-0">Sponsors</span>
                    </div>

                    <div class="mx-auto schedule-wrap text-center dark rounded shadow-lg" style="max-width: 1050px; background-color: #000">
                        <h4 class="font-body mb-5">Gold Sponsors</h4>
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/cnn.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/github.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/google.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/paypal.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/vimeo.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/slack.svg" alt="Brands"></a></div>
                        </div>
                        <div class="line"></div>
                        <h4 class="font-body mb-5">Silver Sponsors</h4>
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/linkedin.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/nat-geo.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/jetblue.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/zillow.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/amazon.svg" alt="Brands"></a></div>
                        </div>
                        <div class="line"></div>
                        <h4 class="font-body mb-5">Partners</h4>
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/ps.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/skype.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/jetblue.svg" alt="Brands"></a></div>
                            <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/netflix.svg" alt="Brands"></a></div>
                        </div>
                        <div class="line"></div>
                        <h3 class="gradient-text">Calling all Sponsors!!! Help us to make Our Event a Blast!</h3>
                        <p class="mx-auto text-muted" style="max-width: 600px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat nesciunt sint voluptatibus quibusdam veritatis quos dolorum quasi minus, rerum? Officia explicabo hic porro voluptatem ducimus dolor, dolore et. Magni, quidem?</p>
                        <a href="#" class="button ls-1 text-uppercase fw-semibold button-xlarge button-white button-gradient mt-4">Sponsor Us?</a>
                    </div>
                </div>
                <div class="dotted-bg" style="background: url('demos/conference/images/dotted-bg.svg') repeat center center / contain; min-height: 25%; top: 90%; right: 0; left: auto; width: 50%"></div>
            </div><!-- #section-Sponsors end -->

            <div class="clear"></div>

            <!-- Section Location
            ============================================= -->
            <div id="section-location" class="section page-section bg-transparent p-0 mb-0" style=" overflow: visible">
                <div class="container">
                    <div class="mb-5 dark d-flex justify-content-between align-items-center">
                        <span class="display-4 fw-bold gradient-underline mb-0">Venue</span>
                    </div>

                </div>

                <div class="position-relative">
                    <div class="w-100 parallax vh-100" style="top: 0; min-height: 400px" data-top-top="transform: translateY(100px);" data-top-center="transform: translateY(0px);">
                        <div class="gmap h-100" data-address="795 Folsom Ave, CA" data-maptype="ROADMAP" data-zoom="13" data-scrollwheel="false" data-markers='[{ address: "795 Folsom Ave, CA", html: "795 Folsom Ave, CA", icon: { image: "demos/conference/images/map-marker.svg", iconsize: [44, 44], iconanchor: [14,44] } }]' data-styles='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#666666"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":10}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]'></div>
                    </div>
                    <div class="container-bg">
                        <div class="container">
                            <div class="row justify-content-between dark">
                                <div class="col-md-4 mb-4">
                                    <h3 class="gradient-underline d-inline-flex mb-5">Gallery</h3>
                                    <div class="masonry-thumbs row row-cols-3 grid-container" data-lightbox="gallery">
                                        <a class="grid-item" href="demos/conference/images/venue/full/1.jpg" data-lightbox="gallery-item"><img src="demos/conference/images/venue/1.jpg" alt="Gallery Thumb 1"></a>
                                        <a class="grid-item" href="demos/conference/images/venue/full/2.jpg" data-lightbox="gallery-item"><img src="demos/conference/images/venue/2.jpg" alt="Gallery Thumb 2"></a>
                                        <a class="grid-item" href="demos/conference/images/venue/full/3.jpg" data-lightbox="gallery-item"><img src="demos/conference/images/venue/3.jpg" alt="Gallery Thumb 3"></a>
                                        <a class="grid-item" href="demos/conference/images/venue/full/4.jpg" data-lightbox="gallery-item"><img src="demos/conference/images/venue/4.jpg" alt="Gallery Thumb 4"></a>
                                        <a class="grid-item" href="demos/conference/images/venue/full/5.jpg" data-lightbox="gallery-item"><img src="demos/conference/images/venue/5.jpg" alt="Gallery Thumb 5"></a>
                                        <a class="grid-item" href="demos/conference/images/venue/full/6.jpg" data-lightbox="gallery-item"><img src="demos/conference/images/venue/6.jpg" alt="Gallery Thumb 6"></a>
                                        <a class="grid-item" href="demos/conference/images/venue/full/7.jpg" data-lightbox="gallery-item"><img src="demos/conference/images/venue/7.jpg" alt="Gallery Thumb 7"></a>
                                        <a class="grid-item" href="demos/conference/images/venue/full/8.jpg" data-lightbox="gallery-item"><img src="demos/conference/images/venue/8.jpg" alt="Gallery Thumb 9"></a>
                                        <a class="grid-item" href="demos/conference/images/venue/full/9.jpg" data-lightbox="gallery-item"><img src="demos/conference/images/venue/9.jpg" alt="Gallery Thumb 10"></a>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <h3 class="gradient-underline d-inline-flex mb-5">Our Address</h3>
                                    <h4 class="fw-normal">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</h4>
                                    <h4 class="mb-2"> +111-222-33-44</h4>
                                    <h4 class="mb-2">+222-333-44-55</h4>
                                    <h4 class="mb-2">no-reply@canvas.com</h4>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <h3 class="gradient-underline d-inline-flex mb-5">Follow Us</h3>
                                    <div class="d-block">
                                        <a href="#" class="social-icon mb-3 rounded-circle border-0 bg-facebook" title="Facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>

                                        <a href="#" class="social-icon mb-3 rounded-circle border-0 bg-delicious" title="Delicious">
                                            <i class="fa-brands fa-delicious"></i>
                                            <i class="fa-brands fa-delicious"></i>
                                        </a>

                                        <a href="#" class="social-icon mb-3 rounded-circle border-0 bg-paypal" title="Paypal">
                                            <i class="fa-brands fa-paypal"></i>
                                            <i class="fa-brands fa-paypal"></i>
                                        </a>

                                        <a href="#" class="social-icon mb-3 rounded-circle border-0 bg-waze" title="Flattr">
                                            <i class="fa-brands fa-waze"></i>
                                            <i class="fa-brands fa-waze"></i>
                                        </a>

                                        <a href="#" class="social-icon mb-3 rounded-circle border-0 bg-android" title="Android">
                                            <i class="fa-brands fa-android"></i>
                                            <i class="fa-brands fa-android"></i>
                                        </a>

                                        <a href="#" class="social-icon mb-3 rounded-circle border-0 bg-discord" title="Smashmag">
                                            <i class="fa-brands fa-discord"></i>
                                            <i class="fa-brands fa-discord"></i>
                                        </a>

                                        <a href="#" class="social-icon mb-3 rounded-circle border-0 bg-google" title="Google Plus">
                                            <i class="fa-brands fa-google"></i>
                                            <i class="fa-brands fa-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- #section-location end -->

            <div class="clear"></div>

            <!-- Upcoming Events
            ============================================= -->
            <div class="section bg-transparent m-0">

                <div class="container">
                    <div class="mx-auto dark text-center" style="max-width: 850px">
                        <span class="display-4 fw-bold gradient-underline">Upcoming Related Events</span>
                        <p class="lead text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat nesciunt sint voluptatibus quibusdam veritatis quos dolorum quasi minus, rerum? Officia explicabo hic porro voluptatem ducimus dolor, dolore et. Magni, quidem?</p>
                    </div>
                    <div class="clear"></div>
                    <div class="row align-items-stretch mt-3">
                        <div class="col-md-4 mb-3">
                            <a href="#" class="card dark" style="background-color: #FB6567">
                                <div class="card-body">
                                    <h4 class="mb-4 font-body fw-normal h5">Opening Remarks And Keynote</h4>
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <h5 class="font-body mb-0 text-uppercase ls-1">- 31st April, 2021</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="#" class="card dark" style="background-color: #F3317A">
                                <div class="card-body">
                                    <h4 class="mb-4 font-body fw-normal h5">Hiring The Right Way in Ecosystem</h4>
                                    <h5 class="font-body mb-0 text-uppercase ls-1">- 2nd May, 2021</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="#" class="card dark" style="background-color: #EC008B">
                                <div class="card-body">
                                    <h4 class="mb-4 font-body fw-normal h5">Why Should I Choose Support</h4>
                                    <h5 class="font-body mb-0 text-uppercase ls-1">- 3rd May, 2021</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- #Related Events end -->

        </div>
    </section>
@endsection


@section('script')

@endsection
