@extends('layouts.app')

@section('title', 'PATRONAT | Actualités')

@section('content')
<div class="page-wrapper">
 	
    <!-- Preloader -->
	
	<!--Form Back Drop-->
    <div class="form-back-drop"></div>
	
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button><span class="fa fa-remove"></span></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <!-- <div class="hidden-bar-wrapper">
		
			<div class="inner-box">
				<div class="logo">
					<a href="index.html"><img src="images/sidebar-logo.png" alt="" /></a>
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
        </div> -->
        
    </section>
    <!-- End / Hidden Bar -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('images/contact/breadcumb.jpg') }})">
    	<div class="container">
			<div class="content">
				<h1>Contact</h1>
				<ul class="page-breadcrumb">
					<li><a href="/">Accueil</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
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
		</div>
		<div class="container">
			<div class="inner-container">
				<h2>Contactez notre équipe d'assistance ou prenez rendez-vous <br> avec <span>notre consultant.</span></h2>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">Veuillez nous contacter en utilisant les informations ci-dessous. Pour plus d'informations sur nos services de conseil en gestion, veuillez consulter la page appropriée de notre site.</div>
							<ul class="list-style-six">
								<li><span class="icon fa fa-building"></span> Av. Kwame Nkrumah, Koulouba, <br> 01 BP 1482 Ouagadougou 01, Ouagadougou ,<br> Burkina Faso </li>
								<li><span class="icon fa fa-fax"></span> +226 25 33 03 09</li>
								<li><span class="icon fa fa-envelope-o"></span>contact@patronat.bf</li>
							</ul>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!--Contact Form-->
							<div class="contact-form">
								<form method="post" action="sendemail.php" id="contact-form">
									
									<div class="form-group">
										<input type="text" name="firstname" value="" placeholder="Nom complet" required>
									</div>
									
									<div class="form-group">
										<input type="text" name="email" value="" placeholder="Email" required>
									</div>
									
									<div class="form-group">
										<select class="custom-select-box">
											<option>Choisir un sujet</option>
											<option>Sujet 1</option>
											<option>Sujet 2</option>
										</select>
									</div>
									
									<div class="form-group">
										<textarea name="message" placeholder="Ecrire.."></textarea>
									</div>
									
									<div class="form-group">
										<button type="submit" class="theme-btn btn-style-one">Envoyer</button>
									</div>                                        
									
								</form>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section" style="background-image:url({{asset('images/contact/backgroud.jpg')}})">
		<div class="container">
			<div class="row clearfix">
				
				<!-- <div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>United Kingdom</h4>
					<ul class="list-style-seven">
						<li><span class="icon flaticon-map-1"></span> 49488 Avenida Obregon, <br> La Quinta, CA 92253</li>
						<li><span class="icon flaticon-call-answer"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon fa fa-envelope-o"></span>support@lawsight.com.uk</li>
					</ul>
				</div> -->
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Burkina Faso</h4>
					<ul class="list-style-seven">
						<li><span class="icon flaticon-map-1"></span> Av. Kwame Nkrumah, Koulouba, 01 BP 1482 Ouagadougou 01, <br>  Ouagadougou, Burkina Faso</li>
						<li><span class="icon flaticon-call-answer"></span> +226 25 33 03 09 <!-- <br> --> </li>
						<li><span class="icon fa fa-envelope-o"></span>contact@patronat.bf</li>
					</ul>
				</div>
			<!-- 	<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Netherlands</h4>
					<ul class="list-style-seven">
						<li><span class="icon flaticon-map-1"></span> Nieuwe Leliestraat 27-HS <br> 101J Amsterdam</li>
						<li><span class="icon flaticon-call-answer"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon fa fa-envelope-o"></span>support@lawsight.com.uk</li>
					</ul>
				</div> -->
				
			</div>
		</div>
	</section>
	<!-- End Contact Info Section -->
	
	<!--Main Footer-->
	
</div>
@endsection