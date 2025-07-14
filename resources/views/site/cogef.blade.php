@extends('layouts.app')

@section('title', 'PATRONAT | Services')

@section('content')

  <section class="page-title" style="background-image:url({{ asset('images/service/services_breadcumb.jpg') }});height: 70vh;background-size: cover; background-position: center; background-repeat: no-repeat;">
    	<div class="container">
			<div class="content">
				<h1>COGEF</h1>
				<ul class="page-breadcrumb">
					<li><a href="#">Accueil</a></li>
					<li>COGEF</li>
				</ul>
			</div>
        </div>
    </section>

<section class="about-section style-two">
		<div class="container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="section-title">
							<div class="title">A propos de nous</div>
							<h3>Notre<span> Histoire</span></h3>
						</div>
						
						<div class="text">
							<p>Créé en 1974 dans un élan de solidarité nationale par les opérateurs économiques du secteur privé pour soutenir l'effort de guerre du gouvernement, le Conseil National des Entreprises Voltaïques (CNEV) a été officiellement constitué en association en 1976.
                                
								Quelques années plus tard, le CNEV devient le CNPB, témoignant de l'évolution et de la maturité du patronat burkinabè.</p>
							<!-- <p>Aenean tincidunt id mauris id auctor. Donec at ligula lacus. Nulla dignissim mi quis neque interdum, quis porta sem finibus.</p> -->
						</div>
						<div class="row clearfix">
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>L'unité d'action.</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>L'attachement au dialogue social.</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>L'esprit de concertation.</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>La crédibilité vis-à-vis de l'État.</li>
								</ul>
							</div>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>La reconnaissance des partenaires au développement.</li>
								</ul>
							</div>
						</div>
						<!-- <div class="question">Call to ask <a href="#">any question</a> <strong>540-325-1523</strong> <span class="or">or</span> <strong>540-328-1265</strong></div> -->
						<div class="signature">
							<div class="signature-img"><img src="images/icons/signature.png" alt=""/></div>
							<h5>Idrissa NASSA</h5>
							<div class="designation">Le Président</div>
						</div>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!--Video Box-->
                        <div class="video-box">
                            <figure class="video-image">
                                <img src="{{ asset('images/new/idrissa.jpeg') }}" alt="">
                            </figure>
                            <a href="https://www.youtube.com/watch?v=cPBV1UOkVAI&pp=ygURaWRpc3NhIG5hc3NhIGNucGLSBwkJwQkBhyohjO8%3D" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a>
                        </div>
						
						<!-- Fact Counter / Style Two -->
						<div class="fact-counter style-two">
							<div class="container">
								<div class="row clearfix">
								
									<!--Column-->
									<!-- <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
										<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="1235">0</span>
												<div class="counter-title">Satisfied Clients</div>
												<div class="text">Dolore magna aliq</div>
											</div>
										</div>
									</div> -->
							
									<!--Column-->
									<!-- <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
										<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3500" data-stop="3">0</span>+
												<div class="counter-title">Projets</div>
												<div class="text">connstur adicing</div>
											</div>
										</div>
									</div> -->
							
									<!--Column-->
									<!-- <div class="column counter-column col-lg-4 col-md-12 col-sm-12">
										<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="35">0</span>
												<div class="counter-title">Winning Awards</div>
												<div class="text">Lorem ipsum dolor</div>
											</div>
										</div>
									</div> -->
									
								</div>
							</div>
						</div>
						
					</div>
				</div>

				
			</div>
		</div>
	</section>
