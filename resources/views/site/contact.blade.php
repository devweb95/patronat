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
    <section class="page-title" style="background-image:url({{ asset('images/contact/breadcumb.jpg') }}); height: 70vh;background-size: cover; background-position: center; background-repeat: no-repeat;">
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
											<li><span class="icon flaticon-placeholder-1"></span>{{$infos->adresse}}</li>
										</ul>
									</div>
									<!-- Column -->
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<ul class="list-style-two style-two">
											<li><span class="icon flaticon-phone-call"></span>{{$infos->numero}}</li>
											<li><span class="icon flaticon-chat"></span>{{$infos->email}}</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Default Form -->
				<div class="default-form style-two">
					<form method="post" action="blog.html">
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

				
			</div>
		</div>
		
	</section>

	<!-- <div class="map-embed">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125298.59264892332!2d-1.6000000000000001!3d12.3714277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xee2f2f9c2f9c2f9c%3A0x8b8b8b8b8b8b8b8b!2sOuagadougou%2C%20Burkina%20Faso!5e0!3m2!1sfr!2sbf!4v1641234567890!5m2!1sfr!2sbf"
                            width="100%" 
                            height="500px" 
                            style="border:0; border-radius: 12px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div> -->
	
	<!-- End Team Page Section -->

	<!-- Contact Info Section -->
	<section class="contact-info-section" style="background-image:url({{asset('images/contact/backgroud.jpg')}})">
		<div class="container">
			<div class="row clearfix">
				
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Burkina Faso</h4>
					<ul class="list-style-seven">
						<li><span class="icon flaticon-map-1"></span> {{$infos->adresse}}</li>
						<li><span class="icon flaticon-call-answer"></span> {{$infos->numero}} </li>
						<li><span class="icon fa fa-envelope-o"></span>{{$infos->email}}</li>
					</ul>
				</div>
				<div class="column col-lg-8 col-md-8 col-sm-12">
					<div class="map-embed">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125298.59264892332!2d-1.6000000000000001!3d12.3714277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xee2f2f9c2f9c2f9c%3A0x8b8b8b8b8b8b8b8b!2sOuagadougou%2C%20Burkina%20Faso!5e0!3m2!1sfr!2sbf!4v1641234567890!5m2!1sfr!2sbf"
                            width="100%" 
                            height="500px" 
                            style="border:0; border-radius: 12px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
				</div> 
				
			</div>
		</div>
	</section>

	<!-- End Contact Info Section -->
	
	<!--Main Footer-->
	
</div>
@endsection