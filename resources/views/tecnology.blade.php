@extends('layout.app')
@section('styles')
<style>
    /* Centrar los casos de éxito */
    .researchSlider.owl-carousel {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
    }
    
    .researchSlider .owl-stage-outer {
        margin: 0 auto;
    }
    
    .researchSlider .owl-stage {
        display: flex !important;
        justify-content: center !important;
    }
</style>
@endsection
@section('content')
    <!-- Page Banner Start -->
        <section class="pageBanner2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-6">
                        <div class="pageBannerContent">
                            
                            <h2>Hecho a la medida: <br> Cultivos diferentes, <br> soluciones diferentes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Who We Are Section Start -->
        <section class="whoWeAreSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="gallerySLiderWrap">
                            <div class="gallerySLider">
                                <div class="gsItem">
                                    <img src="{{ asset('web/images/home3/1.jpg') }}" alt=""/>
                                </div>
                                <div class="gsItem">
                                    <img src="{{ asset('web/images/home3/2.jpg') }}" alt=""/>
                                </div>
                                <div class="gsItem">
                                    <img src="{{ asset('web/images/home3/3.jpg') }}" alt=""/>
                                </div>
                            </div>
                            <div class="vGalleryThumbWrap">
                                <div class="gallerySliderThumb">
                                    <div class="gsThumbItem">
                                        <img src="{{ asset('web/images/home3/2t.jpg') }}" alt=""/>
                                    </div>
                                    <div class="gsThumbItem">
                                        <img src="{{ asset('web/images/home3/3t.jpg') }}" alt=""/>
                                    </div>
                                    <div class="gsThumbItem">
                                        <img src="{{ asset('web/images/home3/3t.jpg') }}" alt=""/>
                                    </div>
                                    <div class="gsThumbItem">
                                        <img src="{{ asset('web/images/home3/3t.jpg') }}" alt=""/>
                                    </div>
                                    <div class="gsThumbItem">
                                        <img src="{{ asset('web/images/home3/1t.jpg') }}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 noPaddingRight">
                        <div class="wwaContent">
                            <h5 class="secSubTitle">Nuestro sistema</h5>
                            <h2 class="secTitle2">
                                Potenciar los <br> microbiomas en <br> diferentes etapas
                            </h2>
                            <p>
                                El programa SIMBIO está basado en
                                inserciones biológicas al microbioma del
                                suelo para especializarlo de acuerdo con la
                                necesidad de la planta, como microbiomas
                                para la producción de hormonas, la
                                disponibilización de nutrientes como fósforo
                                (P) y potasio (K), la producción de
                                sideróforos y el biocontrol de patógenos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Who We Are Section End -->

        <!-- Test Categories Start -->
        <section class="categoriesSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="secSubTitle2 heebo">Hecho a la medida</h5>
                        <h2 class="secTitle">Nuestro proceso</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testCategories">
                            <div class="row">
                                <div class="col-md-6 col-lg-3 noPadding">
                                    <div class="testCatItem">
                                        <i class="laf-DqlwU301"></i>
                                        <h3 class="heebo">Muestra</h3>
                                        <p>Extraemos muestras
                                            estratégicas del entorno
                                            productivo para comprender
                                            con precisión las condiciones
                                            reales del sistema.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 noPadding">
                                    <div class="testCatItem">
                                        <i class="laf-F4W0Q01"></i>
                                        <h3 class="heebo">Análisis</h3>
                                        <p>En laboratorio, evaluamos
                                            cada variable clave para
                                            identificar causas profundas,
                                            no solo síntomas
                                            <br>
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 noPadding">
                                    <div class="testCatItem">
                                        <i class="laf-GiBYLh01"></i>
                                        <h3 class="heebo">Desarrollo</h3>
                                        <p>
                                            Diseñamos combinaciones
                                            únicas de bioinsumos y
                                            microorganismos con base
                                            científica, adaptadas a cada
                                            necesidad específica</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 noPadding">
                                    <div class="testCatItem">
                                        <i class="laf-Yk7aBo01"></i>
                                        <h3 class="heebo">Aplicación</h3>
                                        <p>Implementamos soluciones
                                            vivas que transforman el
                                            suelo, optimizan procesos y
                                            regeneran la productividad
                                            desde la raíz.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Test Categories End -->

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

         <!-- Research Section Start -->
        <section class="reasearchSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="secSubTitle">Nuestro Impacto</h5>
                        <h2 class="secTitle" style="color: #000;">Casos de Éxito</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="researchSlider owl-carousel">
                            @foreach ($successStories as $successStory)
                            <div class="researchItem">
                                <img src="{{ asset('storage/' . $successStory->url_image) }}" alt="{{ $successStory->name }}">
                                <div class="riContent">
                                    <div class="ricMeta">
                                        @if ($successStory->url_file)
                                        <a href="{{ asset('storage/' . $successStory->url_file) }}"
                                        target="_blank">{{ $successStory->subtitle }}</a>
                                        @else
                                        <a href="javascript:void(0);" style="pointer-events: none;">{{ $successStory->subtitle }}</a>
                                        @endif
                                    </div>
                                    <h3 class="heebo">
                                        @if ($successStory->url_file)
                                        <a href="{{ asset('storage/' . $successStory->url_file) ? asset('storage/' . $successStory->url_file) : 'javascript:void(0);' }}"
                                        target="_blank">{{ $successStory->name }}</a>
                                        @else
                                        <a href="javascript:void(0);" style="pointer-events: none;">{{ $successStory->name }}</a>
                                        @endif
                                    </h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mtm168px">
                    <div class="col-lg-12 noPadding">
                        <div class="phoneCall3 text-center ">
                            <h1 class="text-white">Contacta a nuestros especialistas <br>y cuéntanos tu caso</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Research Section End -->
@endsection

@section('scripts')

<script>
    // Deshabilitar el autoplay del slider de casos de éxito manteniendo el diseño
    $(document).ready(function() {
        // Esperar a que el tema.js inicialice el slider
        setTimeout(function() {
            if ($('.researchSlider').hasClass('owl-loaded')) {
                // Destruir el owl carousel existente
                $('.researchSlider').trigger('destroy.owl.carousel');
                
                // Reinicializar sin autoplay pero con el mismo diseño
                $('.researchSlider').owlCarousel({
                    margin: 28,
                    loop: false,
                    autoplay: false,
                    nav: false,
                    dots: false,
                    mouseDrag: false,
                    touchDrag: false,
                    pullDrag: false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 4
                        },
                        1023: {
                            items: 4
                        },
                        1200: {
                            items: 4
                        },
                        1600: {
                            items: 4
                        }
                    }
                });
            }
        }, 100);
    });
</script>
@endsection