<section class="about-section style-two">
		<div class="container">
			<div class="row clearfix">
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!--Video Box-->
                        <div class="video-box">
                            <figure class="video-image">
                                <img src="{{ asset('images/logoheader.png') }}" alt="">
                            </figure>
                            <!-- <a href="https://www.youtube.com/watch?v=cPBV1UOkVAI&pp=ygURaWRpc3NhIG5hc3NhIGNucGLSBwkJwQkBhyohjO8%3D" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a> -->
                        </div>
						
						<!-- Fact Counter / Style Two -->
						<div class="fact-counter style-two">
							<div class="container">
								<div class="row clearfix">
								
									<!--Column-->
									<!-- <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
										<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="1235">0</span>
												<div class="counter-title">Satisfied Clients</div>
												<div class="text">Dolore magna aliq</div>
											</div>
										</div>
									</div> -->
							
									<!--Column-->
									<!-- <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
										<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3500" data-stop="3">0</span>+
												<div class="counter-title">Projets</div>
												<div class="text">connstur adicing</div>
											</div>
										</div>
									</div> -->
							
									<!--Column-->
									<!-- <div class="column counter-column col-lg-4 col-md-12 col-sm-12">
										<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="35">0</span>
												<div class="counter-title">Winning Awards</div>
												<div class="text">Lorem ipsum dolor</div>
											</div>
										</div>
									</div> -->
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="section-title">
							<div class="title">A propos de nous</div>
							<h3>Notre<span> Mission</span></h3>
						</div>
						
						<div class="text">
							<p>Le CNPB se définit comme le syndicat des employeurs du Burkina Faso. Nous sommes le cadre d'actions, de représentation, de coordination, de liaison et d'information en faveur du secteur privé burkinabè.
                                    Le patronat burkinabè jouit d'une grande crédibilité vis-à-vis de l'État et des partenaires au développement. Il est sollicité sur toutes les questions touchant au secteur privé.
                                    Nos membres sont actifs dans tous les secteurs de l'économie burkinabè, des grandes entreprises aux très petites entreprises (TPE).</p>
							<!-- <p>Aenean tincidunt id mauris id auctor. Donec at ligula lacus. Nulla dignissim mi quis neque interdum, quis porta sem finibus.</p> -->
						</div>
						<!-- <div class="row clearfix">
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>Cadre de représentation et de coordination.</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>Promotion de l’intérêt général du secteur privé.</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>Force solidaire et structurée.</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-one">
									<li>Rôle actif dans le dialogue et les services.</li>
								</ul>
							</div>
						</div> -->
						<!-- <div class="question">Call to ask <a href="#">any question</a> <strong>540-325-1523</strong> <span class="or">or</span> <strong>540-328-1265</strong></div> -->
						<div class="signature">
							<div class="signature-img"><img src="images/icons/signature.png" alt=""/></div>
							<h5>Idrissa NASSA</h5>
							<div class="designation">Le Président</div>
						</div>
					</div>
				</div>
				
				

				
			</div>
		</div>
	</section>
    <section class="counter-section">
		<div class="container">
		
			<!-- Fact Counter -->
			<div class="fact-counter style-three">
				<div class="row clearfix">
				
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<div class="icon fa fa-briefcase"></div>
								<span class="count-text" data-speed="3000ms" data-stop="1825">0</span>+
								<div class="counter-title">Travaux achevés</div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<div class="icon flaticon-teamwork"></div>
								<span class="count-text" data-speed="2000" data-stop="532">0</span>+
								<div class="counter-title">Clients satisfaits</div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<div class="icon flaticon-ribbon-badge-award"></div>
								<span class="count-text" data-speed="2000" data-stop="69">0</span>+
								<div class="counter-title">Prix remportés</div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<div class="icon flaticon-multiple-users-silhouette"></div>
								<span class="count-text" data-speed="1500" data-stop="32">0</span>+
								<div class="counter-title">Membres de l'équipe</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>


        <div class="partners-section">
            <h2>Nos Partenaires</h2>
            <div class="logo-slider">
                <div class="logo-track">
                    <div class="partner-logo">BANQUE ATLANTIQUE</div>
                    <div class="partner-logo">ECOBANK</div>
                    <div class="partner-logo">CORIS BANK</div>
                    <div class="partner-logo">UBA</div>
                    <div class="partner-logo">BSIC</div>
                    <div class="partner-logo">BOA</div>
                    <div class="partner-logo">BRS</div>
                    <div class="partner-logo">ORANGE</div>
                    <div class="partner-logo">MOOV</div>
                    <div class="partner-logo">TELECEL</div>
                    <div class="partner-logo">BANQUE ATLANTIQUE</div>
                    <div class="partner-logo">ECOBANK</div>
                    <div class="partner-logo">CORIS BANK</div>
                    <div class="partner-logo">UBA</div>
                    <div class="partner-logo">BSIC</div>
                    <div class="partner-logo">BOA</div>
                    <div class="partner-logo">BRS</div>
                    <div class="partner-logo">ORANGE</div>
                    <div class="partner-logo">MOOV</div>
                    <div class="partner-logo">TELECEL</div>
                </div>
            </div>
        </div>

@endsection