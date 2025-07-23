@extends('layout.app')
@section('content')
    <div class="info-bar">
        <div class="container">
            <div class="info-bar-content">
                <div class="contact-info-responsive">
                    <div class="contact-info-item">
                        <i class="fa fa-map-marker"></i>
                        <span>Av. Primavera pac. 293 lote 6 sector Arrabales, Subtanjalla, Ica, Perú.</span>
                    </div>
                    <div class="contact-info-item">
                        <i class="fa fa-envelope"></i>
                        <span>info@simbio.com.pe</span>
                    </div>
                    <div class="contact-info-item">
                        <i class="fa fa-phone"></i>
                        <span>+51 987 654 321</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Start -->
    <section class="slider_01">
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li data-index="rs-3046" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="{{ asset('web/images/slider/slider1.png') }}"  alt=""  data-bgposition="left center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption tp-resizeme heebo" 
                            data-x="['left','left','center','center']" 
                            data-hoffset="['0','0','0','0']" 
                            
                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['-168','-168','-168','-138']" 

                            data-fontsize="['18','18','18','18']"
                            data-fontweight="['400','400','400','400']"
                            data-lineheight="['40','40','40','40']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-color="['#FFFFFF','#FFFFFF','#FFFFFF','#FFFFFF']"

                            data-type="text" 
                            data-responsive_offset="on" 

                            data-frames='[{"delay":1200,"speed":400,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="['0','0','0','0']"
                            data-paddingright="['21','21','21','21']"
                            data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['21','21','21','21']"
                            data-marginleft="['0','0','0','0']"

                            style="background-color: #a4cc0c; letter-spacing: 1px;border-radius: 5px;"
                            >Innovación sostenible</div>


                        <div class="tp-caption ws_nowrap heebo"
                            data-x="['left','left','center','center']" 
                            data-hoffset="['0','0','0','0']" 

                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['-4','-4','-4','-4']" 

                            data-fontsize="['62','62','62','42']"
                            data-fontweight="['700','700','700','700']"
                            data-lineheight="['72','72','72','52']"
                            data-width="['630','630','95%','95%']"
                            data-height="none"
                            data-whitespace="normal"
                            data-color="['#FFFFFF','#FFFFFF','#FFFFFF','#FFFFFF']"

                            data-type="text" 
                            data-responsive_offset="off" 

                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                            data-textAlign="['left','left','center','center']"
                            data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']"
                            data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']"
                            data-marginleft="['0','0','0','0']"

                            >Desarrollamos <br>bioinsumos que transforman.
                            </div>
                        <div class="tp-caption tp-resizeme"
                            data-x="['left','left','center','center']" 
                            data-hoffset="['0','0','0','0']" 

                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['177','177','177','147']" 

                            data-width="['100%','100%','100%','100%']"
                            data-height="none"

                            data-type="html" 
                            data-responsive_offset="off" 

                            data-frames='[{"delay":1400,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            
                            data-textAlign="['left','left','center','center']"
                            data-marginleft="['0','0','0','0']"

                            ><a href="{{ route('about') }}" class="lab_btn_1">Aprende más</a></div>

                    </li>
                    <li data-index="rs-3047" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="{{ asset('web/images/slider/slider2.png') }}"  alt=""  data-bgposition="left center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption tp-resizeme heebo" 
                            data-x="['left','left','center','center']" 
                            data-hoffset="['0','0','0','0']" 
                            
                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['-168','-168','-168','-138']" 

                            data-fontsize="['18','18','18','18']"
                            data-fontweight="['400','400','400','400']"
                            data-lineheight="['40','40','40','40']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-color="['#FFFFFF','#FFFFFF','#FFFFFF','#FFFFFF']"

                            data-type="text" 
                            data-responsive_offset="on" 

                            data-frames='[{"delay":1200,"speed":400,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="['0','0','0','0']"
                            data-paddingright="['21','21','21','21']"
                            data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['21','21','21','21']"
                            data-marginleft="['0','0','0','0']"

                            style="background-color: #a4cc0c; letter-spacing: 1px;border-radius: 5px;"
                            >Innovación sostenible</div>
                        <div class="tp-caption ws_nowrap heebo"
                            data-x="['left','left','center','center']" 
                            data-hoffset="['0','0','0','0']" 

                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['-4','-4','-4','-4']" 

                            data-fontsize="['62','62','62','42']"
                            data-fontweight="['700','700','700','700']"
                            data-lineheight="['72','72','72','52']"
                            data-width="['630','630','95%','95%']"
                            data-height="none"
                            data-whitespace="normal"
                            data-color="['#FFFFFF','#FFFFFF','#FFFFFF','#FFFFFF']"

                            data-type="text" 
                            data-responsive_offset="off" 

                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                            data-textAlign="['left','left','center','center']"
                            data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']"
                            data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']"
                            data-marginleft="['0','0','0','0']"

                            >Alta producción misma excelencia</div>
                        <div class="tp-caption tp-resizeme"
                            data-x="['left','left','center','center']" 
                            data-hoffset="['0','0','0','0']" 

                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['177','177','177','147']" 

                            data-width="['100%','100%','100%','100%']"
                            data-height="none"

                            data-type="html" 
                            data-responsive_offset="off" 

                            data-frames='[{"delay":1400,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            
                            data-textAlign="['left','left','center','center']"
                            data-marginleft="['0','0','0','0']"

                            ><a href="{{ route('tecnology') }}" class="lab_btn_1">Aprende más</a></div>

                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!-- Slider End -->
    
    <!-- About Section Start -->    
    <section class="aboutSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="aboutContent">
                        <h5 class="secSubTitle heebo">Sobre nosotros</h5>
                        <h5 class="secTitle">
                            Somos especialistas en tecnología microbiana
                        </h5>
                        <p>
                            Simbio Perú es una empresa peruana dedicada a la innovación
                            en tecnologías microbianas que generan valor en la agricultura.
                            <br>
                            Forma parte de Grupo alimenta y de Grupo La Calera, contando
                            con amplia experiencia en agricultura en el Perú.
                        </p>
                        <div class="hr"></div>
                        <div class="row mb43">
                            <div class="col-lg-12 col-xl-6">
                                <div class="iconBox01">
                                    <i class="laf-F4W0Q01"></i>
                                    <h3>
                                    Investigación y desarrollo
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="iconBox01 ib01Last">
                                    <i class="laf-lHEkBa01"></i>
                                    <h3>
                                    Soluciones sostenibles
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="lab_btn_2 darkHover">Descubre más</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aboutImg text-right">
                        <img src="{{ asset('web/images/1. Home/1. especialistas.jpg') }}" alt=""/>
                        <div class="expCounter">
                            <span class="counters" data-count="8" data-suffix="" data-format="plain">8</span>
                            <span>Años de experiencia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Service Start -->
    <section class="serviceSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-5 noPaddingLeft">
                    <div class="serviceLeft mt-5">
                        <h2>Reducimos la huella <br> 
                        de carbono</h2>
                        <p>Invierte en innovación sostenible
                            con alto impacto y rentabilidad. La
                            tecnología limpia transforma
                            industrias y reduce la huella de
                            carbono. Únete al cambio.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-7">
                    <div class="serviceArea">
                        <h2 class="">Nuestro Impacto</h2>
                        <div class="serviceSlider owl-carousel">
                            <div class="singleService01">
                                <img src="{{ asset('web/images/1. Home/2.1 Regeneracion de suelos.jpg') }}" alt=""/>
                                <div class="ss01Content">
                                    <i class="laf-GA9M8J01"></i>
                                    <h3><a href="javascript:void(0);">Regeneración de suelos</a></h3>
                                    <p>
                                        Fortalecemos el microbioma del suelo
                                        para mejorar su productividad natural.
                                    </p>
                                </div>
                            </div>
                            <div class="singleService01">
                                <img src="{{ asset('web/images/1. Home/2.2 Optimizacion de procesos.jpg') }}" alt=""/>
                                <div class="ss01Content">
                                    <i class="laf-Yk7aBo01"></i>
                                    <h3><a href="javascript:void(0);">Optimización de procesos</a></h3>
                                    <p>
                                        Soluciones eficientes para maximizar
                                        producción y reducir costos
                                    </p>
                                </div>
                            </div>
                            <div class="singleService01">
                                <img src="{{ asset('web/images/1. Home/2.1 Regeneracion de suelos.jpg') }}" alt=""/>
                                <div class="ss01Content">
                                    <i class="laf-GA9M8J01"></i>
                                    <h3><a href="javascript:void(0);">Regeneración de suelos</a></h3>
                                    <p>
                                        Fortalecemos el microbioma del suelo
                                        para mejorar su productividad natural.
                                    </p>
                                </div>
                            </div>
                            <div class="singleService01">
                                <img src="{{ asset('web/images/1. Home/2.2 Optimizacion de procesos.jpg') }}" alt=""/>
                                <div class="ss01Content">
                                    <i class="laf-Yk7aBo01"></i>
                                    <h3><a href="javascript:void(0);">Optimización de procesos</a></h3>
                                    <p>
                                        Soluciones eficientes para maximizar
                                        producción y reducir costos
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Fact Section Start -->
    <section class="factSection">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="fact01 text-center">
                        <i class="laf-GA9M8J01"></i>
                        <h2 class="heebo counters" data-count="2500" data-suffix="+" data-format="separator">2.500+</h2>
                        <h6 class="heebo">Hectáreas en <br>agroexportación</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="fact01 text-center">
                        <i class="laf-lHEkBa01"></i>
                        <h2 class="heebo counters" data-count="21" data-suffix=" %" data-format="plain">21 %</h2>
                        <h6 class="heebo">Biodiversidad <br> microbiana en suelo</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="fact01 text-center">
                        <i class="laf-VoAPSp01"></i>
                        <h2 class="heebo counters" data-count="12" data-suffix="%" data-format="plain"> 12 %</h2>
                        <h6 class="heebo">Rendimiento <br>TNM/Hectárea</h6>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="fact01 text-center">
                        <i class="laf-DqlwU301"></i>
                        <h2 class="heebo counters" data-count="15" data-suffix=" %" data-format="decimal"> 15 %</h2>
                        <h6 class="heebo">Reducción de fertilizantes y <br>mitigación del cadmio</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fact Section End -->

    <!-- Section Start -->
    <section class="whyChooseUs">
        <div class="halfSection"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-5"></div>
                <div class="col-lg-8 col-xl-7">
                    <div class="wcuContent">
                        <h5 class="secSubTitle heebo">Nuestros Productos</h5>
                        <h3 class="secTitle">Soluciones microbianas para cada necesidad</h3>
                        <p>
                            En Simbio, contamos con líneas especializadas que
                            abordan la protección, nutrición, bioestimulación y
                            recuperación del suelo de forma integral. Nuestros
                            productos están diseñados para optimizar cada
                            etapa del desarrollo agrícola con base científica y
                            resultados medibles.
                        </p>
                        <a href="{{ route('products') }}" class="lab_btn_2 darkHover">Nuestros Productos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section End -->

    <section class="teamMemberSection">
        <div class="container">
            <h5 class="secSubTitle heebo text-center">Nuestro Equipo</h5>
            <h3 class="secTitle text-center">Conoce a nuestro equipo</h3>
            <br>
            <div class="row mt-5">
                <div class="col-md-4 col-lg-3">
                    <div class="singleTeam">
                        <img src="{{ asset('web/images/team/1.png') }}" alt="Harny Mirinda"/>
                        <div class="stContent">
                            <h3><a href="javascript:void(0);">Pascal Ascencio</a></h3>
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="singleTeam">
                        <img src="{{ asset('web/images/team/2.png') }}" alt="Harny Mirinda"/>
                        <div class="stContent">
                            <h3><a href="javascript:void(0);">Jessica Pérez</a></h3>
                            <p>Administración y Finanzas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="singleTeam">
                        <img src="{{ asset('web/images/team/3.png') }}" alt="Harny Mirinda"/>
                        <div class="stContent">
                            <h3><a href="javascript:void(0);">Pilar Echáiz</a></h3>
                            <p>I+D+I</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="singleTeam">
                        <img src="{{ asset('web/images/team/4.png') }}" alt="Harny Mirinda"/>
                        <div class="stContent">
                            <h3><a href="javascript:void(0);">Xiomara Pacheco</a></h3>
                            <p>SIG</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Team End -->

     <!-- CTA Section Start -->
     <section class="ctaSection">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 col-lg-8">
                    <div class="ctaContent text-center">
                        <h5 class="secTitle heebo text-center">Contacta a uno de nuestros asesores</h5>
                        <p class="text-center">Cuéntanos más sobre tu campo y qué desafíos enfrentas
                            con tu cultivo. Nuestro equipo técnico te orientará con la
                            mejor solución según tus necesidades</p>
                        <a href="{{ route('contact') }}" class="lab_btn_2 darkHover text-center">Contactanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section End -->
@endsection