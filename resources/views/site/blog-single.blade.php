@extends('layouts.app')

@section('title', 'PATRONAT | Actualités')

@section('content')
    <!--End Main Header -->
	
	<!--Form Back Drop-->
    <div class="form-back-drop"></div>
	
	<!-- End / Hidden Bar -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('storage/' . $actualites->image_avant)}})">
    	<div class="container">
			<div class="content">
				<h1>{{$actualites->titre}}</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Accueil</a></li>
					<li>Détails de l'actualité</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="container">
        	<div class="row clearfix">
				
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-single">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('storage/' . $actualites->image_avant)}}" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li><span class="fa fa-calendar"></span>{{ $actualites->date_de_publication}}</li>
									<li><span class="fa fa-user"></span>Par {{$actualites->user->name}}</li>
									<!-- <li><span class="fa fa-list"></span>Uncategorized</li> -->
									<!-- <li><span class="fa fa-comment"></span>(3) Comment</li> -->
								</ul>
								<h4>{{$actualites->titre}}</h4>
								<div class="text">
									<p>{{ $actualites->contenu }}</p>
									<!-- <p>"Every child has the right to feel safe and protected in their own home - how is this poor child going to sleep tonight or in coming nights? What are the long term effects on her going to be?"</p>
									<p>"It's quite obvious the hypocrites who carried out this dreadful attack don't care at all about the children in their community. I wonder how they would feel if their own child witnessed such a level of violence?</p>
									<p>"There is absolutely no justification for an attack like this in our communities and we must all work together to bring those responsible to justice and to stop this from happening to another child."</p>
									<p>Earlier this month, <a href="#">the PSNI launched a hard-hitting advertisement campaign</a> aimed at changing public attitudes to paramilitary attacks.</p> -->
									@if ($actualites->galerie && is_array($actualites->galerie))
									<div class="news-gallery">
										<div class="row clearfix">
											@foreach ($actualites->galerie as $galerie )
											
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<div class="image">
													<img src="{{asset('storage/' . $galerie)}}" alt="" />
												</div>
											</div>
											
											@endforeach
										</div>
									</div>
									@endif
									<!-- <h5>A Kentucky woman who was accused last year.</h5>
									<p>The intruders chased the girl in the house and threatened her when she hid from them, according to the PSNI Limavady Facebook page.</p>
									<p>"She came out petrified with her Piggy Bank, HER PIGGY BANK! hoping that the men would take it and leave her dad alone," one outraged officer wrote.</p>
									<blockquote>
										<div class="quote-icon flaticon-left-quote"></div>
										<div class="quote-text">What sort of men would think it is acceptable to subject a young girl to this level of brutality and violence? an attack like this in ourcommunities and we must all work together.</div>
									</blockquote>
									<p>The intruders chased the girl in the house and threatened her when she hid from them, according to the PSNI Limavady Facebook page.</p>
									<p>"She came out petrified with her Piggy Bank, HER PIGGY BANK! hoping that the men would take it and leave her dad alone," one outraged officer wrote.</p> -->
								</div>
								
							</div>
						</div>
						
						<!--post-share-options-->
						<!-- <div class="post-share-options">
							<div class="post-share-inner clearfix">
								<div class="pull-left post-tags"><span>Tags: </span><a href="#">Business</a> <a href="#">Life</a> <a href="#">Applin</a> <a href="#">Techniq</a></div>
								<ul class="pull-right social-links clearfix">
									<li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
									<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
									<li class="google-plus"><a href="#" class="fa fa-google-plus"></a></li>
									<li class="dribble"><a href="#" class="fa fa-dribbble"></a></li>
								</ul>
							</div>
						</div>
						 -->
						<!-- New Posts -->
						<div class="new-posts">
							<div class="clearfix">
								<a class="prev-post pull-left" href="#"><span class="fa fa-angle-double-left"></span> Previous Post</a>
								<a class="next-post pull-right" href="#">Next Post <span class="fa fa-angle-double-right"></span></a>
							</div>
						</div>
						
						<!--Comments Area-->
						<!-- <div class="comments-area">
							<div class="group-title">
								<h6>Comments</h6>
							</div>
							
							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb"><img src="images/resource/author-7.jpg" alt=""></div>
									<div class="comment-inner clearfix">
										<div class="comment-info clearfix"><strong>Riva Collins</strong><div class="comment-time"> November 19, 2019 at 11:00 am </div></div>
										<div class="text">It’s no secret that the digital industry is booming. From exciting startups to need ghor global and brands, companies are reaching out.</div>
										<a class="comment-reply" href="#">Reply <span class="fa fa-angle-right"></span></a>
									</div>
								</div>
							</div>

							
							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb"><img src="images/resource/author-8.jpg" alt=""></div>
									<div class="comment-inner clearfix">
										<div class="comment-info clearfix"><strong>Obila Doe</strong><div class="comment-time"> November 22, 2019 at 10:00 pm </div></div>
										<div class="text">It’s no secret that the digital industry is booming. From exciting startups to need ghor hmiu global and brands, companies are reaching out.</div>
										<a class="comment-reply" href="#">Reply <span class="fa fa-angle-right"></span></a>
									</div>
								</div>
							</div>

						</div> -->
						<!--End Comments Area-->
						
						<!-- Comment Form -->
						<!-- <div class="comment-form">
							<div class="group-title">
								<h6>Post A Comment</h6>
								<div class="group-text">Your email address will not be published *</div>
							</div>
							
							<form method="post" action="blog.html">
								<div class="row clearfix">
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea name="message" placeholder="your comment"></textarea>
									</div>
								
									<div class="col-lg-4 col-md-4 col-sm-4 form-group">
										<input type="text" name="username" placeholder="name*" required>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-4 form-group">
										<input type="email" name="email" placeholder="email*" required>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-4 form-group">
										<input type="text" name="text" placeholder="website*" required>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 form-group">
										<button class="theme-btn btn-style-one" type="submit" name="submit-form">Post Comment</button>
									</div>
									
								</div>
							</form>
								
						</div> -->
						<!--End Comment Form -->
						
					</div>
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar default-sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Your Keyword..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
						<!--Blog Category Widget-->
                       <!--  <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title-two">
                                <h4>Categories</h4>
                            </div>
                            <ul class="blog-cat-two">
                                <li><a href="#">Consulting <span>(3)</span></a></li>
                                <li><a href="#">Technology <span>(4)</span></a></li>
                                <li><a href="#">Life style <span>(8)</span></a></li>
                            </ul>
                        </div> -->
						
						<!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title-two">
                                <h4>Actualités récentes</h4>
                            </div>
							
							
							
							<article class="post">
								@foreach ($actualite as $actu)
								<figure class="post-thumb">
									<a href="#" class="overlay-box">
										<span class="icon fa fa-link"></span>
									</a></figure>
								<div class="text"><a href="{{ route('actualite.show', $actu->id) }}">{{$actu->titre}}</a></div>
								<div class="post-info">{{$actu->date_de_publication}}</div>
								@endforeach
							</article>
							
	
							
							
						</div>
						
						<!--Archive Widget-->
                        <!-- <div class="sidebar-widget sidebar-blog-category archive-widget">
                            <div class="sidebar-title-two">
                                <h4>Archives</h4>
                            </div>
                            <ul class="blog-cat-two">
                                <li><a href="#">January 2019 <span>(3)</span></a></li>
                                <li><a href="#">February 2019 <span>(2)</span></a></li>
                                <li><a href="#">May 2019 <span>(6)</span></a></li>
                            </ul>
                        </div> -->
						
						<!--Gallery Widget-->
                       <!--  <div class="sidebar-widget instagram-widget">
                            <div class="sidebar-title-two">
                                <h4>Gallery</h4>
                            </div>
							<div class="images-outer clearfix">
                                
                                <figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
                                <img src="images/gallery/instagram-1.jpg" alt=""></figure>
                                
                                <figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
                                <img src="images/gallery/instagram-2.jpg" alt=""></figure>
                                
                                <figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
                                <img src="images/gallery/instagram-3.jpg" alt=""></figure>
                                
                                <figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
                                <img src="images/gallery/instagram-4.jpg" alt=""></figure>
                                
                                <figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
                                <img src="images/gallery/instagram-5.jpg" alt=""></figure>
                                
                                <figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
                                <img src="images/gallery/instagram-6.jpg" alt=""></figure>
                            </div>
						</div> -->
						
						<!-- Tags Widget-->
                        <!-- <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title-two">
                                <h4>Tags</h4>
                            </div>
							<a href="#">Apps</a>
							<a href="#">Cloud</a>
							<a href="#">Life style</a>
							<a href="#">Hosting</a>
							<a href="#">Business</a>
						</div> -->
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	<!--End Sidebar Page Container-->
	
	<!-- Subscribe Section -->
	<section class="subscribe-section style-two">
		<div class="container">
			<div class="inner-container" style="background-image: url(images/background/3.jpg)">
				<h2>Subscribe Your Email for Newsletter <br> & Promotion</h2>
				<!-- Subscribe Form -->
				<div class="subscribe-form">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="email" name="email" value="" placeholder="Email address.." required>
							<button type="submit" class="theme-btn subscribe-btn">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End Subscribe Section -->
	
	
@endsection