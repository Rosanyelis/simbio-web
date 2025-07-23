@extends('layout.app')
@section('content')

<!-- Page Banner Start -->
        <section class="pageBanner4">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-6">
                        <div class="pageBannerContent">
                            <div class="ship">Productos</div>
                            <h2>Soluciones biológicas <br> para todo cultivo</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- section productos Start -->
        <!-- section productos Start -->
        <section class="productosSection ">
            <div class="container">
                <div class="row">
                    <!-- Sidebar de categorías y búsqueda -->
                    <div class="col-lg-3 mb-4">
                        <div class="sidebar-productos">
                            <div class="buscador-box">Buscar producto</div>
                            <div class="buscador-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Buscar productos...">
                                        <div class="input-group-append">
                                            <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="categorias-box">
                                <h5 style="font-weight:bold;">Categorías</h5>
                                <ul class="list-group">
                                    @foreach($categories as $category)
                                    <li class="list-group-item">
                                        <a href="{{ route('products.category', $category->id) }}"
                                        style="color: inherit;">{{ $category->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Grid de productos -->
                    <div class="col-lg-9">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="text-left">Inicio / {{ $product->category->name }}</h5>
                            <a href="{{ route('products') }}" class="btn-volver-listado">
                                <span class="arrow-left">&larr;</span> <b>Volver</b>
                            </a>
                        </div>



                        <div class="row align-items-start">
                            <div class="col-md-4 text-center mb-3 mb-md-0">
                                <img src="{{ asset('storage/'.$product->url_image) }}" alt="{{ $product->name }}" style="max-width:100%;max-height:420px;">
                            </div>
                            <div class="col-md-8">
                                <img src="{{ asset('storage/'.$product->url_name_image) }}" alt="{{ $product->name }}" >
                                <p style="font-size:1.1rem;line-height:1.5;max-width:600px;">
                                    {{ $product->description }}
                                </p>
                                <div class="mb-3">
                                    <b>Presentación</b><br>
                                    <div class="presentacion-card">
                                        <div class="presentacion-icons d-flex justify-content-between align-items-end">
                                            <div class="presentacion-item text-center flex-fill">
                                                <img src="{{ asset('web/images/1l.png') }}" class="presentacion-icon" alt="1L">
                                            </div>
                                            <div class="presentacion-item text-center flex-fill">
                                                <img src="{{ asset('web/images/20l.png') }}" class="presentacion-icon" alt="20L">
                                            </div>
                                        </div>
                                        <div class="presentacion-labels d-flex justify-content-between align-items-center">
                                            <div class="presentacion-label">1L</div>
                                            <div class="presentacion-label">20L</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <b>Descargables</b><br>
                                    @if ( $product->url_technical_sheet != null)
                                    <a href="{{ asset('storage/'.$product->url_technical_sheet) }}" target="_blank" class="descarga-btn descarga-outline"><i class="fa fa-download"></i> FICHA TÉCNICA</a>
                                    @endif
                                    @if ( $product->url_safety_data_sheet != null)
                                    <a href="{{ asset('storage/'.$product->url_safety_data_sheet) }}" target="_blank" class="descarga-btn descarga-outline"><i class="fa fa-download"></i> HOJA DE SEGURIDAD</a>
                                    @endif
                                    @if ( $product->url_case_studies != null)
                                    <a href="{{ asset('storage/'.$product->url_case_studies) }}" target="_blank" class="descarga-btn descarga-solid"><i class="fa fa-star"></i> CASO DE ÉXITO</a>
                                    @endif
                                </div>
                                <a href="{{ route('contact') }}" class="btn btn-success mb-3 py-3 px-3 text-white "
                                    style="background:#b2d235;color:#222;font-size:0.875rem;font-weight:bold;border:none;">CONTÁCTANOS PARA MÁS
                                    INFORMACIÓN</a>
                            </div>

                            <div class="table-responsive mb-4 mt-5">
                                <table class="table table-bordered table-sm" style="background:#fafafa;">
                                    <tbody>
                                        @foreach($product->additionalInformationProducts as $info)
                                        <tr>
                                            <th>{{ $info->name }}</th>
                                            <td>{{ $info->description }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Productos relacionados</h5>
                                </div>
                                @foreach($relatedProducts as $related)
                                <div class="col-6 col-md-4 col-lg-3 mb-2 text-center">
                                    <a href="{{ route('products.detail', $related->product->id) }}">
                                        <img src="{{ asset('storage/' . $related->product->url_image) }}" alt="{{ $related->name }}" style="width:100%;max-width:290px;">
                                        <p>{{ $related->product->line->name }}</p>
                                        <h6 style="font-size:14px;font-weight:bold;text-align:center">{{ $related->product->name }}</h6>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- fin section productos -->

        <!-- fin section productos -->
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
                            <a href="javascript:void(0);" class="lab_btn_2 darkHover text-center">Contactanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section End -->

@endsection
