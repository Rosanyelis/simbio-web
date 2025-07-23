<header class="header01 isSticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navArea">
                            <div class="logo ">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('web/images/logosimbio-01.png') }}" class="pr-2"  alt="Simbio"/>
                                </a>
                            </div>
                            <nav class="mainMenu">
                                <ul>
                                    <li @if (request()->routeIs('home')) class="active" @endif><a href="{{ route('home') }}">Inicio</a></li>
                                    <li @if (request()->routeIs('about')) class="active" @endif><a href="{{ route('about') }}">Nosotros</a></li>
                                    <li @if (request()->routeIs('products')) class="active" @endif><a href="{{ route('products') }}">Productos</a></li>
                                    <li @if (request()->routeIs('tecnology')) class="active" @endif><a href="{{ route('tecnology') }}">Tecnología</a></li>
                                </ul>
                            </nav>
                            <div class="accessNav">
                                <a href="{{ route('contact') }}" class="lab_btn lightHover requestBTN">CONTACTO</a>
                                <a href="javascript:void(0);" class="menuBtn"><span><i class="fa fa-bars"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->