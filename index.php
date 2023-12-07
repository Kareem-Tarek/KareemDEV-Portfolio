<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>KareemDEV - Portfolio</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/Logos/logo2/png/logo-color.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/Logos/logo2/png/logo-color.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!-- [if lt IE 9]> -->
      <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> -->
      <!-- <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> -->
    <!-- <![endif] -->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <!-- <span class="h3" style="font-family: Ink Free;">KareemDEV</span> -->
            <span class="h3" style="font-family: Lucida Handwriting;">KareemDEV</span>
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#testimonials">Testimonials</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
    <!-- parallaxie -->
	<section id="home" class="main-banner " style="background: url('uploads/home_page_banner_kareem_tarek_dev.jpg'); background-size: auto 100%; background-position: center; background-repeat: no-repeat; background-color: black;">
		<div class="heading">
			<h1 class="mt-5">Hello! I'm Kareem Tarek</h1>
			<p>Welcome To My Portfolio!</p>
			<h3 class="cd-headline clip is-full-width">
				<span>I'm specialized in </span>
				<span class="cd-words-wrapper">
			<!--1---><b class="is-visible" style="color: rgb(139, 11, 194);">Full-Stack Web Development</b>
            <!--2---><b class="" style="color: rgb(234, 102, 7);">Server-side Development</b>
            <!--3---><b style="color: rgb(200, 11, 194);">PHP & Laravel Framework Development</b>
            <!--4---><b style="color: rgb(55, 11, 340);">MERN Stack Development</b>
            <!--5---><b style="color: rgb(139, 11, 194);">ReactJS</b>
            <!--6---><b class="text-primary">Problem-Solving</b>
			<!--7---><b class="text-danger">Database Analysis & Design (UML Diagrams)</b>
			<!--8---><b class="text-success">Database Development (SQL)</b>
			<!--9---><b class="text-warning">ORACLE Database Development (SQL, PL/SQL, Forms & Reports)</b>
            <!--10--><b class="" style="color: rgb(253, 0, 244);">MySQL Database Development</b>
            <!--11--><b style="color:rgb(4, 208, 211);">MS Excel Functional Programming (Formulas & Functions)</b>
				</span>
			</h3>
		</div>
	</section>

	<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2 class="font-weight-bold">About Kareem</h2>
                        <p>
                            Hello, my name is Kareem Tarek. I am from Cairo, Egypt and I am a software developer. I specialize in both client-side and server-side development.
                        </p>
                        <p>
                            I would like to mention that the idea of joining the <u>software development</u> career came to my mind when 
                            I was studying <span class="text-dark font-weight-bold">Business Administration</span> with a major in <span class="text-dark font-weight-bold"></span>Business Information System (BIS)</span> at the 
                            <a href="https://aast.edu/en/" class="text-primary font-weight-bold" target="_blank">Arab Academy
                            for Science, Technology and Maritime Transport (AASTMT)</a> university. The university gave me a good foundation 
                            in software development, and encouraged me to keep learning on my own. After graduating, I enrolled in many online 
                            and offline courses to gain knowledge in different IT technologies, such as database designing, front-end development, 
                            back-end development, native development, frameworks development, and external/third party technologies (e.g. CDNs, libraries & packages, Plugins & Extensions, etc.).
                        </p>
                        <p> 
                            <!-- <span class="text-dark font-weight-bold"><u><b>What Exactly Would I Provide To You?</b></u></span><br> -->
                            <span class="text-dark font-weight-bold"><u><b>In General, What Would I Be Offering You?</b></u></span><br>
                            <span>I develop software systems based on custom requirements from clients, which allow users in the system to carry out specific tasks and operations on computers or other devices. These tasks and operations may include input, processing, output, storage, and control activities of the information systems. Authenticated users within the system have different authorizations and permissions or roles to carry out specific tasks and operations in the software systems.</span><br>
                            <span class="text-dark font-weight-bold">Ex. for some real life applications:</span> <span class="text-danger">Businesses' Dashboards</span>, <span class="text-danger">Reservation/Booking systems</span>, <span class="text-danger">Point of Sale (POS) systems</span>, <span class="text-danger">E-commerce (online shopping) systems</span>, <span class="text-danger">Blog systems</span>, <span class="text-danger">Social Media systems</span>, <span class="text-danger">Inventory systems</span>, <span class="text-danger">Q&A platforms</span>, <span class="text-danger">Event Planning systems (online buyers, services and services' providers)</span>, etc.
                        </p>
                        <p>
                            <span class="text-dark font-weight-bold"><u><b>Core Competencies:</b></u></span><br>
                            <span>I am an organizational, analytical, and decision-making issue solver with excellent goal-setting and time-management skills. I am capable of understanding and implementing complex knowledge. I am a cooperative, independent, influential, and helpful teammate. I am currently working in back-end development, and I am also working on improving my front-end development skills and solving software component technical challenges.</span>
                        </p>
                        <p class="mt-4">
                            <a href="https://drive.google.com/file/d/1dp7KTHcKSBRzfxPxTvymLQc5ShXEK2Bl/view?usp=sharing" class="sim-btn btn-hover-new" data-text="Check My CV!" title="KareemDEV_CV_Google_Drive" target="_blank"><span>Show/Download My CV</span></a>
                        </p> 
                        <img src="images/prettyPhoto/customs/black-down-arrow-directional.png" alt="" class="down-arrow-directional"> 
                        <p>My CV has more details about me such as my bachelor's degree, achievements, work history, soft skills, technical/hard skills, etc.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn" style="">
                        <img src="uploads/about_kareem_tarek_dev-02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>What Services Do I Provide?</h3>
                <!-- <p></p> -->
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon" style="text-align: center;">
							<i class="flaticon-seo"></i>
						</div>
						<h2>Web Development</h2>
						<p>I create high-quality, user-friendly websites using my skills in front-end development, back-end development.</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>Responsive Design</h2>
						<p>I create websites that look great and work seamlessly on any device, using responsive design principles.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>Creative Design</h2>
						<p>I create visually appealing and engaging designs that communicate your brand message effectively.</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>Database Analysis & Design</h2>
						<p>I design efficient and scalable databases that meet the specific needs of your business.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>Web Apps Ideas</h2>
						<p>
                            I help you to brainstorm, conceptualize, and develop innovative web ideas that meet your business goals.
                        </p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>24/7 Support</h2>
						<p>I provide comprehensive support for your software products, including bug fixing, troubleshooting, and training.</p>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Here are some samples of my own work...</h3>
                <p>In progress... <span class="text-warning font-weight-bold">(under development!)</span></p>
                <!-- <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p> -->
            </div><!-- end title -->
			
			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-left">
						<button class="active" data-filter="*">All</button>
                        <button class="p-3" data-filter="">Front-end Development</button>
						<button class="p-3" data-filter=".gal_a">Full Stack Development</button>
						<button class="p-3" data-filter=".gal_b">Database Development</button>
						<button class="p-3" data-filter=".gal_c">System Analysis</button>
					</div>
                    <span>etc.</span>
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="uploads/portfolio_images/Screenshot-01.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/portfolio_images/Screenshot-01.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="uploads/portfolio_images/Screenshot-13.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/portfolio_images/Screenshot-13.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="uploads/portfolio_images/Screenshot-11.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/portfolio_images/Screenshot-11.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="uploads/portfolio_images/Screenshot-05.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/portfolio_images/Screenshot-05.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="uploads/portfolio_images/Screenshot-09.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/portfolio_images/Screenshot-09.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="uploads/portfolio_images/Screenshot-15.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/portfolio_images/Screenshot-15.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="uploads/portfolio_images/Screenshot-06.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/portfolio_images/Screenshot-06.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="uploads/portfolio_images/Screenshot-07.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/portfolio_images/Screenshot-07.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="uploads/portfolio_images/Screenshot-12.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/portfolio_images/Screenshot-12.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	 <div id="testimonials" class="section wb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Testimonials</h3>
                <p>In progress... <span class="text-warning font-weight-bold">(under development!)</span></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <!-- start testimonial 1 -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Subject</h3>
                                <p class="lead">Body...</p>
                            </div>
                            <div class="testi-meta">
                                <img src="./uploads/testi_user.jpg" alt="user.jpg" class="img-fluid alignleft">
                                <p><h4>Name_A</h4><small>Profession</small></p>
                                <address>Governonace - <span class="text-secondary"><i class="fa fa-whatsapp" aria-hidden="true"></i> +00 000 000 0000</span></address>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <!-- start testimonial 2 -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Subject</h3>
                                <p class="lead">Body...</p>
                            </div>
                            <div class="testi-meta">
                                <img src="./uploads/testi_user.jpg" alt="user.jpg" class="img-fluid alignleft">
                                <p><h4>Name_B</h4><small>Profession</small></p>
                                <address>Governonace - <span class="text-secondary"><i class="fa fa-whatsapp" aria-hidden="true"></i> +00 000 000 0000</span></address>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <!-- start testimonial 3 -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Subject</h3>
                                <p class="lead">Body...</p>
                            </div>
                            <div class="testi-meta">
                                <img src="./uploads/testi_user.jpg" alt="user.jpg" class="img-fluid alignleft">
                                <p><h4>Name_C</h4><small>Profession</small></p>
                                <address>Governonace - <span class="text-secondary"><i class="fa fa-whatsapp" aria-hidden="true"></i> +00 000 000 0000</span></address>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="blog" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Blog</h3>
                <p>In progress... <span class="text-warning font-weight-bold">(under development!)</span></p>
            </div><!-- end title -->
			
			
			
		</div>
	</div>

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-left">
                <h3>Contact Me</h3>
                <p>Please feel free to contact me.</p>
                <h4>In progress... <span class="text-warning font-weight-bold">(under development!)</span> - It's just working as a mailer that you could send an email to anyone (e.g. gmail, yahoo, outlook, etc.) from this native PHP project "index.php", but you need to adjust the "mail/send_email.php". So, actually it currently works like "Contact Others by Mail"</h4>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form border-warning">
                        <div id="message"></div>
                            <form action="mail/send_email.php" method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control border-warning" id="sender_name" name="sender_name" type="text" placeholder="Your Name" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control border-warning" id="recipient_email" name="recipient_email" type="email" placeholder="Recipient's Email" data-validation-required-message="Please enter the recipient's email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control border-warning" id="subject" name="subject" type="text" placeholder="Subject..." data-validation-required-message="Please enter a subject for the mail.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control border-warning" id="body" name="body" placeholder="Message..." data-validation-required-message="Please enter a body for the mail."></textarea>
                                        <!-- <input class="form-control border-warning" id="body" name="body" placeholder="Message..." data-validation-required-message="Please enter a body for the mail."> -->
                                        <p class="help-block text-danger"></p>
									</div>
								</div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="attachment_img">Image:</label>
                                        <input class="form-control border-warning" id="attachment_img" name="attachment_img" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label for="attachment_file">File:</label>
                                        <input class="form-control border-warning" id="attachment_file" name="attachment_file" type="file">
                                    </div>
                                </div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn btn-hover-new" data-text="Send Message" type="submit">Send Message</button>
								</div>
                                <div class="col-md-12 d-flex justify-content-center mt-5">
                                   <h3>
                                        <?php 
                                        //display session message if available, wether if it's success or error message
                                        if (isset($_SESSION['success_message'])) {
                                            echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
                                            unset($_SESSION['success_message']); // Clear the session message
                                        }
                                        elseif (isset($_SESSION['error_message'])){
                                            echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
                                            unset($_SESSION['error_message']); // Clear the session message
                                        }
                                        elseif (isset($_SESSION['credentials_error_message'])){
                                            echo '<div class="alert alert-danger">' . $_SESSION['credentials_error_message'] . '</div>';
                                            unset($_SESSION['credentials_error_message']); // Clear the session message
                                        }
                                        ?>
                                   </h3> 
                                </div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                        <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
                        <!-- <a class="nav-link js-scroll-trigger" href="#">Pricing</a> -->
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                        <!-- <a class="nav-link js-scroll-trigger" href="#">Faq</a> -->
                        <a class="nav-link js-scroll-trigger" href="#testimonials">Testimonials</a>
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact Me</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2023 <a class="js-scroll-trigger" href="#page-top">KareemDEV</a></p>
                    <p class="mt-3">
                        <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <a class="text-light" href="https://wa.me/+201010110457">+20 101 011 0457</a>
                        - <i class="fa fa-github fa-2x" aria-hidden="true"></i> (Personal) <a class="text-light" href="https://github.com/Kareem-Tarek">Kareem-Tarek</a>
                        - <i class="fa fa-github fa-2x" aria-hidden="true"></i> (Teamwork) <a class="text-light" href="https://github.com/Stock-Coders">Stock-Coders</a>
                        - <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i> <a class="text-light" href="https://www.linkedin.com/in/kareem-tarek-1899a71a0/">Kareem Tarek</a>
                        - <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <a class="text-light" href="https://www.facebook.com/kareemtarekdev/">Kareem Tarek PK</a>
                    </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>
</body>
</html>