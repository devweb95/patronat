@extends('layouts.app')

@section('title', 'PATRONAT | Actualités')

@section('content')

<div class="form-back-drop"></div>
	
    <!-- Hidden Navigation Bar -->
	<!-- <section class="hidden-bar right-align">
		<div class="hidden-bar-closer">
		    <button><span class="fa fa-remove"></span></button>
		</div>
		
		<div class="hidden-bar-wrapper">
            <div class="inner-box">
                <div class="logo">
                    <a href="{{ route('accueil') }}"><img src="{{asset('images/logoheader.png')}}" alt="" /></a>
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
	<!-- End / Hidden Bar -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('images/blog/breadcumb.jpg') }})">
    	<div class="container">
			<div class="content">
				<h1>Actualités</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{route('accueil')}}">Accueil</a></li>
					<li>Actualités</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Blog Page Section -->
	<section class="blog-page-section">
		<div class="container">
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
								<li><span class="fa fa-calendar"></span>30 mai 2025</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="#">FORUM SUR LE SECTEUR PRIVE AU BURKINA FASO : UN RENDEZ-VOUS DE REFLEXION  TRIPARTITE AUTOUR DU THEME « CONSTRUIRE DES VOIES DURABLES ET INCLUSIVES POUR LE DEVELOPPEMENT ».</a></h5>
							<a href="#" class="theme-btn btn-style-three">Voir plus</a>
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
								<li><span class="fa fa-calendar"></span>13 mai 2025</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="#">Séance de travail entre la Confédération Générale des Entreprises du Faso (COGEF) et la Banque Ouest Africaine de Développement (BOAD).</a></h5>
							<a href="#" class="theme-btn btn-style-three">Voir plus</a>
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
								<li><span class="fa fa-calendar"></span>13 mai 2025</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="#">M. Idrissa NASSA, CEO DE L’ANNEE.</a></h5>
							<a href="#" class="theme-btn btn-style-three">Voir plus</a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('images/blog/blog4.jpeg') }}" alt="" />
							<div class="overlay-box">
								<a href="{{ asset('images/blog/blog4.jpeg') }}" data-fancybox="news" data-caption="" class="plus flaticon-plus"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span> 28 avril 2025</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="#">RÉUNIONS STATUTAIRES DU CNPB.</a></h5>
							<a href="#" class="theme-btn btn-style-three">Voir plus</a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('images/blog/blog5.jpeg') }}" alt="" />
							<div class="overlay-box">
								<a href="{{ asset('images/blog/blog5.jpeg') }}" data-fancybox="news" data-caption="" class="plus flaticon-plus"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>14 avril 2025</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="#">Réunions statutaires du CNPB.</a></h5>
							<a href="#" class="theme-btn btn-style-three">Voir plus</a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('images/blog/blog6.jpeg') }}" alt="" />
							<div class="overlay-box">
								<a href="{{ asset('images/blog/blog6.jpeg') }}" data-fancybox="news" data-caption="" class="plus flaticon-plus"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>28 mars 2025</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="#">Rencontre et rupture collective du jeûne entre le Système des Nations Unies et le secteur privé burkinabè.</a></h5>
							<a href="#" class="theme-btn btn-style-three">Voir plus</a>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</section>
	<!-- End Blog Page Section -->
	
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