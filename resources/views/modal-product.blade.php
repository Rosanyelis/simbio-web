<!-- Modal Producto -->
<div class="modal fade" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="modalProductoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius:0;">
            <div class="modal-body p-4" style="position:relative;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="position:absolute;top:18px;right:18px;font-size:2rem;z-index:10;">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-3 mb-md-0">
                        <img id="modal-img" src="{{ asset('web/images/productos/simbiob.png') }}" alt="Producto"
                            style="max-width:100%;max-height:260px;">
                    </div>
                    <div class="col-md-8">
                        <h2 id="modal-title" style="font-weight:bold;">KillerME</h2>
                        <p id="modal-desc"><b>Bioplaguicida</b> que controla de inmediato <b>plagas</b> como ácaros,
                            trips, moscas y nematodos, además de repelerlas. Su fórmula con metabolitos especializados
                            lo hace altamente eficaz en cultivos y suelos.</p>
                        <div class="row">
                            <div class="col-md-6 mb-2 mb-md-0">
                                <img id="modal-img2" src="{{ asset('web/images/productos/ejemplo-plaga.jpg') }}" alt="Detalle"
                                    style="width:100%;max-width:220px;">
                            </div>
                        </div>
                        <a id="modal-link" href="ver-producto.php" class="btn btn-success mt-3"
                            style="background:#17352b;border:none;">Ver más</a>
                    </div>
                </div>
            </div>
            <div style="height:16px;background:#b2d235;"></div>
        </div>
    </div>
</div>
