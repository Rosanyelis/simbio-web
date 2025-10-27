<!-- Modal Equipo de Trabajo -->
<div class="modal fade" id="modalTeam" tabindex="-1" role="dialog" aria-labelledby="modalTeamLabel"
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
                        <img id="team-modal-img" src="{{ asset('web/images/team/1.png') }}" alt="Miembro del Equipo"
                            style="max-width:100%;max-height:260px;border-radius:50%;">
                    </div>
                    <div class="col-md-8">
                        <h2 id="team-modal-name" style="font-weight:bold;color:#17352b;">Nombre del Miembro</h2>
                        <h5 id="team-modal-position" style="color:#b2d235;margin-bottom:20px;">Cargo</h5>
                        
                        <div id="team-modal-function-section" style="margin-bottom:15px;">
                            <h6 style="font-weight:bold;color:#17352b;">Función:</h6>
                            <p id="team-modal-function" style="color:#666;"></p>
                        </div>

                        <div id="team-modal-review-section" style="margin-bottom:15px;">
                            <h6 style="font-weight:bold;color:#17352b;">Reseña:</h6>
                            <p id="team-modal-review" style="color:#666;"></p>
                        </div>

                        <div id="team-modal-projects-section">
                            <h6 style="font-weight:bold;color:#17352b;">Proyectos:</h6>
                            <p id="team-modal-projects" style="color:#666;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height:16px;background:#b2d235;"></div>
        </div>
    </div>
</div>

