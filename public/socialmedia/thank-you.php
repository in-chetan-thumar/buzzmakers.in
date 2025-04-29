<?php 
require __DIR__ . '/../../vendor/autoload.php'; // Adjust path as needed
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    $name = $_GET['name'] ?? '';
    $email = $_GET['email'] ?? ' ';
    $mobile = $_GET['mobile'] ?? '';
    $website = $_GET['website'] ?? '';
    $message = $_GET['message'] ?? '';

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                         // Set the SMTP server to Gmail
        $mail->SMTPAuth   = true;                                     // Enable SMTP authentication
        $mail->Username   = 'bd@buzzmakers.in';                   // Your Gmail address
        $mail->Password   = 'aagk sphk dcyb wldw';                      // Your App Password (if using 2FA)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           // Enable TLS encryption
        $mail->Port       = 587;                                      // TCP port to connect to

        // Recipients
        $mail->setFrom('bd@buzzmakers.in','Buzzmakers');             // Sender's email and name
        //$mail->addAddress('krishnaa@buzzmakers.in');                  // Receiver's email
        $mail->addAddress('komalgagiya64@gmail.com');                  // Receiver's email

        // Content
        $mail->isHTML(false);                                         // Set email format to plain text
        $mail->Subject = 'New Landing Page Enquiry';                  // Email subject
    
        $mail->Body  = "You have received a new enquiry\n\n"
                    . "Name: $name\n"
                    . "Email: $email\n"
                    . "Mobile: $mobile\n"
                    . "Company website: $website\n"
                    . "Message: $message\n" ;
                    
        // Send the email
        if ($mail->send()) {
            echo "1";  // Success response
        } else {
            echo "0";  // Failure response
        }
    } catch (Exception $e) {
        // If an error occurs
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
