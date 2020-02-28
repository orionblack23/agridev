@extends('layouts.master')

@section('title')
Panier
@endsection

@section('styles')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url({{ asset('assets/images/intro_img/panier.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="__title" style="font-size: 45px;"><span></span>Panier </h1>

                <p style="font-size: 18px;">
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
        .panier {
            background: #eecda3;
            background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
            background: linear-gradient(to right, #eecda3, #ef629f);
            min-height: 100vh;
        }

        input[type=number] {
            width: 60px;
        }

        tr th div {
            font-weight: 700;
            font-size: 20px;
        }

        form button[type=submit] {
            margin-top: 0;
            background: none;
            border: none;
        }
    </style>
    <section class="panier">
        <div class="px-4 px-lg-0">
            <!-- For demo purpose -->
            <div class="container text-white py-5 text-center">
                <h1 class="display-4" style="font-weight:900">Shopping cart</h1>
            </div>
            <!-- End -->

            <div class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                            @if(session()->has('success_message'))
                            <div class="alert alert-success" style="font-size: 20px; font-weight: 500;">
                                {{ session()->get('success_message') }}
                            </div>
                            @endif

                            @if(count($errors) > 0)
                            <div class="alert alert-danger" style="font-size: 20px; font-weight: 500;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if(Cart::count() >0)
                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Product</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Price</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Quantity</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Remove</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( Cart::content() as $item)
                                        <tr>
                                            <td scope="row" class="border-0">
                                                <div class="p-2">
                                                    <img src="{{ asset('assets/images/Products-img/'.$item->model->shortName.'_1.png') }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h3 class="mb-0"> <a href="{{ route('product.productDetails', $item->model->shortName) }}" class="text-dark d-inline-block align-middle">{{ $item->model->shortName }}</a></h3>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 align-middle"><strong style="font-size: 20px; font-weight: 500;">{{ $item->model->addPresetPrice($item->qty) }}</strong></td>
                                            <td class="border-0 align-middle"><strong><input type="number" class="form-control qty" style="font-size: 15px; font-weight: 700;" id="qty" name="qty" value="{{ $item->qty }}" data-id="{{ $item->rowId }}"></strong></td>
                                            <td class="border-0 align-middle">
                                                <form action="{{ route('product.remove', $item->rowId) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" style="font-size: 20px; font-weight: 500;"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                            <!--<a href="#" class="text-dark" style="font-size: 20px; font-weight: 500;"><i class="fa fa-trash"></i></a>-->

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <h3>No Item in the cart!</h3>
                            @endif
                            <!-- End -->
                        </div>
                    </div>

                    <div class="row py-5 p-4 bg-white rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold" style="font-size: 20px; font-weight: 700;">Coupon code</div>
                            <div class="p-4">
                                <p class="font-italic mb-4" style="font-size: 18px; font-weight: 300;">If you have a coupon code, please enter it in the box below</p>
                                <div class="input-group mb-4 border rounded-pill p-2">
                                    <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0" style="font-size: 16px; font-weight: 300;">
                                    <div class="input-group-append border-0">
                                        <button id="button-addon3" type="submit" class="btn btn-dark px-4 rounded-pill" style="font-size: 15px; font-weight: 500;"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold" style="font-size: 20px; font-weight: 700;">Instructions for seller</div>
                            <div class="p-4">
                                <p class="font-italic mb-4" style="font-size: 18px; font-weight: 300;">If you have some information for the seller you can leave them in the box below</p>
                                <textarea name="" cols="30" rows="2" class="form-control" style="font-size: 18px; font-weight: 300;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold" style="font-size: 20px; font-weight: 700;">Order summary </div>
                            @if(Cart::count() >0)
                            <div class="p-4">
                                <p class="font-italic mb-4" style="font-size: 18px; font-weight: 300;">Shipping and additional costs are calculated based on values you have entered.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted" style="font-size: 15px; font-weight: 700;">Total </strong><strong style="font-size: 20px; font-weight: 500;">{{ Cart::subtotal() }} CFA</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted" style="font-size: 15px; font-weight: 700;">TVA</strong><strong style="font-size: 20px; font-weight: 500;">{{ Cart::tax() }} CFA</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted" style="font-size: 15px; font-weight: 700;">Total + TVA</strong>
                                        <h5 class="font-weight-bold" style="font-size: 20px; font-weight: 500;">{{ Cart::total() }} CFA</h5>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-dark rounded-pill py-2 btn-block" style="font-size: 15px; font-weight: 500;"> Procceed to checkout</button>
                                <!--<a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>-->
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function() {
        const className = document.querySelectorAll('.qty');

        Array.from(className).forEach(function(element) {
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id')
                axios.patch(`http://localhost/agridev/public/panier/${id}`, {
                        qty: this.value
                    })
                    .then(function(response) {
                        //console.log(response);
                        window.location.href = '{{ route('product.shoppingCart') }}';
                    })
                    .catch(function(error) {
                        console.log(error.response);
                    });
            })
        })
    })();
</script>
@endsection