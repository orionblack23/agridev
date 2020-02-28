@extends('layouts.master')

@section('title')
Boutique
@endsection

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
    @import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');

    * {
        box-sizing: border-box;
    }


    .cards {
        width: 100%;
        display: flex;
        display: -webkit-flex;
        justify-content: center;
        -webkit-justify-content: center;
        max-width: 820px;
    }

    /*.card--1 .card__img,
    .card--1 .card__img--hover {
        background-image: url("{{ URL::to('assets/images/productsCategory/'.$products->first()->title.'.jpg') }}");
    }*/

    .card__like {
        width: 18px;
    }

    .card__clock {
        width: 15px;
        vertical-align: middle;
        fill: #AD7D52;
    }

    .card__time {
        font-size: 12px;
        color: #AD7D52;
        vertical-align: middle;
        margin-left: 5px;
    }

    .card__clock-info {
        float: right;
    }

    .card__img {
        visibility: hidden;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 235px;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;

    }

    .card__info-hover {
        position: absolute;
        padding: 16px;
        width: 100%;
        opacity: 0;
        top: 0;
    }

    .card__img--hover {
        transition: 0.2s all ease-out;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        position: absolute;
        height: 235px;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        top: 0;

    }

    .card {
        margin-top: 20px;
        transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
        background-color: #fff;
        width: 100%;
        height: 100%;
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 13px 10px -7px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        box-shadow: 0px 30px 18px -8px rgba(0, 0, 0, 0.1);
        transform: scale(1.10, 1.10);
    }

    .card__info {
        z-index: 2;
        background-color: #fff;
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
        padding: 16px 24px 24px 24px;
    }

    .card__category {
        font-family: 'Raleway', sans-serif;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 2px;
        font-weight: 500;
        color: #868686;
    }

    .card__title {
        margin-top: 5px;
        margin-bottom: 10px;
        font-family: 'Roboto Slab', serif;
    }

    .card__by {
        font-size: 12px;
        font-family: 'Raleway', sans-serif;
        font-weight: 500;
    }

    .card__author {
        font-weight: 600;
        text-decoration: none;
        color: #AD7D52;
    }

    .card:hover .card__img--hover {
        height: 100%;
        opacity: 0.3;
    }

    .card:hover .card__info {
        background-color: transparent;
        position: relative;
    }

    .card:hover .card__info-hover {
        opacity: 1;
    }

    .column {
        float: left;
        width: 33.3%;
        padding: 0 10px;
    }
</style>

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

<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url({{ asset('assets/images/intro_img/boutique.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="__title"><span>Notre</span>Boutique</h1>

                <p>
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end hero -->
<div class="container">
    <div class="row">

        @foreach($products as $products)
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="card card--1 ">
                <div class="card__img" style="background:url({{ asset('assets/images/productsCategory/'.$products->title.'.jpg') }})"></div>
                <a href="{{ route('product.shoppingView', ['id' => $products->id]) }}" class="card_link">
                    <div class="card__img--hover" style="background:url({{ asset('assets/images/productsCategory/'.$products->title.'.jpg') }})"></div>
                </a>
                <div class="card__info">
                    <h3 class="card__title">{{ $products->title }}</h3>
                </div>
            </article>
        </div>
        @endforeach

    </div>
</div>
@endsection