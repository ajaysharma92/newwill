<?php
    /* Template Name: Newwill Contact Page */
	$pageUrl = get_the_permalink();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewWill Immigration | Contact Us</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/fonts/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/flags.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/webfonts.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/css/finalCustom.css" />
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/finalCustom.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/dist/js/textarea-count.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/owl.carousel.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="float-social-icons" class="wrapper">
        <ul>
            <li class="facebook">
                <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i>
                <div class="slider">
                    <p>Facebook<br/><i class="fas fa-thumbs-up"></i> 998K</p>
                </div></a>
            </li>
            <li class="twitter">
                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>
                <div class="slider">
                    <p>Twitter<br/><i class="fas fa-thumbs-up"></i> 998K</p>
                </div></a>
            </li>
            <li class="google">
                <a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i>
                    <div class="slider">
                        <p>Google plus<br/><i class="fas fa-thumbs-up"></i> 998K</p>
                    </div></a>
            </li>
            <li class="linkedin">
                <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i>
                <div class="slider">
                    <p>Linked IN<br/><i class="fas fa-thumbs-up"></i> 998K</p>
                </div></a>
            </li>            
        </ul>
    </div>
	<a href="javascript:void(0);" onclick="openEligibilityForm();" class="float-ask-expert"><img src="http://newwill.in/wp-content/uploads/2018/08/check-elig.png" alt="Ask An Expert"></a>
	<div class="container">
	    <div class="row mx-0">
		    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 h-25 text-left px-0">
                <a href="<?php bloginfo('url');?>" class="nav navbar-brand pt-2">
                    <div class="row mx-0" style="max-width: 100%;">
                        <div class="" style="width: 37%;">
                            <img src="http://newwill.in/wp-content/uploads/2018/08/newwill-final2.png" alt="NewWill Immigration" style="margin-right: 0px;width:80px;margin-left:10px;">
                        </div>
                        <div class="pt-1" style="width:63%">
                            <h1 class="my-0 text-dark text-uppercase" style="line-height: 35px;">eW<span class="text-danger">Will</span></h1>
                            <small class="text-dark text-uppercase m-0 font-weight-bold" style="letter-spacing: 4px;">immigration</small>
                        </div>
                    </div>
                </a>
            </div>
        <div class="offset-xl-2 offset-lg-2 offset-md-2">
    </div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pt-2">
        <a href="tel:0123456789" class="expert-call float-right">
            <p>Call to Experts:<br/><span><i class="fas fa-phone-volume"></i> 040-668888466</span><br/><span><i class="fas fa-mobile-alt"></i> +91 8008009034</span></p>
        </a>
        <a href="#" class="float-right mr-3">
            <img src="http://newwill.in/wp-content/uploads/2018/08/appointe.png" alt="Ask An Expert">
        </a>
    </div>
		</div>
    <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
    <div class="row mx-0">
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12 pl-0 pr-3 country-page">
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </nav>
                <div class="row mx-0">
                    <div class="col-12 px-0">
                        <!--<div class="float-left position-relative mr-3 mb-3">
                            <h5 class="position-absolute mt-4 ml-3 text-uppercase text-white">Canada <br/>Immigration</h5>
                            <img src="<php echo get_template_directory_uri(); ?>/dist/images/canada-country.png" alt="Canada Immigration" class="img-thumbnail">
                        </div>-->
                        <?php echo get_field('nw_overview'); ?>
                        <?php echo get_field('nw_why_country'); ?>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col-12 px-0">
                        <?php echo get_field('nw_country_immigration'); ?>
						<?php echo get_field('nw_country_benefits'); ?>
                        <?php echo get_field('nw_about_country'); ?>
						<h5 class="text-danger tex"><u>NewWill Immigration Process:</u></h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/benefits-icons/our-process.png" alt="NewWill Immigration Process" class="img-fluid my-4">
                        <?php echo get_field('nw_country_service_provide'); ?>
						 
                    </div>
                </div>
                <div class="row mx-0 country-cta-btn mt-3 mb-2">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <p><a href="#"><i class="fas fa-tasks"></i> Check Eligibility</a></p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 px-0">
                        <p><a href="#" class="px-2"><i class="fas fa-headset"></i> Schedule an Appointment</a></p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <p><a href="#"><i class="fas fa-user-tie"></i> Ask an Expert</a></p>
                    </div>
                </div>
                <hr>
                <?php echo get_field('nw_other_products'); ?>
				
                <hr>
                <div class="row mx-0">
                    <div class="col-12 px-2 clnt-quato">
                        <div class="clnt-cmmt bg-light shadow p-3 position-relative">
                            <p class="m-0 p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <p class="m-0 p-0 text-right font-italic text-danger font-weight-bold">-Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-9 col-md-4 col-sm-12 col-12 px-2 py-3 aside-widget-section">
				<div class="card p-0 mb-3 shadow-sm">
                    <div class="card-head bg-dark p-2 rounded-top">
                        <h6 class="m-0 text-white font-weight-bold text-center">Offer of the Week</h6>
                    </div>
                    <img src="http://newwill.in/newwill-images/study-offer.jpg" alt="Canada Study Visa" class="img-thumbnail img-fluid">
                    <div class="card-footer p-2">
                        <h6 class="mb-0"><span class="flag flag-ca mr-1"></span> Canada Study Visa</h6>
                        <small class="text-danger font-italic mt-2">Till 04-Sep-2018</small>
                    </div>
                </div>
				<div class="card p-2 shadow-sm bg-light mb-3">
                    <div class="card-head">
                        <h6 class="font-weight-bold text-danger heading-txt mb-2 position-relative pb-2">Quick Enquiry Form</h6>
                    </div>
                    <div class="card-body px-0 pb-1 pt-2">
                        <form action="">
                            <div class="form-group mb-3">
                                <!--<label for="formGroupExampleInput" class="text-danger mb-0"><small>Name:</small></label>-->
                                <input type="text" class="form-control px-2 py-0 border-top-0 border-left-0 border-right-0 rounded-0 shadow-sm height-30" id="formGroupExampleInput" placeholder="Your Name">
                            </div>
                            <div class="form-group mb-3">
                                <!--<label for="formGroupExampleInput2" class="text-danger mb-0"><small>Email ID:</small></label>-->
                                <input type="email" class="form-control px-2 py-0 border-top-0 border-left-0 border-right-0 rounded-0 shadow-sm height-30" id="formGroupExampleInput2" placeholder="Your Email ID">
                            </div>
                            <div class="form-row mx-0 mb-3">
                                <!--<label for="formGroupExampleInput3" class="text-danger mb-0 w-100"><small>Contact:</small></label>-->
                                <div class="col-4 p-0">
                                    <select class="custom-select py-0 px-1 mb-0 border-top-0 border-left-0 border-right-0 rounded-0 shadow-sm height-30" id="inlineFormCustomSelect1">
                                            <option selected>+91</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                </div>
                                <div class="col-8 p-0">
                                    <input type="text" class="form-control px-2 py-0 border-top-0 border-left-0 border-right-0 rounded-0 shadow-sm height-30" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <!--<label for="inlineFormCustomSelect2" class="text-danger mb-0"><small>Interested Country:</small></label>-->
                                <select class="custom-select py-0 px-2 mb-0 border-top-0 border-left-0 border-right-0 rounded-0 shadow-sm height-30" id="inlineFormCustomSelect2">
                                        <option selected>-- Choose Interested Country --</option>
                                        <option value="1">Canada</option>
                                        <option value="2">Australia</option>
                                        <option value="3">Hong Kong</option>
                                        <option value="4">Germany</option>
                                        <option value="5">Denmark</option>
                                        <option value="6">USA</option>
                                        <option value="7">Franche</option>
                                        </select>
                            </div>
                            <div class="form-group mb-3">
                                <!--<label for="exampleFormControlTextarea1" class="text-danger mb-0"><small>Message:</small></label>-->
                                <textarea class="form-control mb-0 border-top-0 border-left-0 border-right-0 rounded-0 shadow-sm" id="exampleFormControlTextarea1" rows="2" placeholder="Your Message"></textarea>
                            </div>
                            <div class="custom-control custom-checkbox my-2">
                                <input type="checkbox" class="custom-control-input" id="customControlInline" checked>
                                <label class="custom-control-label" for="customControlInline"><small>Update me latest offer & Newsletter</small></label>
                            </div>
                            <button class="btn btn-secondary py-0 px-4 mx-auto d-block height-30" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
				<div class="card p-0 shadow-sm mb-3">
                    <div class="card-head p-2 border bg-light">
                        <h5 class="mb-0 font-weight-bold">Top Products of 2018</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group">
                            <marquee class="marquee_code" behavior="scroll" direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">
                                <a href="#" class="list-group-item list-group-item-action py-2"><span class="flag flag-ca mr-1"></span> Cras justo odio</a>
                                <a href="#" class="list-group-item list-group-item-action py-2"><span class="flag flag-au mr-1"></span>Dapibus ac facilisis in</a>
                                <a href="#" class="list-group-item list-group-item-action py-2"><span class="flag flag-hk mr-1"></span>Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action py-2"><span class="flag flag-ca mr-1"></span>Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action py-2"><span class="flag flag-us mr-1"></span>Vestibulum at eros</a>
                                <a href="#" class="list-group-item list-group-item-action py-2"><span class="flag flag-ca mr-1"></span>Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action py-2"><span class="flag flag-ca mr-1"></span>Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action py-2"><span class="flag flag-ca mr-1"></span>Vestibulum at eros</a>
                            </marquee>
                        </div>
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
                            <p style="font-size: 12px;color: #f0f0f0;text-align: justify;">New will Immigration Services Pvt. Ltd is the booming immigration agency in India for redefining the significance of immigration.  We are the immigration consultants who have expanded their hands for providing quality visa services for Canada, Australia, Germany, Hong Kong and Norway countries. We are very well-known in the nation for providing trusted services with talented visa consultants.</p>
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
		</div>
	<button id="eligibility_popup" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="display:none;">
	  Launch demo modal
	</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-2">
                    <div class="row mx-0">
                        <div class="col-lg-12">
                            <form class="needs-validation" id="eligibility_form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" name="eligibiltyform" enctype="multipart/form-data">
                                <input type="hidden" name="pageUrl" value="<?php echo $pageUrl; ?>" />
                                <input type="hidden" name="action" value="eligibility_form" />
                                <div class="form-row">
                                    <div class="col-md-6 mb-2">
                                        <label for="validationCustom01">First name</label>
                                        <input type="text" class="form-control" name="firstName" id="validationCustom01" placeholder="First name" required>
                                        <span class="invalid-feedback">
                                            Requried First Name
                                        </span>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="validationCustom02">Last name</label>
                                        <input type="text" name="lastName" class="form-control" id="validationCustom02" placeholder="Last name" required>
                                        <div class="invalid-feedback">
                                            Requried Last Name
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-2">
                                        <label for="validationCustomUsername">Email ID:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            </div>
                                            <input type="email" name="email" class="form-control" id="validationCustomUsername" placeholder="Your email id" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">
                                                Please type a valid Email ID.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-2">
                                        <label for="validationCustom04">Contact Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select class="input-group-text h-100 px-1" id="validationCustom03" name="phoneCode" >
                                                            <option selected>IND +91</option>
                                                            <option value="1">IND +91</option>
                                                            <option value="2">IND +91</option>
                                                            <option value="3">IND +91</option>
                                                        </select>
                                            </div>
                                            <input type="tel" name="phone" class="form-control" id="validationCustom04" placeholder="Your Contact" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">
                                                Please type a valid contact number.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8 mb-2">
                                        <label for="validationCustom05">Higest Education</label>
                                        <select class="custom-select px-1 mb-0" id="validationCustom05" name="education" required>
                                                        <option value="">-- Select Education --</option>
                                                        <option value="1">Masters</option>
                                                        <option value="2">Bachlores</option>
                                                        <option value="3">Intermediate</option>
                                                        <option value="4">SSC\CBSC</option>
                                                    </select>
                                        <div class="invalid-feedback">
                                            Please select education.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom06">Experience</label>
                                        <input type="text" name="experience" class="form-control" id="validationCustom06" placeholder="Work Exp">
                                      </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-2">
                                        <label for="validationCustom07">Interested Country</label>
                                        <select class="custom-select mb-0" id="validationCustom07" name="interestedCountry" required>
                                                            <option value="">Select Country</option>
                                                            <option value="1">Canada</option>
                                                            <option value="2">Australia</option>
                                                            <option value="3">Hong Kong</option>
                                                            <option value="4">Germany</option>
                                                        </select>
                                        <div class="invalid-feedback">
                                            Please select Preferred Country.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="validationCustom08">Interested Visa Type</label>
                                        <select class="custom-select mb-0" id="validationCustom08" name="visaType" required>
                                                                    <option value="">Select Visa Type</option>
                                                                    <option value="1">PR Visa</option>
                                                                    <option value="2">Temperaory Visa</option>
                                                                    <option value="3">Study Visa</option>
                                                                    <option value="4">Visit Visa</option>
                                                                    <option value="5">Work Visa</option>
                                                                </select>
                                        <div class="invalid-feedback">
                                            Please select Visa Type.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom09">Message</label>
                                    <textarea class="form-control counted mb-0" name="message" placeholder="Type in your message" rows="3"></textarea>
                                    <p class="text-right mb-3"><small class="h-25 text-right text-muted font-italic" id="counter">320 characters remaining</small></p>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="resume" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Upload Resume file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        <p class="text-right text-muted mb-0 font-italic"><small>Ex: .pdf, doc, docx</small></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mx-0">
                                        <div class="col-md-6 px-1">
                                            <span class="field-label-header text-danger" style="font-size: 15px;">How would you rate us*</span>
                                        </div>
                                        <div class="col-md-6 px-0 text-right">
                                            <div class="form-group mb-0" id="rating-ability-wrapper">
                                                <label class="control-label" for="rating">
                                                                    <span class="field-label-info"></span>
                                                                    <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                                                                    </label>
                                                <button type="button" class="btnrating btn btn-default btn-sm py-0 px-1" data-attr="1" id="rating-star-1">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </button>
                                                <button type="button" class="btnrating btn btn-default btn-sm py-0 px-1" data-attr="2" id="rating-star-2">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </button>
                                                <button type="button" class="btnrating btn btn-default btn-sm py-0 px-1" data-attr="3" id="rating-star-3">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </button>
                                                <button type="button" class="btnrating btn btn-default btn-sm py-0 px-1" data-attr="4" id="rating-star-4">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </button>
                                                <button type="button" class="btnrating btn btn-default btn-sm py-0 px-1" data-attr="5" id="rating-star-5">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </button>
                                                <p class="bold rating-header text-right mb-0 text-danger">
                                                    <span class="selected-rating">0</span><small> / 5</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                                        <label class="form-check-label" for="invalidCheck">
                                                              Agree to terms and conditions
                                                            </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center mb-0"><button class="btn btn-danger m-auto py-1 rounded-0 text-center" id="eligibility_submit" name="submitEligibility" value="Submit form"t ype="submit">Submit form</button></p>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!--<script src="<?php echo get_template_directory_uri(); ?>/dist/js/bootstrap.min.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/custom.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/formValidation.js"></script>
    
	<!--<script src="<?php echo get_template_directory_uri(); ?>/dist/js/owl.carousel.min.js"></script>-->
    <script>
        $('.carousel').carousel();
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
			//$("ul.country-carousel>li").addClass("is-blur");
			//$("#"+key).removeClass("is-blur");
			$("#"+key+"Body").css("display","block");
		}
		function openEligibilityForm() {
			$("#eligibility_popup").trigger("click");
		}
    </script>
</body>

</html>