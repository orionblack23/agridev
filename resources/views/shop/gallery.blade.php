@extends('layouts.master')

@section('title')
Gallerie
@endsection

@section('content')
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 65%" style="background-image: url({{ asset('assets/images/intro_img/3.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="__title"><span>agro</span> gallery</h1>

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
    <section class="section">
        <div class="container">
            <ul id="gallery-set">
                <li><a class="selected" data-cat="*" href="#">All</a></li>
                <li><a data-cat="category-1" href="#">The Crops</a></li>
                <li><a data-cat="category-2" href="#">Vegatables</a></li>
                <li><a data-cat="category-3" href="#">Fruits</a></li>
                <li><a data-cat="category-4" href="#">Farm Livestock</a></li>
                <li><a data-cat="category-5" href="#">Agro Machinery</a></li>
            </ul>

            <div class="gallery gallery--style-1">
                <div class="__inner">
                    <div class="row  js-isotope" data-isotope-options='{
										"itemSelector": ".js-isotope__item",
										"transitionDuration": "0.8s",
										"percentPosition": "true",
										"masonry": { "columnWidth": ".js-isotope__sizer" }
									}'>

                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__sizer"></div>

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-1">
                            <div class="__item">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/1.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/1.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">Strawberry</h5>
                                    <span>Better than organic</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-3">
                            <div class="__item" data-y="2">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/3.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/3.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">Chili pepper</h5>
                                    <span>Specialized hot peppers</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-2">
                            <div class="__item">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/2.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/2.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">cabbage</h5>
                                    <span>Highest quality</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-4">
                            <div class="__item" data-y="2">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/4.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/4.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">basil</h5>
                                    <span>Limited number</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-5">
                            <div class="__item">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/5.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/5.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">corn</h5>
                                    <span>Organic vegetables</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-1">
                            <div class="__item">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/6.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/6.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">gardens</h5>
                                    <span>High Altitude</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-4">
                            <div class="__item" data-y="2">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/9.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/9.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">cow</h5>
                                    <span>The best farms</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-2">
                            <div class="__item">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/7.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/7.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">the crop</h5>
                                    <span>Harvest more</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-3">
                            <div class="__item" data-y="2">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/8.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/8.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">blueberry</h5>
                                    <span>Fresh berry</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-5">
                            <div class="__item">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/10.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/10.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">asparagus</h5>
                                    <span>No pesticide</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-4">
                            <div class="__item">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/12.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/12.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">grapes</h5>
                                    <span>Taste the difference</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-2">
                            <div class="__item">
                                <figure class="__image">
                                    <img class="lazy" src="{{ asset('assets/images/blank.gif') }}" data-src="{{ asset('assets/images/gallery_img/11.jpg') }}" alt="demo" />

                                    <a class="__link" data-fancybox="gallery" href="{{ asset('assets/images/gallery_img/11.jpg') }}"></a>
                                </figure>

                                <div class="__content">
                                    <h5 class="__content__title">pig</h5>
                                    <span>Control every aspect</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a id="gallery-more-btn" class="custom-btn custom-btn--medium custom-btn--style-1" href="javascript:void(0);">More images</a>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--dark-bg">
        <div class="container">
            <div class="section-heading section-heading--center section-heading--white" data-aos="fade">
                <h2 class="__title">Get <span>in touch</span></h2>

                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>

            <form class="contact-form" action="#" data-aos="fade">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="input-wrp">
                            <input class="textfield" type="text" placeholder="Name" />
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="input-wrp">
                            <input class="textfield" type="text" placeholder="E-mail" />
                        </div>
                    </div>
                </div>

                <div class="input-wrp">
                    <textarea class="textfield" placeholder="Comments"></textarea>
                </div>

                <button class="custom-btn custom-btn--medium custom-btn--style-3 wide" type="submit" role="button">Send</button>
            </form>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--no-pt section--no-pb">
        <!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
        <div class="g_map" data-api-key="AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" data-longitude="44.958309" data-latitude="34.109925" data-marker="{{ asset('assets/images/marker.png') }}" style="min-height: 255px"></div>
    </section>
    <!-- end section -->
</main>
<!-- end main -->
@endsection