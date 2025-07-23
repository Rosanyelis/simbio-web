@extends('layout.app')
@section('content')
<!-- Page Banner Start -->
        <section class="pageBanner3">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-6">
                        <div class="pageBannerContent">
                            <div class="ship">Contacto</div>
                            <h2>Hablemos de lo que <br> necesita tu campo</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Contact Form Section Start -->
        <section class="contactFormSection ">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="secTitle text-left">EMPECEMOS A TRANSFORMAR TU CULTIVO</h2>
                        <p style="color:#000;">Cuéntanos sobre tu campo, tus cultivos y los 
                            desafíos que enfrentas. Nuestro equipo te 
                            ayudará a diseñar una solución a la medida para 
                            mejorar, proteger y potenciar tus resultados 
                            desde el suelo hasta la cosecha.</p>
                    </div>
                    <div class="col-lg-5"></div>
                </div>
                <div class="row gap-4">
                    <div class="col-lg-6">
                        <div class="contactForm">
                            <form method="POST" action="{{ route('contact.send') }}" id="contact_form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="name" placeholder="Nombre" class="required reqError"/>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder="Correo Electrónico" class="required reqError"/>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Escribe un mensaje" class="required reqError"></textarea>
                                    </div>
                                    <div class="col-md-12 text-left">
                                        <button type="submit" class="lab_btn darkHover"><span>Enviar Mensaje</span></button>
                                        <div class="alert con_message">{!! session('success') !!}</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Información de contacto replicada -->
                        <div style="display: flex; flex-direction: column; gap: 30px;">
                            <!-- Teléfono -->
                            <div style="display: flex; align-items: center;">
                                <div style="background: #b2d235; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 2px;">
                                    <i class="fa fa-phone" style="color: #fff; font-size: 30px;"></i>
                                </div>
                                <div style="margin-left: 20px;">
                                    <div style="font-weight: bold; color: #222; font-size: 18px;">Teléfono</div>
                                    <div style="color: #222; font-size: 16px;">+51 987 654 321</div>
                                </div>
                            </div>
                            <!-- Email -->
                            <div style="display: flex; align-items: center;">
                                <div style="background: #b2d235; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 2px;">
                                    <i class="fa fa-envelope" style="color: #fff; font-size: 30px;"></i>
                                </div>
                                <div style="margin-left: 20px;">
                                    <div style="font-weight: bold; color: #222; font-size: 18px;">Email</div>
                                    <div style="color: #222; font-size: 16px;">info@simbio.com.pe</div>
                                </div>
                            </div>
                            <!-- Dirección -->
                            <div style="display: flex; align-items: center;">
                                <div style="background: #b2d235; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 2px;">
                                    <i class="fa fa-map-marker" style="color: #fff; font-size: 30px;"></i>
                                </div>
                                <div style="margin-left: 20px;">
                                    <div style="font-weight: bold; color: #222; font-size: 18px;">Dirección</div>
                                    <div style="color: #222; font-size: 16px;">Av. Primavera pac. 293 lote 6 sector Arrabales<br>Subtanjalla, Ica, Perú.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Section End -->
@endsection