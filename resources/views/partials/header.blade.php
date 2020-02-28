<header id="top-bar" class="top-bar top-bar--style-1">
    <div class="top-bar__bg" style="background-color: #24292c;background-image: url(../assets/images/top_bar_bg-1.jpg);background-repeat: no-repeat;background-position: left bottom;">
    </div>

    <div class="container-fluid">
        <div class="row align-items-center justify-content-between no-gutters">

            <a class="top-bar__logo site-logo" href="index.php">
                <img class="img-fluid" src="{{ asset('assets/images/site_logo.png') }}" alt="agri_dev" />
            </a>

            <a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler top-bar__navigation-toggler--light" href="javascript:void(0);"><span></span></a>

            <div id="top-bar__inner" class="top-bar__inner">
                <div>
                    <nav id="top-bar__navigation" class="top-bar__navigation navigation" role="navigation">
                        <ul>
                            @if(Auth::check())
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Mon compte</a>

                                <ul class="submenu">
                                    <li><a href="services.html">Profile</a></li>
                                    <li><a href="{{ route('user.logout') }}">Se Deconnecter</a></li>
                                </ul>
                            </li>
                            @endif

                            <li class="{{ Route::is('product.index') ? 'active' : '' }}">
                                <a href="{{ route('product.index') }}">Accueil</a>
                            </li>

                            <li class="{{ Route::is('product.about') ? 'active' : '' }}">
                                <a href="{{ route('product.about') }}">À Propos</a>
                            </li>

                            <li class="{{ Route::is('product.shopIndex') ? 'active' : '' }}">
                                <a href="{{ route('product.shopIndex') }}">Boutique</a>
                            </li>

                            <li class="{{ Route::is('product.shoppingCart') ? 'active' : '' }}">
                                <a href="{{ route('product.shoppingCart') }}">Panier</a>
                            </li>

                            <li class="{{ Route::is('product.contact') ? 'active' : '' }}">
                                <a href="{{ route('product.contact') }}">Contacts</a>
                            </li>

                            @if(!Auth::check())
                            <li class="{{ Route::is('user.signup') ? 'active' : '' }}">
                                <a href="{{ route('user.signup') }}">S'inscrire</a>
                            </li>

                            <li class="{{ Route::is('user.signin') ? 'active' : '' }}">
                                <a href="{{ route('user.signin') }}">Se connecter</a>
                            </li>
                            @endif

                            <li class="li-btn">
                                <a class="custom-btn custom-btn--small custom-btn--style-4" href="#prendreContact">Contactez nous</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</header>