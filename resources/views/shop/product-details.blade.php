@extends('layouts.master')

@section('title')
product-details
@endsection


@section('content')
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url({{ asset('assets/images/intro_img/details.jpg') }});">
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
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        .cont {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px;
            display: flex;
        }

        /* Columns */
        .left-column {
            width: 65%;
            position: relative;
        }

        .right-column {
            width: 35%;
            margin-top: 60px;
        }

        /* Left Column */
        .left-column {
            padding: 20px;
            width: 450px;
            height: 439px;
        }

        .left-column img {
            width: 100%;
            height: 439px;
            left: 0;
            top: 0;
            transition: all 0.3s ease;
        }

        .left-column img.active {
            opacity: 1;
        }

        /* Product Description */
        .product-description {
            border-bottom: 1px solid #E1E8EE;
            margin-bottom: 20px;
        }

        .product-description span {
            font-size: 12px;
            color: #358ED7;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .product-description h1 {
            font-weight: 600;
            font-size: 52px;
            color: #43484D;
            letter-spacing: -2px;
        }

        .product-description p {
            font-size: 16px;
            font-weight: 300;
            color: #86939E;
            line-height: 24px;
        }

        /* Product Color */
        .product-color {
            margin-bottom: 30px;
        }

        .color-choose div {
            display: inline-block;
        }

        .color-choose input[type=&quot;
        radio&quot;

        ] {
            display: none;
        }

        .color-choose input[type=&quot;
        radio&quot;

        ]+label span {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: -1px 4px 0 0;
            vertical-align: middle;
            cursor: pointer;
            border-radius: 50%;
        }

        .color-choose input[type=&quot;
        radio&quot;

        ]+label span {
            border: 2px solid #FFFFFF;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
        }

        .color-choose input[type=&quot;
        radio&quot;

        ]#red+label span {
            background-color: #C91524;
        }

        .color-choose input[type=&quot;
        radio&quot;

        ]#blue+label span {
            background-color: #314780;
        }

        .color-choose input[type=&quot;
        radio&quot;

        ]#black+label span {
            background-color: #323232;
        }

        .color-choose input[type=&quot;
        radio&quot;

        ]:checked+label span {
            background-image: url(images/check-icn.svg);
            background-repeat: no-repeat;
            background-position: center;
        }

        /* Cable Configuration */
        .cable-choose {
            margin-bottom: 20px;
        }

        .cable-choose button {
            border: 2px solid #E1E8EE;
            border-radius: 6px;
            padding: 13px 20px;
            font-size: 14px;
            color: #5E6977;
            background-color: #fff;
            cursor: pointer;
            transition: all .5s;
        }

        .cable-choose button:hover,
        .cable-choose button:active,
        .cable-choose button:focus {
            border: 2px solid #86939E;
            outline: none;
        }

        .cable-config {
            border-bottom: 1px solid #E1E8EE;
            margin-bottom: 20px;
            padding-bottom: 20px;
            text-align: center;
        }

        .cable-config a {
            color: #358ED7;
            text-decoration: none;
            font-size: 12px;
            position: relative;
            margin: 10px 0;
            display: inline-block;
        }

        .cable-config a:before {
            content: &quot;
            ?&quot;
            ;
            height: 15px;
            width: 15px;
            border-radius: 50%;
            border: 2px solid rgba(53, 142, 215, 0.5);
            display: inline-block;
            text-align: center;
            line-height: 16px;
            opacity: 0.5;
            margin-right: 5px;
        }

        /* Product Price */
        .product-price {
            text-align: center;
        }

        .product-price span {
            display: inline-block;
            font-size: 26px;
            font-weight: 300;
            color: #43474D;
            margin-right: 20px;
        }

        .cart-btn {
            display: inline-block;
            background-color: #7DC855;
            border-radius: 6px;
            font-size: 16px;
            color: #FFFFFF;
            text-decoration: none;
            padding: 9px 30px;
            transition: all .5s;
        }

        .cart-btn:hover {
            background-color: #64af3d;
        }

        /* Responsive */
        @media (max-width: 940px) {
            .cont {
                flex-direction: column;
                margin-top: 60px;
            }

            .left-column,
            .right-column {
                width: 100%;
            }

            .left-column img {
                width: 300px;
                right: 0;
                top: -65px;
                left: initial;
            }
        }

        @media (max-width: 535px) {
            .left-column img {
                width: 220px;
                top: -85px;
            }
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        }

        input[type=number] {
            width: 80px;
            display: inline-block;
        }

        .span {
            padding: 20px;
            font-size: 15px;
            font-weight: 700;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }

        form button[type=submit] {
            margin-top: 0px;
        }
    </style>
    <div class="cont">
        <!-- Left Column / Headphones Image -->
        <div class="left-column">

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="{{ asset('assets/images/Products-img/'.$products->shortName.'_1.png') }}" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('assets/images/Products-img/'.$products->shortName.'_2.png') }}" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('assets/images/Products-img/'.$products->shortName.'_3.png') }}" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <h1>{{ $products->shortName }}</h1>
                <p>{{ $products->longDesc }}</p>
            </div>

            <form action="{{ route('product.addToCart') }}" method="post">
                {{ csrf_field() }}
                <!-- Product Configuration -->
                <div class="product-configuration">

                    <!-- Product Color -->

                    <!-- Cable Configuration -->
                    <div class="cable-config">
                        <input type="hidden" name="id" value="{{ $products->id }}">
                        <input type="hidden" name="name" value="{{ $products->shortName }}">
                        <input type="hidden" name="price" value="{{ $products->price }}">
                        <span class="span">Qty:</span><input type="number" class="form-control" id="qty" name="qty" value="1" maxlength="4" size="4">
                        <span class="span">{{ $products->presetPrice() }}</span>
                    </div>

                </div>

                <!-- Product Pricing -->
                <div class="product-price">
                    <button type="submit" class="cart-btn">Add to cart</button>
                </div>
            </form>
        </div>
    </div>
</main>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
@endsection