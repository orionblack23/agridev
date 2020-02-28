@extends('layouts.master')

@section('title')
SignUp
@endsection



@section('content')
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url({{ asset('assets/images/intro_img/signup.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="__title"><span></span>S'inscrire</h1>

                <p>
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end hero -->

<!-- start main -->
<main class="main" role="main">
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
        .main {
            background: #eecda3;
            background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
            background: linear-gradient(to right, #eecda3, #ef629f);
            min-height: 50vh;
            margin: 0px;
            font-family: 'Ubuntu', sans-serif;
            background-size: 100% 110%;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        a {
            margin: 0;
            padding: 0;
        }

        .login {
            margin: 0 auto;
            max-width: 500px;
        }

        .login-header {
            margin-top: 15px;
            color: #fff;
            text-align: center;
            font-size: 300%;
        }

        /* .login-header h1 {
   text-shadow: 0px 5px 15px #000; */
        }

        .login-form {
            border: .5px solid #fff;
            background: #4facff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #000;
        }

        .login-form h3 {
            text-align: left;
            margin-left: 40px;
            color: #fff;
        }

        .login-form {
            box-sizing: border-box;
            padding-top: 15px;
            padding-bottom: 10%;
            margin: 5% auto;
            text-align: center;
        }

        .login input[type="text"],
        .login input[type="password"] {
            max-width: 400px;
            width: 80%;
            line-height: 3em;
            font-family: 'Ubuntu', sans-serif;
            margin: 1em 2em;
            border-radius: 5px;
            border: 2px solid #f2f2f2;
            outline: none;
            padding-left: 10px;
        }

        .login-form input[type="button"] {
            height: 30px;
            width: 100px;
            background: #fff;
            border: 1px solid #f2f2f2;
            border-radius: 20px;
            color: slategrey;
            text-transform: uppercase;
            font-family: 'Ubuntu', sans-serif;
            cursor: pointer;
        }

        form button[type=submit] {
            height: 30px;
            width: 100px;
            background: #fff;
            border: 1px solid #f2f2f2;
            border-radius: 20px;
            color: black;
            text-transform: uppercase;
            font-family: 'Ubuntu', sans-serif;
            cursor: pointer;
            margin-top: 0px;
        }

        .sign-in {
            color: #f2f2f2;
            margin-left: -70%;
            cursor: pointer;
            text-decoration: underline;
            font-weight: 900;
        }

        .no-access {
            color: #E86850;
            margin: 20px 0px 20px -57%;
            text-decoration: underline;
            cursor: pointer;
        }

        .try-again {
            color: #f2f2f2;
            text-decoration: underline;
            cursor: pointer;
        }

        /*Media Querie*/
        @media only screen and (min-width : 150px) and (max-width : 530px) {
            .login-form h3 {
                text-align: center;
                margin: 0;
            }

            .sign-in,
            .no-access {
                margin: 10px 0;
            }

            .login-button {
                margin-bottom: 10px;
            }
        }
    </style>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

    <div class="login">
        <div class="login-header">
            <h1>Signup</h1>
        </div>
        <form action="{{ route('user.signup') }}" method="post">
            {{ csrf_field() }}
            <div class="login-form">
                <input type="text" id="name" name="name" placeholder="Username" /><br>
                <input type="text" id="email" name="email" placeholder="Email" /><br>
                <input type="password" id="password" name="password" placeholder="Password" />
                <button type="submit" class="">SignUp</button><br>
                <a href="{{ route('user.signin') }}" class="sign-in">login!</a>
            </div>
        </form>
    </div>
</main>
@endsection