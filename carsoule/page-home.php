<?php
    /* Template Name: Newwill Home Page */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewWill Immigration</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/fonts/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/flags.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/css/finalCustom.css" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/finalCustom.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/dist/js/owl.carousel.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header-top dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-9">
                    <!-- header-top-first start -->
                    <!-- ================ -->
                    <div class="header-top-first clearfix">
                        <ul class="social-links circle small clearfix hidden-sm-down">
                            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li class="googleplus"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li class="facebook"><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                        <ul class="list-inline hidden-md-down">
                            <li class="list-inline-item"><i class="fas fa-map-marker-alt pr-1 pl-2"></i>Hyderabad, Telangana - 500081</li>
                            <li class="list-inline-item"><i class="fas fa-phone-volume pr-1 pl-2"></i>+12 123 123 123</li>
                            <li class="list-inline-item"><i class="far fa-envelope pr-1 pl-2"></i> info@newwill.in</li>
                        </ul>
                    </div>
                    <!-- header-top-first end -->
                </div>
                <div class="col-12 col-sm-6 col-lg-3">

                    <!-- header-top-second start -->
                    <!-- ================ -->
                    <div id="header-top-second" class="clearfix">

                        <!-- header top dropdowns start -->
                        <!-- ================ -->
                        <div class="header-top-dropdown text-right">
                            <div class="btn-group">
                                <a href="page-signup.html" class="btn btn-default btn-sm text-white bg-dark"><i class="fa fa-user pr-2"></i> Customer Login</a>
                            </div>
                        </div>
                        <!--  header top dropdowns end -->
                    </div>
                    <!-- header-top-second end -->
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 h-25 text-center">
            <a href="<?php bloginfo('url');?>" class="nav navbar-brand pt-2">
                <h1 class="my-0 text-dark text-uppercase" style="line-height: 30px;">NeW<span class="text-danger">Will</span></h1>
                <small class="text-dark text-uppercase m-0 font-weight-bold" style="letter-spacing: 7px;padding-left: 10px;">immigration</small>
            </a>
        </div>
        <div class="offset-xl-6 offset-lg-6 offset-md-4">
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 py-4">
            <a href="#" class="btn btn-sm btn-dark text-white font-weight-bold float-right">Ask To Expert</a>
            <a href="#" class="btn btn-sm btn-danger text-white font-weight-bold float-right mr-2">Schedule An Appointment</a>
        </div>
    </div>
    <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
	<div class="header-search"><?php get_search_form();?></div>
    <div class="row mx-0 position-relative">
        <div class="home-slider">
			<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/dist/images/canada-slider-1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Deserunt nisi est ut ullamco aliqua laboris eiusmod ut veniam incididunt officia dolor.</h5>
                            <a href="#" class="btn btn-sm btn-dark">Know more</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/images/australia-slider-2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Deserunt nisi est ut ullamco aliqua laboris eiusmod ut veniam incididunt officia dolor.</h5>
                            <a href="#" class="btn btn-sm btn-dark">Know more</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/images/hongkong-slider-3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Deserunt nisi est ut ullamco aliqua laboris eiusmod ut veniam incididunt officia dolor.</h5>
                            <a href="#" class="btn btn-sm btn-dark">Know more</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="home-form w-100 h-100">
			<div class="form-inner">
                <form action="">
                    <h2 class="text-uppercase text-white text-center">Quick Enquiry Form</h2>
                    <div class="form-fields mt-4">
                        <div>
                            <span class="errName enq-error" style="display:none;color:red;font-weight:bold;font-style:italic;"></span>
                            <input id="name" type="text" name="name" placeholder="Your Name" style="height: 32px;" />
                        </div>
                        <div>
                            <span class="errEmail enq-error" style="display:none;color:red;font-weight:bold;font-style:italic;"></span>
                            <input id="email" type="text" name="email" placeholder="Your Email ID" style="height: 32px;"  />
                        </div>
                        <span class="errPhone enq-error" style="display:none;color:red;font-weight:bold;font-style:italic;"></span>
                        <div class="row mx-0">
                            <input id="phoneCode" type="text" name="phoneCode" value="+91" class="w-25 rounded-right" style="height: 32px;" />
                            <input id="phone" type="text" name="phone" placeholder="Your Contact" class="w-75 rounded-left" style="height: 32px;" />
                        </div>
                        <select name="interestedCountry" id="interestedCountry" style="height: 32px;">
                            <option value="">-- Select Preferred Country --</option>
                            <option value="canada">Canada</option>
                            <option value="australia">Australia</option>
                        </select>
                        <div>
                            <textarea id="message" type="text" name="message" placeholder="Your Message to us"rows="3" placeholder="Your Message to us.." style="height: 60px;" class="mb-1 rounded"></textarea>
                        </div>
                        <div>
                            <input id="checkUpdates" type="checkbox" name="checkUpdates" checked/>
                            <span class="text-dark bg-light">Sint consectetur ut sint ex cupidatat.</span>
                        </div>    
                        <input type="submit" id="form_submit" name="submitHome" value="Submit" class="d-block mx-auto border-0 mt-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
		<div class="row mx-0 my-3 counter-row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="bg-light border-bottom border-danger shadow counter">
                    <h1 class="text-center text-danger font-weight-bold my-2 timer count-title count-number" data-to="012345" data-speed="1000"></h1>
                    <div class="text-center mb-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/trophy.png" alt=""><span class="text-uppercase ml-1">Councelling</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="bg-light border-bottom border-danger shadow counter">
                    <h1 class="text-center text-danger font-weight-bold my-2 timer count-title count-number" data-to="615454" data-speed="1000"></h1>
                    <div class="text-center mb-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/portfolio.png" alt=""> <span class="text-uppercase ml-1">Application</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="bg-light border-bottom border-danger shadow counter">
                    <h1 class="text-center text-danger font-weight-bold my-2 timer count-title count-number" data-to="9154" data-speed="1000"></h1>
                    <div class="text-center mb-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/quality.png" alt=""> <span class="text-uppercase ml-1">Happy Clients</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="bg-light border-bottom border-danger shadow counter">
                    <h1 class="text-center text-danger font-weight-bold my-2 timer count-title count-number" data-to="81541" data-speed="1000"></h1>
                    <div class="text-center mb-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/browser.png" alt=""> <span class="text-uppercase ml-1">Payments Done</span>
                    </div>
                </div>
            </div>
        </div>
		<div class="service-section mt-5 mb-5">
            <div class="row form-group">
                <div class="col-sm-12 col-xs-12 service-col">
                    <h3><span class="text-danger">Countries Offered</span></h3>
				</div>
			</div>
			
			<ul id="flexiselDemo3" class="carousel-tabs">
				<li onclick="activePanel('canada');"><img src="http://demo.kodersnkreators.com/wp-content/uploads/2018/04/canada_img-250x180.jpg" /></li>
				<li onclick="activePanel('australia');"><img src="http://demo.kodersnkreators.com/wp-content/uploads/2018/04/australia_img-250x180.jpg" /></li>
				<li onclick="activePanel('germany');"><img src="http://demo.kodersnkreators.com/wp-content/uploads/2018/04/germany-image.jpg" /></li>
				<!--<li onclick="activePanel('canada');"><img src="http://demo.kodersnkreators.com/wp-content/uploads/2018/04/canada_img-250x180.jpg" /></li>
				<li onclick="activePanel('australia');" ><img src="http://demo.kodersnkreators.com/wp-content/uploads/2018/04/australia_img-250x180.jpg" /></li>
				<li onclick="activePanel('germany');" ><img src="http://demo.kodersnkreators.com/wp-content/uploads/2018/04/germany-image.jpg" /></li>-->
			</ul>  
			<div class="tab-content coutry-tab-panels">
				<div class="tab-pane active" style="min-height:300px;" id="canada" style="display:block;">
					<div class="row">
						<div class="form-group col-sm-5 col-xs-12 country-corousel-panel">   
							<h2>Profile</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>
						<div class="form-group col-sm-7 col-xs-12">       
							<div class="row">
								<div class="col-sm-12 col-xs-12" style="height:200px;"> 
								</div>
								<div class="col-sm-12 col-xs-12"> 
									<h2>Profile</h2>
									<p>ajdgshflaksjflaksbdfljabsdcjagscgfakjshgd fkjahg s gfakjshgcfkjah gskjdgfakshgdfkjagsd</p>
									
									<div class="row country-product-list">
										<div class="col-sm-4 col-xs-12"> First </div>
										<div class="col-sm-4 col-xs-12"> Second </div>
										<div class="col-sm-4 col-xs-12"> Third </div>
										<div class="col-sm-4 col-xs-12"> Fourth </div>
										<div class="col-sm-4 col-xs-12"> Fifth </div>
										<div class="col-sm-4 col-xs-12"> Sixth </div>
									</div>
									<div class="row">
										<button type="button" class="btn btn-sm btn-dark">Check Eligibilty</button>
										<button type="button" class="btn btn-sm btn-dark">Check Expert</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" style="min-height:300px;" id="australia" style="display:none;">
					<div class="row">
						<div class="col-sm-5 col-xs-12 country-corousel-panel">   
							<h2>Buzz</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>
						<div class="col-sm-7 col-xs-12">       
							<div class="row">
								<div class="col-sm-12 col-xs-12" style="height:200px;"> 
								</div>
								<div class="col-sm-12 col-xs-12"> 
									<h2>Buzz</h2>
									<p>ajdgshflaksjflaksbdfljabsdcjagscgfakjshgd fkjahg s gfakjshgcfkjah gskjdgfakshgdfkjagsd</p>
									
									<div class="row country-product-list">
										<div class="col-sm-4 col-xs-12"> First </div>
										<div class="col-sm-4 col-xs-12"> Second </div>
										<div class="col-sm-4 col-xs-12"> Third </div>
										<div class="col-sm-4 col-xs-12"> Fourth </div>
										<div class="col-sm-4 col-xs-12"> Fifth </div>
										<div class="col-sm-4 col-xs-12"> Sixth </div>
									</div>
									<div class="row">
										<button type="button" class="btn btn-sm btn-dark">Check Eligibilty</button>
										<button type="button" class="btn btn-sm btn-dark">Check Expert</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" style="min-height:300px;" id="germany" style="display:none;">
					<div class="row">
						<div class="col-sm-5 col-xs-12 country-corousel-panel">   
							<h2>Reference</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>
						<div class="col-sm-7 col-xs-12">       
							<div class="row">
								<div class="col-sm-12 col-xs-12" style="height:200px;"> 
								</div>
								<div class="col-sm-12 col-xs-12"> 
									<h2>Reference</h2>
									<p>ajdgshflaksjflaksbdfljabsdcjagscgfakjshgd fkjahg s gfakjshgcfkjah gskjdgfakshgdfkjagsd</p>
									
									<div class="row country-product-list">
										<div class="col-sm-4 col-xs-12"> First </div>
										<div class="col-sm-4 col-xs-12"> Second </div>
										<div class="col-sm-4 col-xs-12"> Third </div>
										<div class="col-sm-4 col-xs-12"> Fourth </div>
										<div class="col-sm-4 col-xs-12"> Fifth </div>
										<div class="col-sm-4 col-xs-12"> Sixth </div>
									</div>
									<div class="row">
										<button type="button" class="btn btn-sm btn-dark">Check Eligibilty</button>
										<button type="button" class="btn btn-sm btn-dark">Check Expert</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
		
        <!--<div class="mt-5 mb-4">
            <h3 class="m-0 heading-txt position-relative text-danger">Country Offer</h3>
        </div>
        <div class="country-section" style="height: 500px;"></div>-->
		<div class="service-section mt-5 mb-5" style="clear:both;">
            <div class="row mx-0 shadow">
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12 service-col bg-light">
                    <div class="mt-4 mb-4">
                        <h3 class="m-0 heading-txt position-relative">Our <span class="text-danger">Services</span></h3>
                    </div>
                    <div class="row mx-0">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 service-box mb-4">
                            <p class="my-0"><span class="mr-1">1</span> Perment Residency Visa</p>
                            <p class="my-0 pl-4">Voluptate mollit velit consectetur mollit ex ad in elit. Nostrud deserunt magna commodo irure.</p>
                            <a href="<?php bloginfo('url');?>/about/" class="btn btn-dark ml-4">Know More</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 service-box mb-4">
                            <p class="my-0"><span class="mr-1">2</span> Work Visa</p>
                            <p class="my-0 pl-4">Voluptate mollit velit consectetur mollit ex ad in elit. Nostrud deserunt magna commodo irure.</p>
                            <a href="<?php bloginfo('url');?>/about/" class="btn btn-dark ml-4">Know More</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 service-box mb-4">
                            <p class="my-0"><span class="mr-1">3</span> Visit Visa</p>
                            <p class="my-0 pl-4">Voluptate mollit velit consectetur mollit ex ad in elit. Nostrud deserunt magna commodo irure.</p>
                            <a href="<?php bloginfo('url');?>/about/" class="btn btn-dark ml-4">Know More</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 service-box mb-4">
                            <p class="my-0"><span class="mr-1">4</span> Study Visa</p>
                            <p class="my-0 pl-4">Voluptate mollit velit consectetur mollit ex ad in elit. Nostrud deserunt magna commodo irure.</p>
                            <a href="<?php bloginfo('url');?>/about/" class="btn btn-dark ml-4">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-4 col-sm-12 col-12 service-img">
                </div>
            </div>
        </div>
        <div class="testimonials-section">
            <div class="mt-5 mb-4">
                <h3 class="m-0 heading-txt position-relative text-center">Our <span class="text-danger">Client</span> Say About Us:</h3>
            </div>
            <p>In fugiat cupidatat aliquip ex culpa et cillum laborum.Magna aliqua cupidatat laboris ex ad et aliqua elit ullamco quis.</p>
            <div class="testi-section mt-4 mb-3">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="clnt-div">
                            <div class="shadow bg-light rounded row mx-0">
                                <div class="col-xl-4 cl-lg-4 col-md-4 col-sm-12 col-12 clnt-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/client-1.png" alt="Sunil Kumar" class="rounded-circle shadow ">
                                    <span class="position-absolute h-100 w-25 bg-danger"></span>
                                </div>
                                <div class="col-xl-8 cl-lg-8 col-md-8 col-sm-12 col-12 clnt-img py-2">
                                    <h5 class="text-danger mb-1">Mr. Sunil Kumar</h5>
                                    <p class="mb-1 font-weight-normal text-dark"><span class="flag flag-ca"></span> Canada, PR Visa</p>
                                    <ul class="list-inline list-unstyled mb-1">
                                        <li class="list-inline-item text-warning mr-0"><small><i class="fas fa-star"></i></small></li>
                                        <li class="list-inline-item text-warning mr-0"><small><i class="fas fa-star"></i></small></li>
                                        <li class="list-inline-item text-warning mr-0"><small><i class="fas fa-star"></i></small></li>
                                        <li class="list-inline-item text-warning mr-0"><small><i class="fas fa-star"></i></small></li>
                                        <li class="list-inline-item text-warning mr-0"><small><i class="fas fa-star-half-alt"></i></small></li>
                                    </ul>
                                    <p class="mb-1">Eu nisi consequat tempor irure nisi sint dolore. Eiusmod minim incididunt exercitation consequat pariatur enim aliqua. Labore ullamco dolor duis ea dolor consectetur proident. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clnt-div">
                            <div class="shadow bg-light rounded row mx-0">
                                <div class="col-xl-4 cl-lg-4 col-md-4 col-sm-12 col-12 clnt-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/client-2.jpg" alt="Sunil Kumar" class="rounded-circle shadow ">
                                    <span class="position-absolute h-100 w-25 bg-primary"></span>
                                </div>
                                <div class="col-xl-8 cl-lg-8 col-md-8 col-sm-12 col-12 clnt-img py-2">
                                    <h5 class="text-danger mb-1">Mrs. Priya Sharma</h5>
                                    <p class="mb-1 font-weight-normal text-dark"><span class="flag flag-au"></span> Australia, PR Visa</p>
                                    <ul class="list-inline list-unstyled mb-1">
                                        <li class="list-inline-item text-warning mr-0"><small><i class="fas fa-star"></i></small></li>
                                        <li class="list-inline-item text-warning mr-0"><small><i class="fas fa-star"></i></small></li>
                                        <li class="list-inline-item text-warning mr-0"><small><i class="fas fa-star"></i></small></li>
                                        <li class="list-inline-item text-warning mr-0"><small><i class="fas fa-star-half-alt"></i></small></li>
                                        <li class="list-inline-item text-warning mr-0"><small><i class="far fa-star"></i></small></li>
                                    </ul>
                                    <p class="mb-1">Eu nisi consequat tempor irure nisi sint dolore. Eiusmod minim incididunt exercitation consequat pariatur enim aliqua. Labore ullamco dolor duis ea dolor consectetur proident. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="media-section">
            <div class="mt-3 mb-4">
                <h3 class="m-0 heading-txt position-relative text-center">Our <span class="text-danger">Our Media</span> Section:</h3>
            </div>
            <div class="media-row row mx-0">
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 py-0 pl-0 pr-0 featcard">
                            <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
									<?php
										$active = 'active';
										$query = new WP_Query("post_type=immigration_news&posts_per_page=-1"); //
										if($query->have_posts()){
											while($query->have_posts()){
												$query->the_post();
												//echo '<div class="news-feed div-ht">
												//		<h5>'.get_the_title().'</h5>
												//		<span>'.get_the_time( get_option( "date_format" ) ).'</span>
												//		<p>'.strip_tags(content("15")).'<span><a href="'.get_the_permalink().'">Read More</a></span></p>
												//	  </div>'; 
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), "fpblog");	
									?>
										<div class="carousel-item <?php echo $active; $active='';?>">
											<div class="card bg-dark text-white">
												<img class="card-img img-fluid" src="<?php echo $image[0];?>" alt="">
												<div class="card-img-overlay d-flex linkfeat">
													<a href="<?php echo get_the_permalink();?>" class="align-self-end">
														<span class="badge">Ekspor</span>
														<h4 class="card-title"><?php echo get_the_title(); ?></h4>
														<p class="textfeat" style="display: none;"><?php echo strip_tags(content("15"));?></p>
													</a>
												</div>
											</div>
										</div>
									<?php
											}
											wp_reset_query();
											wp_reset_postdata();
										}
										
									?>
                                    <!--<div class="carousel-item active">
                                        <div class="card bg-dark text-white">
                                            <img class="card-img img-fluid" src="http://admin.gerbong.id/media/post_img_sm/review-gsp-amerika-ingin-perdagangan-yang-adil-dan-saling-menguntungkan-1531307731.jpg" alt="">
                                            <div class="card-img-overlay d-flex linkfeat">
                                                <a href="http://gerbong.id/review-gsp-amerika-ingin-perdagangan-saling-menguntungkan" class="align-self-end">
                                                    <span class="badge">Ekspor</span>
                                                    <h4 class="card-title">Review GSP: Amerika Ingin Perdagangan Saling Menguntungkan</h4>
                                                    <p class="textfeat" style="display: none;">Gerbong.id – Duta Besar Amerika Serikat untuk Indonesia Joseph R. Donovan menegaskan, langkah pemerintah Amerika Serikat meninjau ulang pemberian Generalized System od Preferenes (GSP) akan menguntungkan
                                                        kedua belah pihak. Menurut Donovan,</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card bg-dark text-white">
                                            <img class="card-img img-fluid" src="http://admin.gerbong.id/media/post_img_sm/dpr-setujui-penambahan-anggaran-bp-batam-rp565-miliar-1531258457.jpeg" alt="">
                                            <div class="card-img-overlay d-flex linkfeat">
                                                <a href="http://gerbong.id/dpr-setujui-penambahan-anggaran-bp-batam-rp565-miliar" class="align-self-end">
                                                    <span class="badge">Pertumbuhan Ekonomi</span>
                                                    <h4 class="card-title">DPR Setujui Penambahan Anggaran BP Batam Rp565 Miliar</h4>
                                                    <p class="textfeat" style="display: none;">Gerbong.id - Dewan Perwakilan Rakyat (DPR) menyetujui penambahan anggaran Badan Pengusahaan (BP) Batam Rp565 miliar. Dengan penambahan anggaran di tahun 2019 tersebut diharapkan dapat mendorong percepatan
                                                        pembangunan Kota Batam. Anggota Komisi</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card bg-dark text-white">
                                            <img class="card-img img-fluid" src="http://admin.gerbong.id/media/post_img_sm/btn-targetkan-seribu-nasabah-valas-di-batam-1531227805.jpeg" alt="">
                                            <div class="card-img-overlay d-flex linkfeat">
                                                <a href="http://gerbong.id/btn-targetkan-seribu-nasabah-valas-di-batam" class="align-self-end">
                                                    <span class="badge">Perbankan</span>
                                                    <h4 class="card-title">BTN Targetkan Seribu Nasabah Valas di Batam</h4>
                                                    <p class="textfeat" style="display: none;">Gerbong.id - Bank Tabungan Negara (Persero) resmi merilis tabungan valuta asing (valas) di Batam. Sebagai daerah yang berbatasan langsung dengan Singapura dan sebagai pintu gerbang wisatawan mancanegara
                                                        (wisman), transaksi valas</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card bg-dark text-white">
                                            <img class="card-img img-fluid" src="http://admin.gerbong.id/media/post_img_sm/sistem-oss-resmi-diluncurkan-1531225964.jpg" alt="">
                                            <div class="card-img-overlay d-flex linkfeat">
                                                <a href="http://gerbong.id/sistem-oss-resmi-diluncurkan" class="align-self-end">
                                                    <span class="badge">Industri</span>
                                                    <h4 class="card-title">Sistem OSS Resmi Diluncurkan</h4>
                                                    <p class="textfeat" style="display: none;">Gerbong.id - Menteri Koordinator Bidang Perekonomian Darmin Nasution bersama dengan para menteri dan kepala lembaga terkait meresmikan penerapan Sistem Online Single Submission (OSS).  Layanan Perizinan
                                                        Berusaha Terintegrasi Secara Elektronik (PBTSE), yang</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card bg-dark text-white">
                                            <img class="card-img img-fluid" src="http://admin.gerbong.id/media/post_img_sm/grab-gandeng-samsung-telkomsel-dan-erafone-1531222875.JPG" alt="">
                                            <div class="card-img-overlay d-flex linkfeat">
                                                <a href="http://gerbong.id/grab-gandeng-samsung-telkomsel-dan-erafone" class="align-self-end">
                                                    <span class="badge">Nusantara</span>
                                                    <h4 class="card-title">Grab Gandeng Samsung, Telkomsel, dan Erafone</h4>
                                                    <p class="textfeat" style="display: none;">:: Luncurkan Program Ponsel Cerdas untuk Pengemudi Batam - Grab menjalin kemitraan strategis dengan tiga perusahaan terkemuka di Indonesia yaitu Telkomsel, Samsung, dan Erafone terkait program kepemilikan
                                                        ponsel cerdas khusus untuk</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card bg-dark text-white">
                                            <img class="card-img img-fluid" src="http://admin.gerbong.id/media/post_img_sm/paket-kebijakan-ekonomi-mempermudah-izin-investasi-1530819316.jpg" alt="">
                                            <div class="card-img-overlay d-flex linkfeat">
                                                <a href="http://gerbong.id/paket-kebijakan-ekonomi-mempermudah-izin-investasi" class="align-self-end">
                                                    <span class="badge">Finansial</span>
                                                    <h4 class="card-title">Paket Kebijakan Ekonomi Mempermudah Izin Investasi</h4>
                                                    <p class="textfeat" style="display: none;">Gerbong.id– Paket kebijakan ekonomi dinilai dapat memberikan kemudahan dalam pengurusan perizinan berinvestasi dan memberikan efek yang cukup signifikan kepada investor. Ketua Umum Himpunan Kawasan Industri
                                                        (HKI) Sanny Iskandar menyatakan saat ini</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 py-0 px-1 d-none d-lg-block">
                            <div class="row">
                                <div class="col-12 pb-2">
                                    <div class="card bg-dark text-white">
                                        <img class="card-img img-fluid" src="http://admin.gerbong.id/media/post_img_sm/bi-atur-standarisasi-qr-code-1529952479.jpg" alt="">
                                        <div class="card-img-overlay d-flex">
                                            <a href="http://gerbong.id/bi-atur-standarisasi-qr-code" class="align-self-end">
                                                <span class="badge">Finansial</span>
                                                <h6 class="card-title">BI Atur Standarisasi QR Code</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 pb-2">
                                    <div class="card bg-dark text-white">
                                        <img class="card-img img-fluid" src="http://admin.gerbong.id/media/post_img_sm/ptsp-bp-batam-masuk-10-terbaik-di-indonesia-1531400445.jpeg" alt="">
                                        <div class="card-img-overlay d-flex">
                                            <a href="http://gerbong.id/ptsp-bp-batam-masuk-10-terbaik-di-indonesia" class="align-self-end">
                                                <span class="badge">Industri</span>
                                                <h6 class="card-title">PTSP BP Batam Masuk 10 Terbaik di Indonesia</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <iframe width="100%" height="278px" src="https://www.youtube.com/embed/d8nySRk1rkk?rel=0" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-1" style="background: #383838">
            <div class="container">
                <div class="row mx-0 mt-3 pt-4">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="about-us">
                            <h5 class="text-white text-left border-bottom border-danger pb-2">About <span class="text-danger">NewWill</span></h5>
                            <p style="font-size: 12px;color: #f0f0f0;text-align: justify;">Amet deserunt amet adipisicing officia incididunt reprehenderit est enim quis tempor ipsum esse. Consectetur sit cupidatat sint consectetur consectetur excepteur ut est cillum pariatur. Sit est Lorem do ut sit laborum aliquip
                                consectetur in non nisi nostrud exercitation consectetur.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="immi-links">
                            <h5 class="text-white text-left border-bottom border-danger pb-2">Immigration Links</h5>
                            <ul class="list-group list-group-flush chervon-list">
                                <li class="list-group-item bg-transparent py-1 border-top-0"><a class="text-white" href="<?php bloginfo('url');?>/services/immigration-to-canada/">Canada Immigration</a></li>
                                <li class="list-group-item bg-transparent py-1"><a class="text-white" href="<?php bloginfo('url');?>/services/immigration-to-australia/">Australia Immigration</a></li>
                                <li class="list-group-item bg-transparent py-1"><a class="text-white" href="<?php bloginfo('url');?>/services/immigration-to-hong-kong/">Hong Kong Immigration</a></li>
                                <li class="list-group-item bg-transparent py-1"><a class="text-white" href="<?php bloginfo('url');?>/services/immigration-to-usa/">USA Immigration</a></li>
                                <li class="list-group-item bg-transparent py-1"><a class="text-white" href="#">UK Immigration</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="imp-links">
                            <h5 class="text-white text-left border-bottom border-danger pb-2">Important Links</h5>
                            <ul class="list-group list-group-flush chervon-list">
                                <li class="list-group-item bg-transparent py-1 border-top-0"><a class="text-white" href="<?php bloginfo('url');?>/services/">Services</a></li>
                                <li class="list-group-item bg-transparent py-1"><a class="text-white" href="#">Products</a></li>
                                <li class="list-group-item bg-transparent py-1"><a class="text-white" href="#">Blogs</a></li>
                                <li class="list-group-item bg-transparent py-1"><a class="text-white" href="<?php bloginfo('url');?>/contact/">Conact Us</a></li>
                                <li class="list-group-item bg-transparent py-1"><a class="text-white" href="<?php bloginfo('url');?>/portfolio/">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <h5 class="text-white border-bottom border-danger pb-2">Subscribe Us</h5>
                        <small class="m-0 text-white text-muted">Ullamco magna cillum do veniam labore irure incididunt officia</small>
                        <form action="">
                            <div class="row mx-0 mt-2">
                                <div class="col-10 px-0">
                                    <input type="text" placeholder="Your Email Id" class="w-100 border-0 rounded-left px-2 py-1">
                                </div>
                                <div class="col-2 px-0">
                                    <button class="border-0 bg-danger text-white px-3 py-1 rounded-right"><i class="far fa-envelope"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="follow-us mt-4">
                            <h5 class="text-white border-bottom border-danger mb-0 pb-2">Follow Us:</h5>
                            <ul class="list-unstyled list-inline mt-2">
                                <li class="list-inline-item mr-0">
                                    <a class="text-white px-2 py-1" href="#"><i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="text-white px-2 py-1" href="#"><i class="fab fa-twitter-square"></i></a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="text-white px-2 py-1" href="#"><i class="fab fa-pinterest-square"></i></a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="text-white px-2 py-1" href="#"><i class="fab fa-google-plus-square"></i></a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="text-white px-2 py-1" href="#"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-2" style="background: #2a2a2a;">
            <div class="container">
                <div class="row mx-0 brand-row">
                    <p class="text-white my-2"><i class="fas fa-copyright"></i> All Right Reversed - 2018</p>
                </div>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
    <!--Start JS-->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.1.1.min.js">-->
	<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	
	<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/jquery.flexisel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/bootstrap.min.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/custom.js"></script>
	<!--<script src="<?php echo get_template_directory_uri(); ?>/dist/js/finalCustom1.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/formValidation.js"></script>
	
    <script>
        $('.carousel').carousel();
    </script>
	<script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                items: 2,
                margin: 20,
                autoplay: true,
                mouseDrag: true,
                touchDrag: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true,
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        margin: 20
                    }
                }
            })
        })
		/*============ Carousels =======*/
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();

			$("#flexiselDemo2").flexisel({
				visibleItems: 5,
				itemsToScroll: 1,
				animationSpeed: 200,
				infinite: true,
				scrollType:"testi",
				navigationTargetSelector: null,
				autoPlay: {
					enable: true,
					interval: 5000,
					pauseOnHover: true
				},
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1,
						itemsToScroll: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2,
						itemsToScroll: 1
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3,
						itemsToScroll: 1
					}
				},
			});
			
			$("#flexiselDemo3").flexisel({
				visibleItems: 3,
				itemsToScroll: 1, 
				scrollType:"country",				
				autoPlay: {
					enable: true,
					interval: 5000,
					pauseOnHover: true
				}     
			});
			
			$("#flexiselDemo4").flexisel({
				infinite: false     
			});  
		});
		
		/*===== Carousel buttons ======= */
		$("#CountryLeft").click(function(){
			$(".country-Left").click();
		});
		$("#CountryRight").click(function(){
			$(".country-Right").click();
		});
		
		$("#TestiLeft").click(function(){
			$(".testi-Left").click();
		});
		$("#TestiRight").click(function(){
			$(".testi-Right").click();
		});		
		/*===== Carousel buttons ======= */
    </script>
    <script>
        $(document).ready(function() {
            $(".linkfeat").hover(
                function() {
                    $(".textfeat").show(500);
                },
                function() {
                    $(".textfeat").hide(500);
                }
            );
        });
		function activePanel(key) {
			$('div.coutry-tab-panels>div').css("display","none");
			$("#"+key).css("display","block");
		}
    </script>
</body>

</html>