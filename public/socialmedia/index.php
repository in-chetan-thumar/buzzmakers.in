<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <meta name="description" content="">
        <!-- ======== Page title ============ -->
        <title>Buzz Makers</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--<< Icomoon.css >>-->
        <link rel="stylesheet" href="assets/css/icomoon.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--<< Color.css >>-->
        <link rel="stylesheet" href="assets/css/color.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="assets/css/main.css">
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-5TYDY0D3XL');
        </script>
    </head>
    <body >
        <!-- Back To Top Start -->
        <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

         <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-3 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="https://buzzmakers.in/">
                                    <img style="width:100px" src="assets/img/logo.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>     
                        <div class="mobile-menu fix mb-3"></div>
						
				  </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>
        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1 ">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo">
                            <a href="https://buzzmakers.in/" class="header-logo">
                                <img style="width: 120px;" src="assets/img/logo.png" alt="logo-img">
                            </a>
                            <a href="https://buzzmakers.in/" class="header-logo-2">
                                <img  style="width: 100px;" src="assets/img/logo.png" alt="logo-img">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>           
                                        <li>
                                            <a href="#about">about</a>
                                        </li>
                                        <li>
                                            <a href="#services">services</a>
                                        </li>
                                        <li>
                                            <a href="#WhyChooseUs">Why Choose Us</a>
                                        </li>
                                        <li>
                                            <a href="#CaseStudies">Case Studies</a>
                                        </li>
                                        <li>
                                            <a href="#Testimonials">Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="#contact">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="#faqs">FAQs</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                     <div class="header-right d-flex justify-content-end align-items-center">                   
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


    <!-- Hero Section Start -->
    <section id="home" class="hero-section hero-2">
  
        <div class="container-fluid">
            <div class="row g-0 justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                     <img class="mob-banner" src="assets/img/mobile-banner-new.jpg">
                   
                    </div>
                </div>
                <div class="col-lg-4  top-banner">
                    <div class="contact-wrapper">
                    <div class="contact-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form-area ">
                                    <h3 class="text-center">Let's Elevate Your Social Game!</h3>
                                   <form  method="post" id="contact_form" action="thank-you.php" autocomplete="off">	
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                   <input class="form-control" placeholder="Name*" name="name" id="name" type="text" onkeypress="return onlyAlphabets(event, this);">
												<span class="error error-pop" id="name_error">Invalid Name</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <input class="form-control" placeholder="Phone Number*" name="mobile" type="number" id="mobile" maxlength="10" onkeypress="return isNumber(event)">
												<span class="error error-pop" id="mobile_error">Invalid  Mobile</span> 
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                  <input class="form-control" placeholder="Email ID*" name="email" id="email" type="text">
											        <span class="error error-pop" id="email_error">Invalid Email</span> 
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                  <input class="form-control" placeholder="Company Website" name="website" id="website" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-clt">
                                                   <textarea  class="form-control" id="Message" name="Message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                     
                                            <div class="col-lg-12">
											 <input type="hidden" name="contact_us_form" value="contact_us_form">

                                                <button  id="contactform" type="submit" class="theme-btn">
                                                    Submit Now
                                                    <i class="fa-solid fa-arrow-right ms-1"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
		</div>
     <img class="mob-banner" src="assets/img/banner-line.png">
    </section>
    
        <!-- Marque Section Start -->
        <div class="marquee-section-1">
            <div class="mycustom-marque style-2">
                <div class="scrolling-wrap">
                    <div class="comm">
                        <div class="cmn-textslide">Social Media Account Management</div>
                        <div class="cmn-textslide">Content Creation & Curation</div>
                        <div class="cmn-textslide">Paid Social Media Advertising</div>
                        <div class="cmn-textslide">Influencer Marketing & Collaborations</div>
                        <div class="cmn-textslide">Social Media Reputation Management </div>
                        <div class="cmn-textslide">Community Building & Engagement </div>
                        <div style="padding-right:50px" class="cmn-textslide">Social Media Profile Optimization</div>
                    </div>
                    <div class="comm">
                        <div class="cmn-textslide">Social Media Account Management</div>
                        <div class="cmn-textslide">Content Creation & Curation</div>
                        <div class="cmn-textslide">Influencer Marketing & Collaborations</div>
                        <div class="cmn-textslide">Influencer Marketing & Collaborations</div>
                        <div class="cmn-textslide">Social Media Reputation Management </div>
                        <div class="cmn-textslide">Community Building & Engagement </div>
                        <div style="padding-right:50px" class="cmn-textslide">Social Media Profile Optimization</div>
                    </div>
                    <div class="comm">
                        <div class="cmn-textslide">Social Media Account Management</div>
                        <div class="cmn-textslide">Content Creation & Curation</div>
                        <div class="cmn-textslide">Paid Social Media Advertising</div>
                        <div class="cmn-textslide">Influencer Marketing & Collaborations</div>
                        <div class="cmn-textslide">Social Media Reputation Management </div>
                        <div class="cmn-textslide">Community Building & Engagement </div>
                        <div style="padding-right:50px" class="cmn-textslide">Social Media Profile Optimization</div>
                    </div>
                    <div class="comm">
                        <div class="cmn-textslide">Social Media Account Management</div>
                        <div class="cmn-textslide">Content Creation & Curation</div>
                        <div class="cmn-textslide">Paid Social Media Advertising</div>
                        <div class="cmn-textslide">Influencer Marketing & Collaborations</div>
                        <div class="cmn-textslide">Social Media Reputation Management </div>
                        <div class="cmn-textslide">Community Building & Engagement </div>
                        <div style="padding-right:50px" class="cmn-textslide">Social Media Profile Optimization</div>
                    </div>
                </div>
            </div>
          
        </div>
   <!-- About Section Start -->

   
        <!-- About Section Start -->
        <section class="about-section fix section-padding"  id="about">
            <!--<div class="left-shape float-bob-y">
                <img src="assets/img/about/left-shape.png" alt="img">
            </div>-->
            <div class="container">
               
                <div class="about-wrapper">
                    <div class="row g-2">
                        <div class="col-lg-6">
                            <div class="about-image">
                                <img src="assets/img/about/about.png" style="width:100%" alt="img" class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                              <!--  <div class="bg-shape">
                                    <img src="assets/img/about/bg-shape.png" alt="img">
                                </div>
                                <div class="grap-shape float-bob-x">
                                    <img src="assets/img/about/grap.png" alt="img">
                                </div>
                                <div class="box-shape float-bob-y">
                                    <img src="assets/img/about/box-shape.png" alt="img">
                                </div>
                                <div class="emoji-shape">
                                    <img src="assets/img/about/emoji.png" alt="img">
                                </div>-->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <div class="sub-title bg-color-2 wow fadeInUp">
                                        <span>ABOUT COMPANY</span>
                                    </div>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Your Goal, Our Passion. Your Success, Our Badge of Honour
                                    </h2>
                                </div>
                               <!-- <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    At BuzzMakers, we're more than a digital marketing agency; we're storytellers, strategists, and innovators. Since our inception in 2014, we've partnered with brands like Craftsvilla and Junglee Pictures, evolving into a full-service agency with hubs in Mumbai and Nagpur. Our passion lies in transforming brands into industry buzzmakers.
                                </p>-->
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                   We're Buzz Makers, a Mumbai-based social media agency that helps brands get noticed and stay ahead. From strategy to storytelling, we create content that connects and campaigns that convert. Whether it's social media, ads, or digital marketing, we make sure your brand stays in the spotlight.
                                </p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section Start -->
        <section class="service-section fix section-padding" id="services">
            <!--<div class="left-shape float-bob-y">
                <img src="assets/img/service/left-shape.png" alt="img">
            </div>
            <div class="right-shape">
                <img src="assets/img/service/right-shape.png" alt="img">
            </div>
            <div class="bg-shape">
                <img src="assets/img/service/bg-shape.png" alt="img">
            </div>-->
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title mg-b-0">
                        <div class="sub-title wow fadeInUp">
                            <span>Our services</span>
                        </div>
                      <!--  <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            We offer a comprehensive suite of social media marketing services designed to elevate your brand
                        </h2>-->
                    </div>
                  
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-box-items">
                            <div class="icon">
                                <img src="assets/img/service/strategy-development.png" alt="img">
                            </div>
                            <div class="content"> 
                                <h4> Social Media Marketing</h4>
                                <p>We take social media off your plate, handling everything from planning to execution, so you can focus on your business.</p>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-box-items">
                            <div class="icon">
                                 <img src="assets/img/service/writer.png" alt="img">
                            </div>
                            <div class="content"> 
                                <h4>Content Creation</h4>
                                <p>From eye-catching graphics to compelling copy, we create content that tells your brand's story and keeps your audience engaged.</p>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <img src="assets/img/service/influencer.png" alt="img">
								
                            </div>
                            <div class="content"> 
                                <h4>Influencer Marketing & Collaborations</h4>
                                <p>We connect your brand with the right influencers to drive authentic engagement, boost credibility, and expand your reach.</p>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <img src="assets/img/service/paid-content.png" alt="img">
                            </div>
                            <div class="content"> 
                                <h4> Paid Advertising</h4>
                                <p>Our targeted ad campaigns maximize ROI by reaching the right audience with precision, driving conversions and brand awareness.</p>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                               <img src="assets/img/service/online-rating.png" alt="img">
                            </div>
                            <div class="content"> 
                                <h4>ORM (Online Reputation Management)</h4>
                                <p>We monitor, manage, and enhance your brand's online presence, ensuring positive interactions and swift response to feedback.</p>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <img src="assets/img/service/user-generated-content.png" alt="img">
                            </div>
                            <div class="content"> 
                                <h4>User-Generated Content (UGC) Campaigns</h4>
                                <p>We encourage and leverage real customer content to build trust, enhance brand credibility, and create a loyal community.</p>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <img src="assets/img/service/videography.png" alt="img">
                            </div>
                            <div class="content"> 
                                <h4>Videography</h4>
                                <p>From short-form reels to high-quality brand films, we produce engaging video content that captivates and converts.</p>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <img src="assets/img/service/tripod.png" alt="img">
                            </div>
                            <div class="content"> 
                                <h4>Photography</h4>
                                <p>We create stunning visuals that showcase your brand's identity, products, and stories, ensuring a strong visual impact.</p>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     
     <!-- Values Section Start -->
     <section id="WhyChooseUs" class="value-section fix section-padding section-bg">
       
        <div class="container">
            <div class="section-title text-center wow fadeInUp" data-wow-delay=".3s">
                <h2>Why Choose Us?</h2>
            </div>
            <div class="row">
                <div class="col-xl-3  col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="value-box-items">
                      
                        <div class="content">
						
						   <img src="assets/img/service/expertize.png" alt="img">
                            <h3>Proven Expertise</h3>
                            <p>
                                Our collaborations with major titles in social media marketing and diverse industries showcase our adaptability and proficiency.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="value-box-items">
                       
                        <div class="content">
						  <img src="assets/img/service/creative-idea.png" alt="img">
                            <h3>Creative Excellence</h3>
                            <p>
                                Our team's passion for social media and creativity is evident in our innovative solutions and end results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="value-box-items">
                       
                        <div class="content">
						  <img src="assets/img/service/consumer-centric.png" alt="img">
                            <h3>Client-Centric Approach</h3>
                            <p>
                                We prioritize understanding your unique needs, ensuring personalized strategies that deliver.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="value-box-items">
                       
                        <div class="content">
						  <img src="assets/img/service/customer-service.png" alt="img">
                            <h3>End-to-End Services</h3>
                            <p>
                                From strategy to execution, we offer comprehensive social media marketing solutions tailored to your brand.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Cta Counter Section Start -->
  <section class="cta-counter-section-3 fix section-bg section-padding bg-cover" style="background-image: url('assets/img//audience-bg.jpg');">
    <div class="container">
	 <div class="section-title text-center wow fadeInUp" data-wow-delay=".3s">
                <h2 > See How We Deliver Results</h2>
            </div>
     
        <div class="cta-counter-wrapper-2">
            
            <div class="section-title-area">
      
                <div class="counter-box-area">
                    <div class="counter-text wow fadeInUp" data-wow-delay=".3s">
                        <h2>
                            <span class="count">192</span>%
                        </h2>
                        <p>Increase in Engagement</p>
                    </div>
                    <div class="counter-text wow fadeInUp" data-wow-delay=".5s">
                        <h2>
                            <span class="count">271</span>%
                        </h2>
                        <p> Increase in Followers
                        </p>
                    </div>
                    <div class="counter-text wow fadeInUp" data-wow-delay=".7s">
                        <h2>
                            <span class="count">3,200</span>%
                        </h2>
                        <p>Increase in Reach
                        </p>
                    </div>
                    <div class="counter-text wow fadeInUp" data-wow-delay=".3s">
                        <h2>
                            <span class="count">215</span>%
                        </h2>
                        <p>Increase in Profile Visits </p>
                    </div>
                    <div class="counter-text wow fadeInUp" data-wow-delay=".3s">
                        <h2>
                            <span class="count">1</span>M
                        </h2>
                        <p>Profile Visits Generated  </p>
                    </div>
                    <div class="counter-text wow fadeInUp" data-wow-delay=".5s">
                        <h2>
                            <span class="count">9</span>M
                        </h2>
                        <p>Reach achieved till date </p>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>

     
        <!-- Case Studies Section Start -->
        <section class="case-studies-section-3 fix section-padding" id="CaseStudies">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sub-title wow fadeInUp">
                        <span> Our Work</span>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Client Results & Case Studies
                    </h2>
                </div>
            </div>
            <div class="container-fluid">

                <div class="section-title-area">
                    
                    <div class="pricing-content mg-auto">
                        <div class="pricing-tab-header">
                            <ul class="nav" role="tablist">
							
                                <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                                    <a href="#fashion" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">
                                        Fashion
                                    </a>
                                </li>
                                <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                    <a href="#entertainment" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                        Entertainment
                                    </a>
                                </li>
								 <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                    <a href="#pharmaceutical" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                        Pharmaceutical
                                    </a>
                                </li>
								 <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                    <a href="#FMCG" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                        FMCG
                                    </a>
                                </li>
								
								<li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                    <a href="#automobile" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                       Automobile
                                    </a>
                                </li>
                                	<li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                    <a href="#education" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                       Education
                                    </a>
                                </li>
									<li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                    <a href="#event" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                       Event
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="fashion" class="tab-pane fade show active" role="tabpanel">
                <div class="swiper project-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="case-studies-card-items">
                                <div class="thumb">
                                    <img src="assets/img/work/fashion/1.jpeg" alt="img">
                                </div>                              
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-studies-card-items">
                                <div class="thumb">
                                      <img src="assets/img/work/fashion/2.jpg" alt="img">
                                </div>                              
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-studies-card-items">
                                <div class="thumb">
                                      <img src="assets/img/work/fashion/3.jpeg" alt="img">
                                </div>                              
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-studies-card-items">
                                <div class="thumb">
                                      <img src="assets/img/work/fashion/4.jpg" alt="img">
                                </div>                              
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-studies-card-items">
                                <div class="thumb">
                                       <img src="assets/img/work/fashion/5.jpeg" alt="img">
                                </div>                              
                            </div>
                        </div>
                      <div class="swiper-slide">
                            <div class="case-studies-card-items">
                                <div class="thumb">
                                       <img src="assets/img/work/fashion/6.webp" alt="img">
                                </div>                              
                            </div>
                        </div>
						<div class="swiper-slide">
                            <div class="case-studies-card-items">
                                <div class="thumb">
                                       <img src="assets/img/work/fashion/7.jpg" alt="img">
                                </div>                              
                            </div>
                        </div>
						<div class="swiper-slide">
                            <div class="case-studies-card-items">
                                <div class="thumb">
                                       <img src="assets/img/work/fashion/8.jpeg" alt="img">
                                </div>                              
                            </div>
                        </div>
							<div class="swiper-slide">
                            <div class="case-studies-card-items">
                                <div class="thumb">
                                       <img src="assets/img/work/fashion/9.webp" alt="img">
                                </div>                              
                            </div>
                        </div>
						   </div>
						
                    </div>
                </div>
          
          <div id="entertainment" class="tab-pane fade" role="tabpanel">
            <div class="swiper project-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/entertainment/1.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                   <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/entertainment/2.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
					 <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/entertainment/3.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
					 <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/entertainment/4.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
					 <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/entertainment/5.jpeg" alt="img">
                            </div>                              
                        </div>
                    </div>
					 <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/entertainment/4.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                  
                  <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/entertainment/7.jpeg" alt="img">
                            </div>                              
                        </div>
                    </div>
					 <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/entertainment/8.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                </div>
            </div>
            </div>
			
			  <div id="pharmaceutical" class="tab-pane fade" role="tabpanel">
            <div class="swiper project-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/pharmaceutical/1.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                   
                 <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/pharmaceutical/2.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
					 <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/pharmaceutical/3.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
					 <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/pharmaceutical/4.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
					 <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/pharmaceutical/5.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
					 
                  
                </div>
            </div>
            </div>
          
			  <div id="FMCG" class="tab-pane fade" role="tabpanel">
            <div class="swiper project-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/FMCG/1.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                               <img src="assets/img/work/FMCG/2.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/FMCG/3.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/FMCG/4.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/FMCG/5.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                               <img src="assets/img/work/FMCG/6.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                              <img src="assets/img/work/FMCG/7.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                   
                  
                </div>
            </div>
            </div>
          
		    <div id="automobile" class="tab-pane fade" role="tabpanel">
            <div class="swiper project-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/automobile/1.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                               <img src="assets/img/work/automobile/2.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/automobile/3.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                               <img src="assets/img/work/automobile/4.jpeg" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                               <img src="assets/img/work/automobile/5.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                   
                  
               
                </div>
            </div>
            </div>
             <div id="education" class="tab-pane fade" role="tabpanel">
            <div class="swiper project-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/education/1.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/education/2.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
                   
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/education/4.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/education/5.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                   
                  
               
                </div>
            </div>
            </div>
            <div id="event" class="tab-pane fade" role="tabpanel">
            <div class="swiper project-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/event/1.jpeg" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                <img src="assets/img/work/event/2.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                   <img src="assets/img/work/event/3.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                   <div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                   <img src="assets/img/work/event/4.jpg" alt="img">
                            </div>                              
                        </div>
                    </div>
					<div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                   <img src="assets/img/work/event/5.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
					<div class="swiper-slide">
                        <div class="case-studies-card-items">
                            <div class="thumb">
                                   <img src="assets/img/work/event/6.webp" alt="img">
                            </div>                              
                        </div>
                    </div>
                  
               
                </div>
            </div>
            </div>
          
		  </div>
          
            </div>
        </section>

  

        <!-- Testimonial Section Start -->
        <section id="Testimonials" class="testimonial-section fix section-padding">
            <div class="container overflow-hidden">
                <div class="testimonial-wrapper">
                    <div class="section-title-area">
                        <div class="section-title mg-b-0">
                            <div class="sub-title bg-color-2 wow fadeInUp">
                                <span>Testimonials </span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                As they Say
                            </h2>
                        </div>
                       
                    </div>
                    <div class="row">
					<div class="col-xl-12 col-lg-12">
				
                        <div class="col-xl-12 col-lg-12">
                            <div class="testimonial float-right wow fadeInUp" data-wow-delay=".3s">
                              
						
                               
							   <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                                    <button class="array-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                                    <button class="array-next"><i class="fa-regular fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                        </div>
						<div class="col-xl-12 col-lg-12">
                            <div class="swiper testimonial-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-box-items">
                                            <div class="icon">
                                                <img src="assets/img/testimonial/icon.png" alt="img">
                                            </div>
                                            <div class="testimonial-img">
                                                <img src="assets/img/testimonial/Craftsvilla.png" alt="img">
                                               
                                            </div>
                                            <div class="content">
                                               <div class="client-info">
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <h5>Parvathy Raja</h5>
                                                    <span>Ex. Associate Marketing Director</span>
                                               </div>
                                               <p>
                                                Krishna and his team at Buzz Makers understand how to turn
                                                marketing objectives into creatives that deliver; we
                                                associated with the agency for a range of requirements that
                                                included Print Ads,Campaign Landing pages, retailers, and
                                                social media creatives.
                                               </p>
                                            </div>
                                        </div>
                                    </div>
								
                                    <div class="swiper-slide">
                                        <div class="testimonial-box-items">
                                            <div class="icon">
                                                <img src="assets/img/testimonial/icon.png" alt="img">
                                            </div>
                                            <div class="testimonial-img">
                                                <img src="assets/img/testimonial/Salvi_Chemicals.png" alt="img">
                                               
                                            </div>
                                            <div class="content">
                                               <div class="client-info">
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <h5>Shweta Salvi</h5>
                                                    <span>Marketing Director</span>
                                               </div>
                                               <p>
                                                Buzz Makers have been incredible partners for our brand. They’re not just creative, they
                                                really took the time to understand our industry and what we needed. Always quick to
                                                respond and full of great ideas that work. It feels like they’re as invested in our
                                                success as we are. Couldn’t ask for a better team to have on our side!
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="swiper-slide">
                                        <div class="testimonial-box-items">
                                            <div class="icon">
                                                <img src="assets/img/testimonial/icon.png" alt="img">
                                            </div>
                                            <div class="testimonial-img">
                                                <img src="assets/img/testimonial/Ardur_Shoes.png" alt="img">
                                                
                                            </div>
                                            <div class="content">
                                               <div class="client-info">
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <h5> Sagnik Mazumder</h5>
                                                    <span> Founder,  Ardur Shoes</span>
                                               </div>
                                               <p>
                                                I've been working with Buzz Makers for many months now, and I've absolutely loved
                                                working with them. Very responsive and always available to take care of client needs.
                                                And also very creative and strategic, helping my brand to grow.
                                                Cheers team!
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-box-items">
                                            <div class="icon">
                                                <img src="assets/img/testimonial/icon.png" alt="img">
                                            </div>
                                            <div class="testimonial-img">
                                                <img src="assets/img/testimonial/lakhani.jpg" alt="img">
                                              
                                            </div>
                                            <div class="content">
                                               <div class="client-info">
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <h5>Hinisha Lakhani</h5>
                                                    <span> Marketing Director </span>
                                               </div>
                                               <p>
                                                This is an agency that truly understands aesthetics, luxury, and, most importantly, the
                                digital game. Buzz Makers has been a one-stop solution for D Lakhani Hospitality, handling everything
                                from digital marketing and food photography to event shoots.  A special shoutout to Shreya, Tanmay, and Krishna for their creativity and exceptional
                                responsiveness. Wishing the team all the best for continued success!
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-box-items">
                                            <div class="icon">
                                                <img src="assets/img/testimonial/icon.png" alt="img">
                                            </div>
                                            <div class="testimonial-img">
                                                <img style="width: 120px;" src="assets/img/testimonial/telon.jpg" alt="img">
                                              
                                            </div>
                                            <div class="content">
                                               <div class="client-info">
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <h5>Priyanka Gala</h5>
                                                    <span>  Marketing Director  </span>
                                               </div>
                                               <p>
                                               
                                                    We were on the lookout for a Mumbai-based digital marketing agency specializing in the
                                                    fashion segment, and that's when we discovered Buzz Makers.  It’s been over a year of working together, and we’re thrilled with how our digital
                                                    presence has evolved. From regular shoots to campaign planning, social media management,
                                                    and performance marketing, Buzz Makers has been our one-stop solution. Their team is not only skilled but also great to collaborate with, making the entire
                                                    process seamless and enjoyable. Highly recommended for fashion brands looking to elevate
                                                    their digital game!
                                                
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-box-items">
                                            <div class="icon">
                                                <img src="assets/img/testimonial/icon.png" alt="img">
                                            </div>
                                            <div class="testimonial-img">
                                                <img src="assets/img/testimonial/Junglee_Pictures.png" alt="img">
                                              
                                            </div>
                                            <div class="content">
                                               <div class="client-info">
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <h5>Sufiyan Khan</h5>
                                                    <span>Ex. Sr. Marketing Manager </span>
                                               </div>
                                               <p>
                                                Movie-marketing an digital a totally different ball game and
                                                we're pleased to have associated with Buzz Makers for some of
                                                our major titles. Their passion for cinema is evident in
                                                creative solutions and the end results.
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-box-items">
                                            <div class="icon">
                                                <img src="assets/img/testimonial/icon.png" alt="img">
                                            </div>
                                            <div class="testimonial-img">
                                                <img src="assets/img/testimonial/Superbids.png" alt="img">
                                               
                                            </div>
                                            <div class="content">
                                               <div class="client-info">
                                                    <div class="star">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <h5>Pratik Shah</h5>
                                                    <span>Ex. Head of Global Marketing </span>
                                               </div>
                                               <p>
                                                Buzz Makers delivered what they promised, highly creative and
                                flexible team often worked from our office for collaborative
                                work. they've done a good job with both Online creative
                                requirements.
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                           
							   </div>
                            </div>
                        </div>
                   
				   
				   </div>
                </div>
            </div>
        </section>
   <!-- About Section Start -->
   <section class="about-section fix section-padding client-logo bg-gray">
  
    <div class="container">
        <div class="brand-wrapper">
            <h4 class="brand-title">1k + Brands Trust Us</h4>
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Aegon_Life.png" alt="img">
                        </div>
                 
                        <div class="brand-img center">
                            <img src="assets/img/brand/Amdavad_Films_copy.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Ardur_Shoes.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/Bereilly_Ki_Barfi.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Craftsvilla.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/D_Lakhani_Hospitality.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Drishyam_Films.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/Gajera_Trust.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Huts_and_Looms.png" alt="img">
                        </div>
                 
                        <div class="brand-img center">
                            <img src="assets/img/brand/IAMAI.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/ISB_logo.png" alt="img">
                        </div>
                   
                        <div class="brand-img center">
                            <img src="assets/img/brand/Jalesh_Cruises_logo.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/JioEvents.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/JioMeet.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Jitoh_Holidays.png" alt="img">
                        </div>
                 
                        <div class="brand-img center">
                            <img src="assets/img/brand/Junglee_Pictures.png" alt="img">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/KS_CHEEMA_LOGO.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/Karma_Media.png" alt="img">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Llumar.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/Mirtillo.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Nutra_Care.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/PoojaEntertainment.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Purusham.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/Raazi.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Ratanshi_Kheraj.png" alt="img">
                        </div>
                   
                        <div class="brand-img center">
                            <img src="assets/img/brand/Royal_Oak.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Salvi_Chemicals.png" alt="img">
                        </div>
                   
                        <div class="brand-img center">
                            <img src="assets/img/brand/Sheer_Drive.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Sony_Music.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/Street_Konnect.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Sunder_Biscuits.png" alt="img">
                        </div>
                 
                        <div class="brand-img center">
                            <img src="assets/img/brand/Superbids.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Trade_Smart.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/Viacom18_Motiom_Pictures.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/Zee5.png" alt="img">
                        </div>
                  
                        <div class="brand-img center">
                            <img src="assets/img/brand/tedx-logo.png" alt="img">
                        </div>
                    </div>


                </div>
            </div>
        </div>
       
    </div>
