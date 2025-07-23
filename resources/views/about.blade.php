@extends('layout.app')
@section('content')
<!-- Page Banner Start -->
<section class="pageBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="pageBannerContent">
                    <div class="ship">
                        Nosotros
                    </div>
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
                    <p>
                        Simbio Perú es una empresa peruana dedicada
                        a la innovación en tecnologías microbianas que
                        generan valor en la agricultura.
                        <br>
                        <br>
                        Forma parte de Grupo alimenta y de Grupo La
                        Calera, contando con amplia experiencia en
                        agricultura en el Perú.
                    </p>

                </div>
            </div>
            <div class="col-lg-6">
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
        <div class="row mt-5">
            <div class="col-md-4 col-lg-3">
                <div class="singleTeam">
                    <img src="{{ asset('web/images/team/1.png') }}" alt="Harny Mirinda" />
                    <div class="stContent">
                        <h3><a href="javascript:void(0);">Pascal Ascencio</a></h3>
                        <p>CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="singleTeam">
                    <img src="{{ asset('web/images/team/2.png') }}" alt="Harny Mirinda" />
                    <div class="stContent">
                        <h3><a href="javascript:void(0);">Jessica Pérez</a></h3>
                        <p>Administración y Finanzas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="singleTeam">
                    <img src="{{ asset('web/images/team/3.png') }}" alt="Harny Mirinda" />
                    <div class="stContent">
                        <h3><a href="javascript:void(0);">Pilar Echáiz</a></h3>
                        <p>I+D+I</p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="singleTeam">
                    <img src="{{ asset('web/images/team/4.png') }}" alt="Harny Mirinda" />
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
@endsection
