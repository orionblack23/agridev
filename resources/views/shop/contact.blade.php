@extends('layouts.master')

@section('title')
Contact
@endsection

@section('content')
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 55%" style="background-image: url({{ asset('assets/images/intro_img/contact.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="__title"><span>AGRIDEV</span> Contactez nous</h1>

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
    <link rel="stylesheet" href="{{ URL::to('src/styles/style.min.css') }}" type="text/css">

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
                        element.src = "{{ URL::to('https://placeholdit.imgix.net/~text?txtsize=21&amp;txt=Image%20not%20load&amp;w=200&amp;h=200') }}";
                    }
                };
            s.type = 'text/javascript';
            s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
            s.src = `{{ URL::to('"https://cdn.jsdelivr.net/npm/vanilla-lazyload@" \+ \v \+ "/dist/lazyload.min.js"') }}`;
            m.appendChild(s);
            // m.insertBefore(s, m.firstChild);
            w.lazyLoadOptions = o;
        }(window, document));
    </script>

    <!-- start section -->
    <section class="section">
        <div class="container">
            <!-- start company contacts -->
            <div class="company-contacts  text-center">
                <div class="__inner">
                    <div class="row justify-content-around">
                        <!-- start item -->
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="__item">
                                <i class="__ico fontello-location"></i>

                                <h4 class="__title">adresse</h4>

                                <p>
                                    523 Sylvan Ave, 5th Floor Mountain View, CA 94041USA
                                </p>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="__item">
                                <i class="__ico fontello-phone"></i>

                                <h4 class="__title">Telephone</h4>

                                <p>
                                    +1 (234) 56789,<br>+1 987 654 3210
                                </p>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="__item">
                                <i class="__ico fontello-mail-1"></i>

                                <h4 class="__title">e-mail</h4>

                                <p><a href="mailto:support@agrocompany.com">support@agrocompany.com</a></p>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
            <!-- end company contacts -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--dark-bg  section--contacts">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-6">

                    <div class="row justify-content-end">
                        <div class="col-md-11">
                            <div id="prendreContact" class="section-heading section-heading--white">
                                <h2 class="__title">Prendre <span>contact avec nous</span></h2>

                                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                            </div>

                            <form class="contact-form" action="#">
                                <div class="input-wrp">
                                    <input class="textfield" type="text" placeholder="Nom & Prenom" />
                                </div>

                                <div class="input-wrp">
                                    <input class="textfield" type="text" placeholder="E-mail" />
                                </div>

                                <div class="input-wrp">
                                    <textarea class="textfield" placeholder="Message"></textarea>
                                </div>

                                <button class="custom-btn custom-btn--medium custom-btn--style-3 wide" type="submit" role="button">Send</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
    </section>
    <!-- end section -->
</main>
<!-- end main -->
@endsection