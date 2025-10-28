@extends('layout.app')
@section('content')

<!-- Page Banner Start -->
        <section class="pageBanner4">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-6">
                        <div class="pageBannerContent">
                            <h2>Soluciones biológicas <br> para todo cultivo</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- section productos Start -->
        <section class="productosSection ">
            <div class="container">
                <div class="row">
                    <!-- Sidebar de categorías y búsqueda -->
                    <div class="col-lg-3 mb-4">
                        <div class="sidebar-productos">
                            <div class="buscador-box">Buscar producto</div>
                            <div class="buscador-form">
                                <form action="{{ route('products.search') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Buscar productos...">
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
                            <h5 class="text-left">Inicio / Productos</h5>
                            <!-- <div > -->
                                <form id="formFiltroLinea" method="GET" action="{{ route('products.line') }}" class="filtro-linea-box">
                                    <select class="filtro-linea-select" name="line_id" onchange="document.getElementById('formFiltroLinea').submit();">
                                        <option value="">Todos los productos</option>
                                        @foreach($lines as $line)
                                        <option value="{{ $line->id }}" {{ request('line_id') == $line->id ? 'selected' : '' }}>{{ $line->name }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            <!-- </div> -->
                        </div>

                        

                        <div class="row">
                            <!-- Producto 1 -->
                            @foreach($products as $product)
                            <div class="col-md-4 mb-4">
                                <div class="card producto-card text-center" onclick="showQuickView({{ $product->id }})">
                                    <div class="category-producto" style="">{{ $product->category->name }}</div>
                                    <img src="{{ asset('storage/'.$product->url_image) }}" class="card-img-top mx-auto" alt="{{ $product->name }}" style="max-height:160px;object-fit:contain;">
                                    <div class="show-producto" onclick="showQuickView({{ $product->id }})"><a href="javascript:void(0);" ><i class="fa fa-eye"></i> VISTA RÁPIDA</a></div>
                                    <div class="card-body" style="padding-bottom:0;">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <!-- paginador -->
                        {{ $products->links('vendor.pagination.custom') }}
                       
                    </div>
                </div>
            </div>
        </section>
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
                            <a href="javascript:void(0);" class="lab_btn_2 darkHover text-center">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section End -->

        @include('modal-product')
@endsection

@section('scripts')
<script>
function showQuickView(productId) {
    console.log('Product ID:', productId); // Log the product ID for debugging
    
  if (!productId) {
    alert('No se encontró el ID del producto.');
    return;
  }
  $.ajax({
    url: '/productos/modal/' + productId,
    method: 'GET',
    dataType: 'json',
    success: function(data) { 
      $('#modal-title').text(data.name || '');
      $('#modal-img').attr('src', data.url_image ? '' + data.url_image : '');
      $('#modal-desc').html('<b>' + (data.name || '') + '</b> ' + (data.description || ''));
      if (data.url_image2) {
        $('#modal-img2').attr('src', '' + data.url_image2).show();
      } else {
        $('#modal-img2').hide();
      }
      $('#modal-link').attr('href', '/productos/' + productId);
      var modal = new bootstrap.Modal(document.getElementById('modalProducto'));
      modal.show();
    },
    error: function() {
      alert('No se pudo cargar el detalle del producto.');
    }
  });
}
</script>
@endsection
|