</section>

        <!-- Contact Section Start -->
        <section class="contact-section fix section-padding" id="contact">
            <div class="container">
			<div class="bottom-contact">
            
                <div class="contact-wrapper">
				    <div class="section-title-area ">
                    <div class="section-title">
                        <div class="sub-title bg-color-3 wow fadeInUp">
                            <span class="wow fadeInUp">Contact us</span>
                        </div>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            How can we help you today?
                        </h2>
                    </div>
               
                </div>
                    <div class="row g-4">
                        <div class="col-xl-6">
                            <div class="contact-form-area">
                                <h3 class="text-center">Fill the Below Form to Get Your Social Media Strategy Session</h3>
                                <form  method="post" id="contact_form2" autocomplete="off">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                               <input  placeholder="Name*" name="name2" id="name2" type="text" onkeypress="return onlyAlphabets(event, this);">
									<span class="error error-pop" id="name_error2">Invalid Name</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                               	<input  placeholder="Phone Number*" name="mobile2" type="number" id="mobile2" maxlength="10" onkeypress="return isNumber(event)">
												<span class="error error-pop" id="mobile_error2">Invalid  Mobile</span>  
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                               <input  placeholder="Email ID*" name="email2" id="email2" type="text">
							                        <span class="error error-pop" id="email_error2">Invalid Email</span> 
                                            </div>
                                        </div>
                                          <div class="col-lg-12">
                                                <div class="form-clt">
                                                  <input  placeholder="Company Website" name="website" id="website" type="text">
											
                                                </div>
                                            </div>
                                        <div class="col-12">
                                            <div class="form-clt">
                                                               <textarea id="Message" name="Message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                 
                                        <div class="col-lg-12">
										   <input type="hidden" name="contact_us_form2" value="contact_us_form2">

                                            <button type="submit" id="contactform2" class="theme-btn">
                                                Submit Now
                                                <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <div class="col-xl-6">
					<div class="contact-info-items text-center active">
                            <div class="icon">
                               <i class="icon-09"></i>
                            </div>
                            <div class="content">
                                <h3>Our Address</h3>
								 <p><strong>Mumbai</strong></p>
                                <p>
                                   Conwood Paragon, Opp Indian Oil Petrol Pump, Near Cama Industrial Estate, Goregaon East,
