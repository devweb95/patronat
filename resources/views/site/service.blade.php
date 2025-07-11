@extends('layouts.app')

@section('title', 'PATRONAT | Services')

@section('content')


<!-- <section class="hidden-bar right-align">
		<div class="hidden-bar-closer">
		<button><span class="fa fa-remove"></span></button>
		</div>
		
		<div class="hidden-bar-wrapper">
		<div class="inner-box">
		<div class="logo">
		<a href="#"><img src="images/sidebar-logo.png" alt="" /></a>
		</div>
		<div class="text">Lorem ipsum, or lipsum as it is sometimes the known, is dummy text used in laying out print, graphic or web designs. The passage</div>
		
		<ul class="list-style-four">
		<li><span class="icon flaticon-house"></span> <strong>Collins Street</strong>West Victoria 8007 Australia</li>
		<li><span class="icon flaticon-phone-call"></span> <strong>Call us!</strong>124-3254-325</li>
		<li><span class="icon flaticon-talk"></span><strong>Mail address</strong>info@domain.com</li>
		</ul>
		<div class="lower-box">
		
		<ul class="social-icons">
		<li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
		<li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
		<li class="pinterest"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
		<li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
		</ul>
		<a href="#" class="theme-btn buy-btn">Buy LawSight today!</a>
		</div>
		</div>
		</div>
	</section> -->

	
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('images/service/services_breadcumb.jpg') }});height: 70vh;background-size: cover; background-position: center; background-repeat: no-repeat;">
    	<div class="container">
			<div class="content">
				<h1>Services</h1>
				<ul class="page-breadcrumb">
					<li><a href="#">Accueil</a></li>
					<li>Services</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Services Section Two -->
	<section class="services-section-four">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<div class="title">Services</div>
				<h3>Nous œuvrons au quotidien pour défendre les intérêts du secteur privé, favoriser le dialogue public-privé  <br> et promouvoir <span>un environnement des affaires sain et équitable.</span></h3>
			</div>
			<div class="row clearfix">
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12" >
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-internet"></span>
						</div>
						<h3>Formation</h3>
						<div class="text" style="height: 150px ; background-size: cover; background-position: center;">Organisation de sessions de renforcement de capacités pour améliorer les compétences techniques et managériales des acteurs du secteur privé.</div>
						<div class="overlay-box" style="background-image: url({{ asset('images/service/formation.jpg') }}) ">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-internet"></span>
									<h4><a href="#">Formation</a></h4>
									<a href="#" class="theme-btn btn-style-one">consulter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-museum"></span>
						</div>
						<h3>Représentation</h3>
						<div class="text" style="height: 150px">Défense des intérêts du secteur privé auprès des autorités publiques, des partenaires techniques et financiers, et dans les instances nationales et internationales.</div>
						<div class="overlay-box" style="background-image: url({{asset('images/service/representation.jpg')}});background-size: cover; background-position: center;">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-museum"></span>
									<h4><a href="#">Représentation</a></h4>
									<a href="#" class="theme-btn btn-style-one">consulter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-gun"></span>
						</div>
						<h3>Réalisation d'études et d'enquêtes</h3>
						<div class="text" style="height: 120px;background-size: cover; background-position: center;">Conception et mise en œuvre d'études économiques, sectorielles ou sociales pour orienter les stratégies du secteur privé.</div>
						<div class="overlay-box" style="background-image: url({{asset('images/service/etude.jpg')}});">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-gun"></span>
									<h4><a href="#">Réalisation d'études et d'enquêtes</a></h4>
									<a href="#" class="theme-btn btn-style-one">consulter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-plan"></span>
						</div>
						<h3>Assistance, conseil et orientation des membres</h3>
						<div class="text" style="height: 120px ;background-size: cover; background-position: center">Appui personnalisé aux entreprises membres en matière de gestion, fiscalité, droit du travail, démarches administratives.</div>
						<div class="overlay-box" style="background-image: url({{asset('images/service/assistance.jpg')}})">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-plan"></span>
									<h4><a href="#">Assistance, conseil et orientation des membres</a></h4>
									<a href="#" class="theme-btn btn-style-one">consulter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-book"></span>
						</div>
						<h3>Recherche de financements et de partenariats</h3>
						<div class="text" style="height: 100px;background-size: cover; background-position: center;">Soutien à l'identification d'opportunités de financement et de collaboration avec des partenaires techniques ou financiers.</div>
						<div class="overlay-box" style="background-image: url({{asset('images/service/financement2.jpg')}});">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-book"></span>
									<h4><a href="#">Recherche de financements et de partenariats</a></h4>
									<a href="#" class="theme-btn btn-style-one">consulter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-house-outline"></span>
						</div>
						<h3>Lobbying et plaidoyer</h3>
						<div class="text" style="height: 150px;background-size: cover; background-position: center;">Actions d'influence pour faire évoluer les politiques publiques en faveur d'un environnement des affaires plus favorable.</div>
						<div class="overlay-box" style="background-image: url({{asset('images/service/plaidoyer.jpg')}});">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-house-outline"></span>
									<h4><a href="#">Lobbying et plaidoyer</a></h4>
									<a href="#" class="theme-btn btn-style-one">consulter</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-house-outline"></span>
						</div>
						<h3>Médiation</h3>
						<div class="text" style="height: 150px ;background-size: cover; background-position: center">Intervention dans la résolution amiable des différends entre acteurs économiques ou entre entreprises et administrations.</div>
						<div class="overlay-box" style="background-image: url({{asset('images/service/mediation.jpg')}});background-size: cover; background-position: center;">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-house-outline"></span>
									<h4><a href="#">Médiation</a></h4>
									<a href="#" class="theme-btn btn-style-one">consulter</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="services-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-house-outline"></span>
						</div>
						<h3>Négociation collective</h3>
						<div class="text" style="height: 150px ;background-size: cover; background-position: center">Participation active à la concertation sociale et à la négociation d'accords collectifs au profit des entreprises et des salariés.</div>
						<div class="overlay-box" sstyle="background-image: url({{asset('images/service/collective.jpg')}});background-size: cover; background-position: center;">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-house-outline"></span>
									<h4><a href="#">Négociation collective</a></h4>
									<a href="#" class="theme-btn btn-style-one">consulter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		
		</div>
	</section>
	<!-- End Services Section Two -->
	
	<!-- Pricing Section -->
	<!-- <section class="pricing-section">
		<div class="container">
			
			<div class="section-title centered">
				<div class="title">Pricing</div>
				<h3>Choose the best pricing <br> to start <span> consulting </span></h3>
			</div>
			
			
			<div class="pricing-info-tabs">
				
				<div class="pricing-tabs tabs-box">
				
					
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#package-monthly" class="tab-btn active-btn"><span class="circle"></span> Monthly</li>
						<li data-tab="#package-yearly" class="tab-btn"><span class="circle"></span> Yearly <span class="save">Save 20%</span></li>
					</ul>
					
					
					<div class="tabs-content">
						
						
						<div class="tab active-tab" id="package-monthly">
							<div class="content">
								<div class="row clearfix">
									
									
									<div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											
											<div class="title-box">
												<div class="icon flaticon-startup-1"></div>
												<h5>Basic Plan</h5>
											</div>
											<div class="price">$29 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
									
									<div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											
											<div class="title-box">
												<div class="icon flaticon-startup"></div>
												<h5>Standard Plan</h5>
											</div>
											<div class="price">$49 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
									
									<div class="price-block col-lg-4 col-md-12 col-sm-12">
										<div class="inner-box">
											
											<div class="title-box">
												<div class="icon flaticon-startup-2"></div>
												<h5>Extended Plan</h5>
											</div>
											<div class="price">$59 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						
						<div class="tab" id="package-yearly">
							<div class="content">
								
								<div class="row clearfix">
									
									
									<div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											
											<div class="title-box">
												<div class="icon flaticon-startup-1"></div>
												<h5>Basic Plan</h5>
											</div>
											<div class="price">$29 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
									
									<div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											
											<div class="title-box">
												<div class="icon flaticon-startup"></div>
												<h5>Standard Plan</h5>
											</div>
											<div class="price">$49 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
									
									<div class="price-block col-lg-4 col-md-12 col-sm-12">
										<div class="inner-box">
											
											<div class="title-box">
												<div class="icon flaticon-startup-2"></div>
												<h5>Extended Plan</h5>
											</div>
											<div class="price">$59 <span>/ monthly</span></div>
											<div class="lower-box">
												<ul class="price-list">
													<li>Perspiciatis unde omnis iste natus</li>
													<li>error sit volupta tem accusantium</li>
													<li>doloremque laudantium, totam rem</li>
													<li>aperiam, eaque ipsa quae ab illo </li>
													<li>inventore veritatis.</li>
												</ul>
												<a href="#" class="theme-btn btn-style-two">Get Started</a>
											</div>
										</div>
									</div>
									
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Pricing Section -->
	
	<!-- Subscribe Section -->
	<section class="subscribe-section style-two">
		<div class="container">
			<div class="inner-container" style="background-image: url({{asset('images/blog/news.jpg')}}); display: flex; justify-content: center; align-items: center; height: 300px">
				<h2>Inscrivez votre email pour la newsletter <!-- <br> & Promotion --></h2>
				<!-- Subscribe Form -->
				<div class="subscribe-form">
					<form method="post" action="#">
						<div class="form-group">
							<input type="email" name="email" value="" placeholder="Adresse email" required>
							<button type="submit" class="theme-btn subscribe-btn">S'inscrire</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End Subscribe Section -->

@endsection