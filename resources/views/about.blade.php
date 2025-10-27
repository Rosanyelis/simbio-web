@extends('layout.app')
@section('content')
<!-- Page Banner Start -->
<section class="pageBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="pageBannerContent">
                    
                    <h2>SIMBIO: <br> Especialistas en <br> tecnología microbiana</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->


<!-- About Page Start -->
<section class="aboutusSection2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="aboutContent2">
                    <h5 class="secSubTitle">Nuestra historia</h5>
                    <h2 class="secTitle">
                        Sobre SIMBIO
                    </h2>
                    {!! $empresas->history !!}

                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="imgDiv2 text-right">
                    <img src="{{ asset('web/images/2.Nosotros/2.SobreSimbio.png') }}"
                        alt="Labflox">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Page End -->

<section class="factSection4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="factContainer">
                    <div class="timeline-container ">
                        <div class="timeline-item">
                            <div class="timeline-year">2016</div>
                            <div class="timeline-dot"></div>
                            <div class="timeline-desc">Desarrollo de la tecnología SIMBIO BEPS bajo la marca de ECOBAF
                                S.A.C.</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">2020</div>
                            <div class="timeline-dot"></div>
                            <div class="timeline-desc">Fundación de SIMBIO Perú.</div>
                            <div class="timeline-box">
                                <span>160</span>
                                <div class="timeline-box-text">hectáreas regeneradas</div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">2022</div>
                            <div class="timeline-dot"></div>
                            <div class="timeline-desc">Tecnologías para mitigar el cadmio en el palto.</div>
                            <div class="timeline-box">
                                <span>1000</span>
                                <div class="timeline-box-text">hectáreas regeneradas</div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">2024</div>
                            <div class="timeline-dot"></div>
                            <div class="timeline-desc">Tecnologías para resistencia al cambio climático.</div>
                            <div class="timeline-box">
                                <span>4500</span>
                                <div class="timeline-box-text">hectáreas regeneradas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Skill Section Start -->
<section class="aboutSkillSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tw-stretch-element-inside-column imgDiv3 text-left">
                    <img src="{{ asset('web/images/about/11.png') }}" alt="Labflox" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="aboutSkillContent">
                    <h5 class="secSubTitle"><span>Nuestra tecnología</span></h5>
                    <h2 class="secTitle">
                        Microorganismos para la agricultura
                    </h2>
                    <p>
                        En Simbio nos especializamos en la comprensión
                        del microbioma de los suelos, contamos con un
                        banco de cepas nativas de cultivos de
                        agroexportación y customizamos bioinsecticidas,
                        bioestimulantes y biofertilizantes según las
                        necesidades específicas. Además, nos
                        enfocamos en nichos de mercado de alto valor
                        para maximizar el impacto de cada solución
                    </p>
                    <a href="{{ route('tecnology') }}" class="lab_btn_2 darkHover">Más de nuestra
                        tecnología</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="teamMemberSection">
    <div class="container">
        <h5 class="secSubTitle heebo text-center">Nuestro Equipo</h5>
        <h3 class="secTitle text-center">Conoce a nuestro equipo</h3>
        <br>
        <div class="row mt-5 justify-content-center">
            @foreach ($equipo as $item)
            <div class="col-md-4 col-lg-4">
                <div class="singleTeam" style="cursor:pointer;" onclick="showTeamModal({{ $item->id }})">
                    @if ($item->url_image)
                        <img src="{{ asset('storage/'.$item->url_image) }}" alt="{{ $item->name }}" />
                    @else
                        <img src="{{ asset('web/images/team/1.png') }}" alt="{{ $item->name }}" />
                    @endif
                    <div class="stContent">
                        <h3><a href="javascript:void(0);">{{ $item->name }}</a></h3>
                        <p>{{ $item->position }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Team End -->

@include('modal-team')
@endsection

@section('scripts')
<script>
function showTeamModal(teamId) {
    if (!teamId) {
        alert('No se encontró el ID del miembro del equipo.');
        return;
    }
    
    $.ajax({
        url: '/equipo/modal/' + teamId,
        method: 'GET',
        dataType: 'json',
        success: function(data) { 
            $('#team-modal-name').text(data.name || '');
            $('#team-modal-position').text(data.position || '');
            
            // Imagen
            if (data.url_image) {
                $('#team-modal-img').attr('src', data.url_image);
            } else {
                $('#team-modal-img').attr('src', '{{ asset('web/images/team/1.png') }}');
            }
            
            // Función
            if (data.function) {
                $('#team-modal-function').text(data.function);
                $('#team-modal-function-section').show();
            } else {
                $('#team-modal-function-section').hide();
            }
            
            // Reseña
            if (data.review) {
                $('#team-modal-review').text(data.review);
                $('#team-modal-review-section').show();
            } else {
                $('#team-modal-review-section').hide();
            }
            
            // Proyectos
            if (data.projects) {
                $('#team-modal-projects').text(data.projects);
                $('#team-modal-projects-section').show();
            } else {
                $('#team-modal-projects-section').hide();
            }
            
            var modal = new bootstrap.Modal(document.getElementById('modalTeam'));
            modal.show();
        },
        error: function() {
            alert('No se pudo cargar el detalle del miembro del equipo.');
        }
    });
}
</script>
@endsection
