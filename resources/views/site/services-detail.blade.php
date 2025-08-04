 @extends('layouts.app')

@section('title', 'PATRONAT | {{ $services->titre }}')

@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
    	<div class="container">
			<div class="content">
				<h1>{{ $services->titre}}</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Accueil</a></li>
					<li>Services Detail</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="container">
        	<div class="row clearfix">
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar padding-right">
					
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">
								
								<li class="active"><a href="#"></a></li>
							
                                
                            </ul>
                        </div>
						
						<!-- Contact Widget-->
                        <div class="sidebar-widget contact-widget">
                        	<div class="sidebar-title">
                                <h4>Contact</h4>
                            </div>
							<ul>
								<li><span class="icon flaticon-map-1"></span>{{$infos->adresse}}</li>
								<li><span class="icon flaticon-call-answer"></span> {{$infos->numero}}</li>
								<li><span class="icon flaticon-comment"></span> {{$infos->email}}</li>
							</ul>
						</div>
						
						<!-- Brochures Widget-->
                       <!--  <div class="sidebar-widget brochures-widget">
                        	<div class="sidebar-title">
                                <h4>Brochures</h4>
                            </div>
							<div class="text">View our 2019 financial prospectus brochure for an easy to read guide on all of the services offer.</div>
							<ul class="files">
								<li><a href="#"><span class="flaticon-download-arrow"></span> Download Brochure</a></li>
								<li><a href="#"><span class="flaticon-pdf"></span> Characteristics</a></li>
							</ul>
						</div>
						 -->
						
					</aside>
				</div>
				
				<!--Content Side-->
				

                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="services-single">
						<h4>{{$services->titre}}</h4>
						<div class="text">
							<p>{{ $services->contenu }}</p>
						</div>
						<!-- <ul class="list-style-five">
							<li>Sed do eiusmod tempor incididunt ut</li>
							<li>Labore et dolore magna aliqua</li>
							<li>Ut enim ad minim veniam quis nostrud</li>
							<li>Andomised words which don't look</li>
						</ul> -->
						<!-- Services Gallery -->
						 	@if ($services->galerie && is_array($services->galerie))
						<div class="services-gallery">
							<div class="services-carousel owl-carousel owl-theme">

								@foreach ($services->galerie as $galeries )
								<div class="slide">
									<div class="image">
										<img src="{{asset('storage/'. $galeries)}}" alt="">
									</div>
								</div>
								@endforeach
								
							
							</div>
						</div>
						@endif
						<!--Services Info Tabs-->
                        <div class="Services-info-tabs">
                            <!--Service Tabs-->
                            <div class="service-tabs tabs-box">
                            
                                <!--Tab Btns-->
                               <!--  <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-audit" class="tab-btn active-btn"><i>Audit</i></li>
                                    <li data-tab="#prod-strategy" class="tab-btn"><i>Strategy</i></li>
                                    <li data-tab="#prod-sustainability" class="tab-btn"><i>Sustainability</i></li>
                                </ul> -->
                                
                                <!--Tabs Container-->
                                <!-- <div class="tabs-content">
                                    
                                   
                                    <div class="tab active-tab" id="prod-audit">
                                        <div class="content">
											<div class="text">
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</div>
									</div>
									
									
                                    <div class="tab" id="prod-strategy">
                                        <div class="content">
											<div class="text">
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</div>
									</div>	
									
									
                                    <div class="tab" id="prod-sustainability">
                                        <div class="content">
											<div class="text">
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</div>
									</div>
									
								</div> -->
							</div>
						</div>
						
						<div class="row clearfix">
							@foreach ($service as $servi)
							<div class="services-block-two style-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-internet"></span>
									</div>
									<h3>{{$servi->titre}}</h3>
									<div class="text">{{$servi->contenu}}.</div>
									<div class="overlay-box" style="background-image: url(images/resource/service-1.jpg);">
										<div class="overlay-inner">
											<div class="content">
												<span class="icon flaticon-internet"></span>
												<h4><a href="{{route('service.show', $servi->id)}}">{{$servi->titre}}</a></h4>
												<a href="{{route('service.show', $servi->id)}}" class="theme-btn btn-style-one">Consultez</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<!-- Services Block Two -->
							
							
							<!-- Services Block Two -->
							<!-- <div class="services-block-two style-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-museum"></span>
									</div>
									<h3>Civil Law</h3>
									<div class="text">It is a long established fact that areader will be distracted by the readable content of a page when looking.</div>
									<div class="overlay-box" style="background-image: url(images/resource/service-1.jpg);">
										<div class="overlay-inner">
											<div class="content">
												<span class="icon flaticon-museum"></span>
												<h4><a href="#">Civil Law</a></h4>
												<a href="#" class="theme-btn btn-style-one">consult now</a>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							
						</div>
						
						<!-- More Services -->
						<!-- <div class="more-services">
							<div class="clearfix">
								<div class="pull-left">
									<a href="#"><span class="fa fa-angle-double-left"></span> Previous Service</a>
								</div>
								<div class="pull-right">
									<a href="#">Newer Service <span class="fa fa-angle-double-right"></span></a>
								</div>
							</div>
						</div> -->
						
					</div>
				</div>
				
			
			</div>
		</div>
	</div>
	
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
@endsection
	<!-- End Subscribe Section -->
	