Mumbai, Maharashtra - 400063
                                </p>
								<p>&nbsp;</p>
								 <p><strong>Nagpur</strong></p>
								<p> Buzz Markers, Above Panino, Wardhman Nagar Colony, Nagpur - 440012</p>
                            </div>
                        </div>
				<!--	<div class="contact-info-items text-center">
                            <div class="icon">
                                <i class="icon-10"></i>
                            </div>
                            <div class="content">
                                <h3><a href="mailto:info@example.com">info@example.com</a></h3>
                                <p>
                                    Email us anytime for anykind <br>
                                    ofquety.
                                </p>
                            </div>
                        </div>-->
					<div class="contact-info-items text-center">
                            <div class="icon">
                                <i class="icon-11"></i>
                            </div>
                            <div class="content phone">
                                <h3>Mumbai: <a href="tel:+919890393090">+919890393090</a></h3>
								 <h3>Nagpur: <a href="tel:+919028999566">+919028999566</a></h3>
                               
                            </div>
                        </div>
					</div>
                    </div>
                </div>
				</div>
            </div>
        </section>

         <!-- Faq Section Start -->
         <section id="faqs" class="faq-section section-padding bg-gray">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4 justify-content-between">
                        <div class="col-xl-12 col-lg-6">
                            <div class="faq-content sticky-style">
                                <div class="section-title">
                                    <div class="sub-title bg-color-2 wow fadeInUp">
                                        <span>FAQ's</span>
                                    </div>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Frequently Asked Questions
                                    </h2>
                                </div>
                           
                             
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="faq-accordion-items">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                    Why does my business need social media marketing?
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Social media marketing helps businesses increase brand awareness, engage with their audience, drive website traffic, and generate leads or sales. It allows direct communication with potential customers and builds a loyal community around your brand.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                    Which social media platforms do you manage?
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    We manage all major platforms, including Facebook, Instagram, LinkedIn, Twitter and YouTube. We tailor strategies based on your industry and target audience.
                                                </div>
                                            </div>
                                        </div>
                               
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    How do you measure the success of social media campaigns?
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    We track key performance indicators (KPIs) such as engagement rate, reach, impressions, website traffic, lead generation, and ROI. We provide detailed reports with insights and recommendations.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                    Can you help with paid social media advertising?
                                                </button>
                                            </h5>
                                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Yes! We specialize in Facebook Ads, Instagram Ads, LinkedIn Ads, and YouTube Ads. We create targeted campaigns to maximize ROI, increase conversions, and scale your business.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                                    How much does social media marketing cost?
                                                </button>
                                            </h5>
                                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Our pricing depends on the services you need, the number of platforms, and ad spend. We offer customized packages based on your business goals. Contact us for a tailored quote.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                                    How soon will I see results from social media marketing?
                                                </button>
                                            </h5>
                                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Organic growth takes time, typically 2-3 months, while paid campaigns can generate immediate results. We focus on sustainable strategies that deliver long-term success.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                                                    Do I need to provide content, or will you create it?
                                                </button>
                                            </h5>
                                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    We offer full content creation services, including graphics, videos, and copywriting. If you have existing content, we can optimize and repurpose it for better engagement.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                                                    Can you manage my social media accounts entirely?
                                                </button>
                                            </h5>
                                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Yes, we provide end-to-end social media management, including content creation, posting, community engagement, and performance tracking.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9">
                                                    How do you create content that matches my brand voice?
                                                </button>
                                            </h5>
                                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    We conduct a brand audit and competitor analysis to understand your brand identity, tone, and audience preferences. This ensures all content aligns with your brand.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="false" aria-controls="faq10">
                                                    How do I get started?
                                                </button>
                                            </h5>
                                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Simply fill out the contact form on this page or book a free consultation with us. We’ll analyze your brand and provide a customized strategy for your business.
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
        </section>


        <!-- Footer Section Start -->
        <section class="footer-section footer-bg fix">
          
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            © All Copyright 2024 by Buzz Makers
                        </p>
                       
                    </div>
                </div>
             
            </div>
        </section>
        <div class="chat-group">
     <a  href="https://wa.link/crttox" target="_blank"><img alt="" src="assets/img/social.png"></a>
       
    </div>
	  <div class="chat-group call-icon">
    
       <a href="tel:+919890393090" target="_blank"><img alt="" src="assets/img/phone-call.png"></a>
    </div>
        <!--<< All JS Plugins >>-->
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="assets/js/wow.min.js"></script>
        <!--<< Circle Progress Js >>-->
        <script src="assets/js/circle-progress.js"></script>
        <!--<< Main.js >>-->
        <script src="assets/js/main.js"></script>
		   <script src="assets/js/jquery.validate.js"></script>
		      <script src="assets/js/script.js"></script>
    </body>
</html>