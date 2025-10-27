<footer class="footer01">
        <div class="container">
            
            <div class="row widgetRow">
                <div class="col-md-6 col-lg-4">
                    <aside class="widget">
                        <div class="contactWidtetContent">
                            <div class="footerLogo">
                                <a href="{{ route('home') }}"><img src="{{ asset('web/images/logosimbio-02.png') }}" alt="Simbio"/></a>
                            </div>
                            <div class="cwcInfo">
                                <i class="laf-y4LP01"></i>
                                {{ $empresas->phone }}
                            </div>
                            <div class="cwcInfo">
                                <i class="laf-BqBcxz01"></i>
                                <a href="javascript:void(0);">{{ $empresas->email }}</a>
                            </div>
                            <div class="cwcInfo">
                                <i class="laf-A8AIr201"></i>
                                {{ $empresas->address }}
                            </div>
                        </div>
                    </aside>
                </div>
                <div class=" col-md-6 col-lg-4">
                    <aside class="widget">
                        <ul>
                            <li><a href="{{ route('about') }}" class="bold text-white">Nosotros</a></li>
                            <li><a href="{{ route('tecnology') }}" class="bold text-white">Tecnología</a></li>
                            <li><a href="{{ route('products') }}" class="bold text-white">Productos</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-6 col-lg-4">
                    <aside class="widget "   >
                        <a href="https://wa.me/51987654321" target="_blank" class="btn-whatsapp m-auto">
                            <span class="wa-icon">
                                <img src="{{ asset('web/images/whatsapp.png') }}" alt="WhatsApp">
                            </span>
                            Envíanos un mensaje
                        </a>
                        <h3 class="widgetTitle">Síguenos en nuestras redes sociales</h3>

                        <div class="siteSocial justify-content-center align-items-center">
                            @foreach ($empresas->bussinesSocials as $social)
                                @if ($social->name == 'linkedin')
                                    <a href="{{ $social->url }}" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                @elseif ($social->name == 'facebook')
                                    <a href="{{ $social->url }}" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                                @elseif ($social->name == 'instagram')
                                    <a href="{{ $social->url }}" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                                @else
                                    <a href="{{ $social->url }}" target="_blank"><i class="fa fa-{{ $social->name }} fa-2x"></i></a>
                                @endif
                            @endforeach
                            <!--  -->
                        </div>

                        
                    </aside>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyrightRow">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="siteInfo">Copyright 2025 - SIMBIO PERU SAC</div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="siteInfo">
                                    <a href="{{ route('privacy.policy') }}"><span class="siteInfo text-white">Términos y condiciones</span></a>
                                    <span class="siteInfo text-white">|</span>
                                    <a href="{{ route('privacy.policy') }}"><span class="siteInfo text-white">Política de privacidad</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>