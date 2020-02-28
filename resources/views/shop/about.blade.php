@extends('layouts.master')

@section('title')
À propos
@endsection

@section('content')
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url({{ asset('assets/images/about/1.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="__title"><span>À Propos</span> de la compagnie</h1>

                <p>
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end hero -->

<!-- start main -->
<main role="main">
    <!-- Common styles
				================================================== -->
    <link rel="stylesheet" href="{{ asset('src/styles/style.min.css') }}" type="text/css">

    <!-- Load lazyLoad scripts
				================================================== -->
    <script>
        (function(w, d) {
            var m = d.getElementsByTagName('main')[0],
                s = d.createElement("script"),
                v = !("IntersectionObserver" in w) ? "8.17.0" : "10.19.0",
                o = {
                    elements_selector: ".lazy",
                    data_src: 'src',
                    data_srcset: 'srcset',
                    threshold: 500,
                    callback_enter: function(element) {

                    },
                    callback_load: function(element) {
                        element.removeAttribute('data-src')

                        oTimeout = setTimeout(function() {
                            clearTimeout(oTimeout);

                            AOS.refresh();
                        }, 1000);
                    },
                    callback_set: function(element) {

                    },
                    callback_error: function(element) {
                        element.src = "https://placeholdit.imgix.net/~text?txtsize=21&amp;txt=Image%20not%20load&amp;w=200&amp;h=200";
                    }
                };
            s.type = 'text/javascript';
            s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
            s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
            m.appendChild(s);
            // m.insertBefore(s, m.firstChild);
            w.lazyLoadOptions = o;
        }(window, document));
    </script>

    <!-- start section -->
    <section class="section section--no-pb section--custom-01">
        <div class="container">
            <div class="section-heading">
                <h2 class="__title">Nous sommes <span>une compagnie agricole et d'élevage moderne </span></h2>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 col-xl-8">
                    <p>
                        We believe in helping brands create through strategy, <a href="#">story-telling, digital products</a>, and integrated experiences on web, mobile, and in the world. And you're here, friends, because you also believe.
                    </p>

                    <p>
                        Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites to developing apps, beautiful design to adventure cinematography. Designers, engineers, creatives, makers, developers, artists, unite. Let’s do something real-special together.
                    </p>

                    <p>
                        Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites.
                    </p>

                    <p>
                        Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites to developing apps, beautiful design to adventure cinematography.crafting websites to developing apps, beautiful design to adventure cinematography.
                    </p>

                    <p>
                        <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#">Contactez nous</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section">
        <div class="container">
            <!-- start counters -->
            <div class="counter">
                <div class="__inner">
                    <div class="row justify-content-sm-center">
                        <!-- start item -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                            <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="150">
                                <div class="d-table">
                                    <div class="d-table-cell align-middle">
                                        <i class="__ico">
                                            <img class="img-fluid  lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/ico/ico_count_1.png') }}" alt="demo" />
                                        </i>
                                    </div>

                                    <div class="d-table-cell align-middle">
                                        <p class="__count js-count" data-from="0" data-to="19500">19 500</p>

                                        <p class="__title">Tons of harvest</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                            <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="300">
                                <div class="d-table">
                                    <div class="d-table-cell align-middle">
                                        <i class="__ico">
                                            <img class="img-fluid  lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/ico/ico_count_2.png') }}" alt="demo" />
                                        </i>
                                    </div>

                                    <div class="d-table-cell align-middle">
                                        <p class="__count js-count" data-from="0" data-to="2720">2 720</p>

                                        <p class="__title">Units of Cattle</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                            <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="450">
                                <div class="d-table">
                                    <div class="d-table-cell align-middle">
                                        <i class="__ico">
                                            <img class="img-fluid  lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/ico/ico_count_3.png') }}" alt="demo" />
                                        </i>
                                    </div>

                                    <div class="d-table-cell align-middle">
                                        <p class="__count js-count" data-from="0" data-to="10000">10 000</p>

                                        <p class="__title">Hectares of farm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                            <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="600">
                                <div class="d-table">
                                    <div class="d-table-cell align-middle">
                                        <i class="__ico">
                                            <img class="img-fluid  lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/ico/ico_count_4.png') }}" alt="demo" />
                                        </i>
                                    </div>

                                    <div class="d-table-cell align-middle">
                                        <p class="__count js-count" data-from="0" data-to="128">128</p>

                                        <p class="__title">Units of technic</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
            <!-- end counters -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->

    <!-- end section -->

    <!-- start section -->
    <section class="section section--no-pb section--custom-03">
        <div class="container">
            <div class="section-heading section-heading--center" data-aos="fade">
                <h2 class="__title">Notre <span>equipe</span></h2>

                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>

            <!-- start team -->
            <div class="team">
                <div class="__inner">
                    <div class="row">
                        <!-- start item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/team_img/1.jpg') }}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">William Doe</h5>

                                    <span>Tractor-Driver</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="200" data-aos-offset="0">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/team_img/2.jpg') }}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Jack Silver</h5>

                                    <span>Mechanic</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="300" data-aos-offset="0">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/team_img/3.jpg') }}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Billi Moore</h5>

                                    <span>Combine Operator</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="400" data-aos-offset="0">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/team_img/4.jpg') }}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Steve Jonson</h5>

                                    <span>Agronomist</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="500" data-aos-offset="0">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/team_img/5.jpg') }}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Billi Moorer</h5>

                                    <span>Assistant</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="600" data-aos-offset="0">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/team_img/6.jpg') }}" alt="demo" />
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Allan Bolt</h5>

                                    <span>Farmer</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
            <!-- end team -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section">
        <div class="container">
            <div class="section-heading section-heading--center" data-aos="fade">
                <h2 class="__title">Parteneres</h2>

                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>

            <div class="partners-list">
                <div class="js-slick" data-slick='{
								 "autoplay": true,
								 "arrows": false,
								 "dots": true,
								 "speed": 1000,
								 "responsive": [
									{
										"breakpoint":576,
										"settings":{
											"slidesToShow": 2
										}
									},
									{
										"breakpoint":767,
										"settings":{
											"slidesToShow": 3
										}
									},
									{
										"breakpoint":991,
										"settings":{
											"slidesToShow": 4
										}
									},
									{
										"breakpoint":1199,
										"settings":{
											"autoplay": false,
											"dots": false,
											"slidesToShow": 5
										}
									}
								]}'>
                    <div class="__item">
                        <img class="img-fluid m-auto" src="{{ asset('assets/images/partners_img/1.jpg') }}" alt="demo" />
                    </div>

                    <div class="__item">
                        <img class="img-fluid m-auto" src="{{ asset('assets/images/partners_img/2.jpg') }}" alt="demo" />
                    </div>

                    <div class="__item">
                        <img class="img-fluid m-auto" src="{{ asset('assets/images/partners_img/3.jpg') }}" alt="demo" />
                    </div>

                    <div class="__item">
                        <img class="img-fluid m-auto" src="{{ asset('assets/images/partners_img/4.jpg') }}" alt="demo" />
                    </div>

                    <div class="__item">
                        <img class="img-fluid m-auto" src="{{ asset('assets/images/partners_img/5.jpg') }}" alt="demo" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--dark-bg">
        <div class="container">
            <div id="prendreContact" class="section-heading section-heading--center section-heading--white" data-aos="fade">
                <h2 class="__title">Prendre <span>contact avec nous</span></h2>

                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                    which looks reasonable.</p>
            </div>

            <form class="contact-form" action="#" data-aos="fade">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="input-wrp">
                            <input class="textfield" type="text" placeholder="Nom & Prenom" />
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="input-wrp">
                            <input class="textfield" type="text" placeholder="E-mail" />
                        </div>
                    </div>
                </div>

                <div class="input-wrp">
                    <textarea class="textfield" placeholder="Message"></textarea>
                </div>

                <button class="custom-btn custom-btn--medium custom-btn--style-3 wide" type="submit" role="button">Envoyer</button>
            </form>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <!-- end section -->
</main>
<!-- end main -->
@endsection