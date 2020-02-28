@extends('layouts.master')

@section('title')
Produits
@endsection



@section('content')
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url({{ asset('assets/images/intro_img/produits.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="__title"><span></span>Produits</h1>

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
        * {
            margin: 0px;
            padding: 0px;
        }



        /* --- Product Card ---- */
        #make-3D-space {
            position: relative;
            perspective: 800px;
            width: 340px;
            height: 500px;
            transform-style: preserve-3d;
            transition: transform 5s;
            /*position: absolute;*/
            margin-top: 40px;
            margin-bottom: 10px;
        }

        #product-front,
        #product-back {
            width: 335px;
            height: 500px;
            background: #fff;
            position: absolute;
            left: -5px;
            top: -5px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }

        #product-back {
            display: none;
            transform: rotateY(180deg);
        }

        #product-card.animate #product-back,
        #product-card.animate #product-front {
            top: 0px;
            left: 0px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }

        #product-card {
            width: 325px;
            height: 490px;
            position: absolute;
            top: 10px;
            left: 10px;
            overflow: hidden;
            transform-style: preserve-3d;
            -webkit-transition: 100ms ease-out;
            -moz-transition: 100ms ease-out;
            -o-transition: 100ms ease-out;
            transition: 100ms ease-out;
        }

        div#product-card.flip-10 {
            -webkit-transform: rotateY(-10deg);
            -moz-transform: rotateY(-10deg);
            -o-transform: rotateY(-10deg);
            transform: rotateY(-10deg);
            transition: 50ms ease-out;
        }

        div#product-card.flip90 {
            -webkit-transform: rotateY(90deg);
            -moz-transform: rotateY(90deg);
            -o-transform: rotateY(90deg);
            transform: rotateY(90deg);
            transition: 100ms ease-in;
        }

        div#product-card.flip190 {
            -webkit-transform: rotateY(190deg);
            -moz-transform: rotateY(190deg);
            -o-transform: rotateY(190deg);
            transform: rotateY(190deg);
            transition: 100ms ease-out;
        }

        div#product-card.flip180 {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
            transition: 150ms ease-out;
        }

        #product-card.animate {
            top: 5px;
            left: 5px;
            width: 335px;
            height: 500px;
            box-shadow: 0px 13px 21px -5px rgba(0, 0, 0, 0.3);
            -webkit-transition: 100ms ease-out;
            -moz-transition: 100ms ease-out;
            -o-transition: 100ms ease-out;
            transition: 100ms ease-out;
        }

        .stats-container {
            background: #fff;
            position: absolute;
            top: 386px;
            left: 0;
            width: 100%;
            height: 300px;
            padding: 27px 35px 35px;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }

        #product-card.animate .stats-container {
            top: 272px;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }

        .stats .product_name {
            padding-top: 10px;
            margin: 0;
            text-align: center;
            font-weight: 900;
            color: #393c45;
        }

        .stats p {
            font-size: 16px;
            color: #b1b1b3;
            padding: 2px 0 20px 0;
        }

        .stats .product_price {
            color: #48cfad;
            text-align: center;
            font-weight: 600;
        }

        .image_overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #48daa1;
            opacity: 0;
        }

        #product-card.animate .image_overlay {
            opacity: 0.7;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }

        .product-options {
            padding: 2px 0 0;
        }

        .product-options strong {
            font-weight: 700;
            color: #393c45;
            font-size: 14px;
        }

        .product-options span {
            color: #969699;
            font-size: 14px;
            display: block;
            margin-bottom: 8px;
        }

        #view_details {
            position: absolute;
            top: 112px;
            left: 50%;
            margin-left: -85px;
            border: 2px solid #fff;
            color: #fff;
            font-size: 19px;
            text-align: center;
            text-transform: uppercase;
            font-weight: 700;
            padding: 10px 0;
            width: 172px;
            opacity: 0;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }

        #view_details:hover {
            background: #fff;
            color: #48cfad;
            cursor: pointer;

        }

        #product-card.animate #view_details {
            opacity: 1;
            width: 152px;
            font-size: 15px;
            margin-left: -75px;
            top: 115px;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }

        div.colors div {
            margin-top: 3px;
            width: 15px;
            height: 15px;
            margin-right: 5px;
            float: left;
        }

        div.colors div span {
            width: 15px;
            height: 15px;
            display: block;
            border-radius: 50%;
        }

        div.colors div span:hover {
            width: 17px;
            height: 17px;
            margin: -1px 0 0 -1px;
        }

        div.c-blue span {
            background: #6e8cd5;
        }

        div.c-red span {
            background: #f56060;
        }

        div.c-green span {
            background: #44c28d;
        }

        div.c-white span {
            background: #fff;
            width: 14px;
            height: 14px;
            border: 1px solid #e8e9eb;
        }

        div.shadow {
            width: 335px;
            height: 520px;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
            display: none;
            background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2));
            background: -o-linear-gradient(right, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2));
            background: -moz-linear-gradient(right, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2));
            background: linear-gradient(to right, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2));
        }

        #product-back div.shadow {
            z-index: 10;
            opacity: 1;
            background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1));
            background: -o-linear-gradient(right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1));
            background: -moz-linear-gradient(right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1));
            background: linear-gradient(to right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1));
        }

        #flip-back {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 30px;
            height: 30px;
            cursor: pointer;
        }

        #cx,
        #cy {
            background: #d2d5dc;
            position: absolute;
            width: 0px;
            top: 15px;
            right: 15px;
            height: 3px;
            -webkit-transition: all 250ms ease-in-out;
            -moz-transition: all 250ms ease-in-out;
            -ms-transition: all 250ms ease-in-out;
            -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
        }

        #flip-back:hover #cx,
        #flip-back:hover #cy {
            background: #979ca7;
            -webkit-transition: all 250ms ease-in-out;
            -moz-transition: all 250ms ease-in-out;
            -ms-transition: all 250ms ease-in-out;
            -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
        }

        #cx.s1,
        #cy.s1 {
            right: 0;
            width: 30px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }

        #cy.s2 {
            -ms-transform: rotate(50deg);
            -webkit-transform: rotate(50deg);
            transform: rotate(50deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }

        #cy.s3 {
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }

        #cx.s1 {
            right: 0;
            width: 30px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }

        #cx.s2 {
            -ms-transform: rotate(140deg);
            -webkit-transform: rotate(140deg);
            transform: rotate(140deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }

        #cx.s3 {
            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
            -webkit-transition: all 100ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }

        #carousel {
            width: 335px;
            height: 500px;
            overflow: hidden;
            position: relative;

        }

        #carousel ul {
            position: absolute;
            top: 0;
            left: 0;
        }

        #carousel li {
            width: 335px;
            height: 500px;
            float: left;
            overflow: hidden;
        }

        .arrows-perspective {
            width: 335px;
            height: 55px;
            position: absolute;
            top: 218px;
            transform-style: preserve-3d;
            transition: transform 5s;
            perspective: 335px;
        }

        .carouselPrev,
        .carouselNext {
            width: 50px;
            height: 55px;
            background: #ccc;
            position: absolute;
            top: 0;
            transition: all 200ms ease-out;
            opacity: 0.9;
            cursor: pointer;
        }

        .carouselNext {
            top: 0;
            right: -26px;
            -webkit-transform: rotateY(-117deg);
            -moz-transform: rotateY(-117deg);
            -o-transform: rotateY(-117deg);
            transform: rotateY(-117deg);
            transition: all 200ms ease-out;

        }

        .carouselNext.visible {
            right: 0;
            opacity: 0.8;
            background: #efefef;
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            transform: rotateY(0deg);
            transition: all 200ms ease-out;
        }

        .carouselPrev {
            left: -26px;
            top: 0;
            -webkit-transform: rotateY(117deg);
            -moz-transform: rotateY(117deg);
            -o-transform: rotateY(117deg);
            transform: rotateY(117deg);
            transition: all 200ms ease-out;

        }

        .carouselPrev.visible {
            left: 0;
            opacity: 0.8;
            background: #eee;
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            transform: rotateY(0deg);
            transition: all 200ms ease-out;
        }

        #carousel .x,
        #carousel .y {
            height: 2px;
            width: 15px;
            background: #48cfad;
            position: absolute;
            top: 31px;
            left: 17px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        #carousel .x {
            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
            top: 21px;
        }

        #carousel .carouselNext .x {
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        #carousel .carouselNext .y {
            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        main p {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .image {

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 250px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            position: relative;
        }

        .pagination>li:last-child>a,
        .pagination>li:last-child>span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .pagination>li>a,
        .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #337ab7;
            border-color: #337ab7;
        }
    </style>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <div class="container marg">
        <div class="row">

            @foreach($products as $product)
            <div class="col-lg-3 col-md-auto col-sm-auto  ">
                <div style="width:280px;height:350px; margin:15px;">
                    <a href="{{ route('product.productDetails', ['shortName' => $product->shortName]) }}">
                        <img class="image" src="{{ asset('assets/images/products/'.$product->shortName.'.png') }}" alt="" />
                    </a>
                    <div class="stats">
                        <a href="{{ route('product.productDetails', ['shortName' => $product->shortName]) }}">
                            <h4 class="product_name">{{ $product->shortName }}</h4>
                            <h5 class="product_price">{{ $product->presetPrice() }}</h5>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</main>
<script>

</script>
@endsection