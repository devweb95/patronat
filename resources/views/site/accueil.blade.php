@extends('layouts.app')

@section('title', 'PATRONAT | Homepage')

@section('content')

    <section class="banner-section-two" style="background-image:url({{asset('images/background/burk.jpg')}})">
		<div class="left-side">
			<div class="icon-image"></div>
		</div>
		<div class="container">
			<div class="main-slider-carousel owl-carousel owl-theme">
				
				<!-- Slide -->
				<div class="slide">
					<div class="row clearfix">
						<!-- Image Column -->
						<div class="image-column col-lg-7 col-md-12 col-sm-12">
							<div class="image">
								<img src="{{ asset('images/new/men.png') }}" alt="" />
							</div>
						</div>
						<!-- Content Column -->
						<div class="content-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column">
								<h2>Confédération Générale<span> des Entreprises du Faso</span></h2>
								<div class="text">Les instances statutaires du COGEF <br> et le président du Faso. </div>
								<a href="#" class="theme-btn btn-style-one">Contactez nous</a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div class="slide">
					<div class="row clearfix">
						<!-- Image Column -->
						<div class="image-column col-lg-7 col-md-12 col-sm-12">
							<div class="image">
								<img src="{{ asset('images/main-slider/slide3.jpg') }}" alt="" />
							</div>
						</div>
						<!-- Content Column -->
						<div class="content-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column">
								<h2>Confédération Générale<span> des Entreprises du Faso</span></h2>
								<div class="text">Le COGEF, l'organisation faitiere <br> des employeurs du <br> Burkina Faso.</div>
								<a href="#" class="theme-btn btn-style-one">Contactez nous</a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div class="slide">
					<div class="row clearfix">
						<!-- Image Column -->
						<div class="image-column col-lg-7 col-md-12 col-sm-12">
							<div class="image">
								<img src="{{ asset('images/main-slider/slide2.jpg') }}" alt="" />
							</div>
						</div>
						<!-- Content Column -->
						<div class="content-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column">
								<h2>Confédération Générale<span> des Entreprises du Faso</span></h2>
								<div class="text">Le cadre d'actions en faveur<br> du secteur privé Burkinabè:</div>
								<a href="#" class="theme-btn btn-style-one">Contactez nous</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--End Banner Section-->
	
	<!-- Feature Section -->
	<!-- <section class="feature-section">
		<div class="container">
			<div class="inner-container">
				<div class="clearfix">
					
					
					<div class="feature-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="big-icon flaticon-calendar"></div>
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-calendar"></span>
								</div>
								<div class="title">Voir</div>
								<h4>Evènements</h4>
							</div>
						</div>
					</div>
					
					
					<div class="feature-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="big-icon flaticon-link-symbol"></div>
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-link-symbol"></span>
								</div>
								<div class="title">Rejoindre</div>
								<h4>L'équipe</h4>
							</div>
						</div>
					</div>
					
					
					<div class="feature-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="big-icon flaticon-calendar"></div>
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-calendar"></span>
								</div>
								<div class="title">Book an</div>
								<h4>Appointment</h4>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Feature Section -->
	
	<!-- About Section -->
	<section class="about-section style-two">
		<div class="container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="section-title">
							<div class="title">A propos de nous</div>
							<h3>Confédération Générale<span> des Entreprises du Faso</span></h3>
						</div>
						
						<div class="text">
							<p>Le COGEF est un cadre d'actions, de représentation, de coordination, de liaison et d'information en faveur du secteur privé dans son ensemble.
								Il constitue une force solidaire, une force de représentation, de proposition, de négociaton et de services.</p>
							<!-- <p>Aenean tincidunt id mauris id auctor. Donec at ligula lacus. Nulla dignissim mi quis neque interdum, quis porta sem finibus.</p> -->
						</div>
						<div class="row clearfix">
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
	<!-- End About Section -->
	
	<!-- Feature Section Two -->
	<!-- <section class="feature-section-two">
		<div class="container">
			<div class="inner-container">
				<div class="row clearfix">
					
					
					<div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="fill-line"></div>
						<div class="inner-box">
							<div class="year">2016</div>
							<h3>Started Journey</h3>
							<div class="text">Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
						</div>
					</div>
					
					
					<div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="fill-line"></div>
						<div class="inner-box">
							<div class="year">2017</div>
							<h3>We employed lawyers</h3>
							<div class="text">Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
						</div>
					</div>
					
					
					<div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="fill-line"></div>
						<div class="inner-box">
							<div class="year">2018</div>
							<h3>Winning best awards</h3>
							<div class="text">Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
						</div>
					</div>
					
					
					<div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="fill-line"></div>
						<div class="inner-box">
							<div class="year">2019</div>
							<h3>Improved team</h3>
							<div class="text">Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section> -->
	
	
	<!-- Services Section Three -->
	<section class="services-section-three">
    <div class="icon-one wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms" style="background-image:url({{ asset('images/icons/icon-6.png') }})"></div>
    <div class="icon-two wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms" style="background-image:url({{ asset('images/icons/icon-7.png') }})"></div>
    <div class="container">
        <div class="row clearfix">
            
            <!-- Blocks Column -->
            <div class="blocks-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="row clearfix">
                        
                        <!-- Services Block Three -->
                        <!-- <div class="services-block-three col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-bullhorn"></span>
                                    </div>
                                    <h6><a href="#">Information</a></h6>
                                    <div class="text">Fourniture régulière de données économiques, juridiques et sectorielles utiles aux membres pour une meilleure prise de décision.</div>
                                </div>
                            </div>
                        </div> -->
                        
                        <!-- Services Block -->
                        <div class="services-block-three col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-suitcase"></span>
                                    </div>
                                    <h6><a href="#">Formation</a></h6>
                                    <div class="text">Organisation de sessions de renforcement de capacités pour améliorer les compétences techniques et managériales des acteurs du secteur privé.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Services Block -->
                        <div class="services-block-three col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-area-chart"></span>
                                    </div>
                                    <h6><a href="#">Représentation</a></h6>
                                    <div class="text">Défense des intérêts du secteur privé auprès des autorités publiques, des partenaires techniques et financiers, et dans les instances nationales et internationales.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Services Block -->
                        <div class="services-block-three col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-coffee"></span>
                                    </div>
                                    <h6><a href="#">Réalisation d'études et d'enquêtes</a></h6>
                                    <div class="text">Conception et mise en œuvre d'études économiques, sectorielles ou sociales pour orienter les stratégies du secteur privé.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Services Block -->
                        <div class="services-block-three col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-building"></span>
                                    </div>
                                    <h6><a href="#">Assistance, conseil et orientation des membres</a></h6>
                                    <div class="text">Appui personnalisé aux entreprises membres en matière de gestion, fiscalité, droit du travail, démarches administratives.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Services Block -->
                        <div class="services-block-three col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-pie-chart"></span>
                                    </div>
                                    <h6><a href="#">Recherche de financements et de partenariats</a></h6>
                                    <div class="text">Soutien à l'identification d'opportunités de financement et de collaboration avec des partenaires techniques ou financiers.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Services Block -->
                        <div class="services-block-three col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-handshake-o"></span>
                                    </div>
                                    <h6><a href="#">Lobbying et plaidoyer</a></h6>
                                    <div class="text">Actions d'influence pour faire évoluer les politiques publiques en faveur d'un environnement des affaires plus favorable.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Services Block -->
                        <div class="services-block-three col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-balance-scale"></span>
                                    </div>
                                    <h6><a href="#">Médiation</a></h6>
                                    <div class="text">Intervention dans la résolution amiable des différends entre acteurs économiques ou entre entreprises et administrations.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Services Block -->
                        <div class="services-block-three col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-users"></span>
                                    </div>
                                    <h6><a href="#">Négociation collective</a></h6>
                                    <div class="text">Participation active à la concertation sociale et à la négociation d'accords collectifs au profit des entreprises et des salariés.</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!-- Image Column -->
            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column clearfix">
                    
                    <div class="image">
                        <img src="{{ asset('images/resource/about-2.jpg') }}" alt="COGEF Experience"/>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h2>35 <span>ans d'expérience</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
	<!-- End Services Section Three -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="container">
			
			<!-- Sec Title -->
			<div class="section-title">
				<div class="title">Témoignage</div>
				<h3>Les clients sont très satisfaits<br> de travailler avec <span>nous</span></h3>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="text">Grâce à l'accompagnement du COGEF, notre entreprise a pu accéder à des opportunités de financement inédites. Leur réseau et leur appui nous ont permis de passer un cap stratégique. </div>
						<div class="author-post">
							<div class="author-inner">
								<div class="image"><img src="{{asset('images/resource/autrice2.png')}}" alt="" /></div>
								<h3>Fatoumata Koné</h3>
								<div class="designation">Directrice Générale, FasoAgroTech</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="text">Les formations proposées par le COGEF ont considérablement renforcé les compétences de notre équipe en gestion financière et ressources humaines. Un vrai levier de croissance pour les PME. </div>
						<div class="author-post">
							<div class="author-inner">
								<div class="image"><img src="{{asset('images/resource/autrice1.png')}}" alt="" /></div>
								<h3>Clarisse Ouattara</h3>
								<div class="designation">Manager, Burkina Conseils</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="text">Le COGEF joue un rôle clé dans la défense des intérêts du secteur privé. Leur capacité à dialoguer avec les pouvoirs publics a facilité la résolution d'un conflit fiscal majeur pour notre structure. </div>
						<div class="author-post">
							<div class="author-inner">
								<div class="image"><img src="{{asset('images/resource/auteur1.png')}}" alt="" /></div>
								<h3>Issa Sanou</h3>
								<div class="designation">PDG, Sanou Industries</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="text">Nous avons bénéficié d'une assistance juridique rapide et efficace grâce au COGEF. Leur service de médiation a permis d'éviter un long contentieux avec un partenaire local. </div>
						<div class="author-post">
							<div class="author-inner">
								<div class="image"><img src="{{asset('images/resource/auteur2.png')}}" alt="" /></div>
								<h3>David Yaméogo</h3>
								<div class="designation">Fondateur, GreenLogiK</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block Two -->
				<!-- <div class="testimonial-block-two">
					<div class="inner-box">
						<div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean tor massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
						<div class="author-post">
							<div class="author-inner">
								<div class="image"><img src="images/resource/author-3.jpg" alt="" /></div>
								<h3>Andrew Rob</h3>
								<div class="designation">Former Developer</div>
							</div>
						</div>
					</div>
				</div> -->
				
				<!-- Testimonial Block Two -->
				<!-- <div class="testimonial-block-two">
					<div class="inner-box">
						<div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean tor massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
						<div class="author-post">
							<div class="author-inner">
								<div class="image"><img src="images/resource/author-4.jpg" alt="" /></div>
								<h3>Nelli Jhonson</h3>
								<div class="designation">Former Developer</div>
							</div>
						</div>
					</div>
				</div> -->
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="container">
		
			<!-- Sec Title -->
			<div class="section-title light">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Notre Équipe</div>
						<h3>Nous sommes fiers de notre <br> parcours et de nos <span>réalisations</span></h3>
					</div>
					<div class="pull-right">
						<div class="text">Une équipe pluridisciplinaire engagée pour représenter, accompagner et défendre les intérêts des entreprises burkinabè avec rigueur et professionnalisme.</div>
					</div>
				</div>
			</div>
			
			<div class="clearfix">
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('images/new/idrissa.jpeg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Idrissa NASSA</a></h3>
							<div class="designation">Président</div>
							<div class="overlay-box">
								<div class="overlay-content">
									<div class="title">Contact info</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('images/testimonial/2.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Fatoumata Traoré</a></h3>
							<div class="designation">Directrice Exécutive</div>
							<div class="overlay-box">
								<div class="overlay-content">
									<div class="title">Contact info</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('images/testimonial/3.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Moussa Ouédraogo</a></h3>
							<div class="designation">Responsable Juridique & Plaidoyer</div>
							<div class="overlay-box">
								<div class="overlay-content">
									<div class="title">Contact info</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="{{asset('images/testimonial/1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Aïcha Bationo</a></h3>
							<div class="designation">Chargée de la Communication</div>
							<div class="overlay-box">
								<div class="overlay-content">
									<div class="title">Contact info</div>
									<ul class="social-icons">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- News Section -->
	<section class="news-section style-two">
		<div class="container">
		
			<!-- Sec Title -->
			<div class="section-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Actualités</div>
						<h3>Restez informé grâce à nos <br> dernières <span>nouvelles</span></h3>
					</div>
					<div class="pull-right">
						<div class="text">Suivez les événements majeurs, les réformes économiques et les actions menées pour renforcer le secteur privé au Burkina Faso et en Afrique de l’Ouest.</div>
					</div>
				</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('images/blog/blog3.jpeg') }}" alt="" />
							<div class="overlay-box">
								<a href="{{ asset('images/blog/blog3.jpeg') }}" data-fancybox="news" data-caption="" class="plus flaticon-plus"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span> 30 mai 2025</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="#">FORUM SUR LE SECTEUR PRIVE AU BURKINA FASO : UN RENDEZ-VOUS DE REFLEXION  TRIPARTITE AUTOUR DU THEME « CONSTRUIRE DES VOIES DURABLES ET INCLUSIVES POUR LE DEVELOPPEMENT ».</a></h5>
							<a href="#" class="theme-btn btn-style-two">Voir plus</a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('images/blog/blog2.jpeg') }}" alt="" />
							<div class="overlay-box">
								<a href="{{ asset('images/blog/blog2.jpeg') }}" data-fancybox="news" data-caption="" class="plus flaticon-plus"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span> 13 mai 2025</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="#">Séance de travail entre la Confédération Générale des Entreprises du Faso (COGEF) et la Banque Ouest Africaine de Développement (BOAD)</a></h5>
							<a href="#" class="theme-btn btn-style-two">Voir plus</a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('images/blog/blog1.jpeg') }}" alt="" />
							<div class="overlay-box">
								<a href="{{ asset('images/blog/blog1.jpeg') }}" data-fancybox="news" data-caption="" class="plus flaticon-plus"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span> 13 mai 2025</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="#">M. Idrissa NASSA, CEO DE L’ANNEE</a></h5>
							<a href="#" class="theme-btn btn-style-two">Voir plus</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Counter Section -->
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
	
	<!-- Contact Page Section -->
	<section class="contact-form-section">
		
		<div class="container">
			<div class="inner-container">
				
				<!-- Upper Content -->
				<div class="upper-content">
					<div class="row clearfix">
						
						<!-- Title Column -->
						<div class="title-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column">
								<!-- Sec Title -->
								<div class="section-title">
									<div class="title">Contactez nous</div>
									<h3>N'hésitez pas à nous <br> poser des <span>questions</span></h3>
								</div>
							</div>
						</div>
						
						<!-- Info Column -->
						<div class="info-column col-lg-7 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="row clearfix">
									<!-- Column -->
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<ul class="list-style-two style-two">
											<li><span class="icon flaticon-placeholder-1"></span>Av. Kwame Nkrumah, Koulouba, 01 BP 1482 Ouagadougou 01, Ouagadougou, Burkina Faso</li>
										</ul>
									</div>
									<!-- Column -->
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<ul class="list-style-two style-two">
											<li><span class="icon flaticon-phone-call"></span>(+226) 25 33 03 09</li>
											<li><span class="icon flaticon-chat"></span>contact@patronat.bf</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Default Form -->
				<div class="default-form style-two">
					<form method="post" action="#">
						<div class="row clearfix">
							<div class="form-group col-lg-4 col-md-6 col-sm-12">
								<input type="text" name="firstname" value="" placeholder="Prénom.." required>
							</div>
							
							<div class="form-group col-lg-4 col-md-6 col-sm-12">
								<input type="text" name="Lastname" value="" placeholder="Nom" required>
							</div>
							
							<div class="form-group col-lg-4 col-md-12 col-sm-12">
								<input type="text" name="email" value="" placeholder="Adresse email.." required>
							</div>
							
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<textarea name="message" placeholder="Ecrire..."></textarea>
							</div>
							
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<button type="submit" class="theme-btn btn-style-one">Envoyer</button>
							</div>                                        
						</div>
					</form>

					
				</div>
				<!--End Default Form-->

				<!-- <div class="map-section">
			
					<div class="map-outer">
						
						<div class="map-canvas"
							data-zoom="12"
							data-lat="-37.817085"
							data-lng="144.955631"
							data-type="roadmap"
							data-hue="#ffc400"
							data-title="Envato"
							data-icon-path="images/icons/map-marker.png"
							data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
						</div>
					</div>
				</div> -->
				
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	
@endsection