<?php 
require __DIR__ . '/../../vendor/autoload.php'; // Adjust path as needed
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {    
    // Sanitize inputs
    $name = trim($_GET['name'] ?? '');
    $email = trim($_GET['email'] ?? '');
    $mobile = trim($_GET['mobile'] ?? '');
    $website = trim($_GET['website'] ?? '');
    $message = trim($_GET['message'] ?? '');

    // Check if required fields are filled
    if (empty($name) || empty($email) || empty($mobile)) {
          exit;
    } else {
		// Create a new PHPMailer instance
		$mail = new PHPMailer(true);

		try {
			// Server settings
			$mail->isSMTP();
			$mail->Host       = 'smtp.gmail.com';
			$mail->SMTPAuth   = true;
			$mail->Username   = 'bd@buzzmakers.in';
			$mail->Password   = 'aagk sphk dcyb wldw';
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port       = 587;

            // Recipients
            $mail->setFrom('bd@buzzmakers.in', 'Buzzmakers');
            $mail->addAddress('krishnaa@buzzmakers.in');
           
			// Content
			$mail->isHTML(false);
			$mail->Subject = 'New Landing Page Enquiry';
			$mail->Body    = "You have received a new enquiry\n\n"
						   . "Name: $name\n"
						   . "Email: $email\n"
						   . "Mobile: $mobile\n"
						   . "Company website: $website\n"
						   . "Message: $message\n";

			if ($mail->send()) {
				echo "1";
			} else {
				echo "0";
			}
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
}
?>

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
        <title>Buzzmakers</title>
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
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5TYDY0D3XL"></script>
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

       
        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1 bg-white">
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
					
					   <div class="header-right d-flex justify-content-end align-items-center"></div>
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
    <section id="home" style="height:100vh" class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content text-center">    
                        <h1 class="wow fadeInUp thankH1" data-wow-delay=".3s">
                          Thank You
                        </h1>
                        <h4 class="wow fadeInUp thankH4" data-wow-delay=".5s">
                         Thank you for contacting us. We will connect with you soon.
                        </h4>   
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
                            © All Copyright 2024 by Buzzmakers
                        </p>     
                    </div>
                </div>     
            </div>
        </section>     
    </body>
</html>

