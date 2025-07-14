<header class="main-header header-style-two">
    	
		<!--Header-Upper-->
		<div class="header-upper">
            <div class="outer-container">
                <div class="clearfix">

                    <!-- Logo Box -->
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="index.html"><img src="{{asset('images/logoheader.png')}}" alt="" title=""></a></div>
                    </div>

                    <!-- Phone Number -->
                    <div class="phone-number"><span class="icon flaticon-phone-call"></span>(+226) 25 33 03 09</div>

                    <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('accueil') }}">Accueil</a>
                                        <!-- <ul>
                                            <li><a href="index.html">Home Page 01</a></li>
                                            <li><a href="index-2.html">Home Page 02</a></li>
                                        </ul> -->
                                    </li>
                                      <li class="dropdown"><a href="#">COGEF</a>
                                        <ul>
                                            <li><a href="{{ route('cogef') }}">La COGEF</a></li>
                                            <li><a href="#">Le mot du président</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('actualités') }}">Actualités</a>
                                        <!--<ul>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href="{{ route('services') }}">Services</a>
                                        <!-- <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="services-detail.html">Services Detail</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="{{ route('publicités') }}">Publications</a>
                                        <!-- <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="services-detail.html">Services Detail</a></li>
                                        </ul> -->
                                    </li>
                                    <li ><a href="{{route('projets')}}">Projets</a>
                                        <ul>
                                            <li class="dropdown"><a href="services.html">PAFPA</a>
                                                <ul>
                                                    <li><a href="#">Le PAFPA</a></li>
                                                    <li><a href="#">Actualités PAFPA</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">PACAJEF</a></li>
                                            <li><a href="#">RIPAQUE</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="dropdown"><a href="#">A propos</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                        </ul>
                                    </li> -->
                                   
                                    <li><a href="{{route('adhésion')}}">Adhésion</a>

                                        <!-- <ul>
                                            <li><a href="portfolio-2-column.html">Portfolio Two Column</a></li>
                                            <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                            <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                        </ul> -->
                                    </li>
                                    
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>

                        </nav>

                        <div class="outer-box">

                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu1">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Recherche" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
		</div>
		<!--End Header Upper-->

		<!--Sticky Header-->
		<div class="sticky-header">
            <div class="container clearfix">
            <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="{{asset('images/logoheader.png')}}" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('accueil') }}">Accueil</a>
                                        <!-- <ul>
                                            <li><a href="index.html">Home Page 01</a></li>
                                            <li><a href="index-2.html">Home Page 02</a></li>
                                        </ul> -->
                                    </li>
                                      <li class="dropdown"><a href="#">COGEF</a>
                                        <ul>
                                            <li><a href="{{ route('cogef') }}">La COGEF</a></li>
                                            <li><a href="#">Le mot du président</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('actualités') }}">Actualités</a>
                                        <!--<ul>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href="{{ route('services') }}">Services</a>
                                        <!-- <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="services-detail.html">Services Detail</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="{{ route('publicités') }}">Publications</a>
                                        <!-- <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="services-detail.html">Services Detail</a></li>
                                        </ul> -->
                                    </li>
                                    <li ><a href="{{route('projets')}}">Projets</a>
                                        <ul>
                                            <li class="dropdown"><a href="#">PAFPA</a>
                                                <ul>
                                                    <li><a href="#">Le PAFPA</a></li>
                                                    <li><a href="#">Actualités PAFPA</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">PACAJEF</a></li>
                                            <li><a href="#">RIPAQUE</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="dropdown"><a href="#">A propos</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                        </ul>
                                    </li> -->
                                   
                                    <li ><a href="{{route('adhésion')}}">Adhésion</a>
                                        <!-- <ul>
                                            <li><a href="portfolio-2-column.html">Portfolio Two Column</a></li>
                                            <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                            <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                        </ul> -->
                                    </li>
                                    
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
		</div>
		<!--End Sticky Header-->
		
</header>