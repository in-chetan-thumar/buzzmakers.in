
<?php 
 require __DIR__ . '/../../vendor/autoload.php'; // Adjust path as needed
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
    
      // Create a new PHPMailer instance
      $mail = new PHPMailer(true);

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
          $mail->addAddress('krishnaa@buzzmakers.in');                  // Receiver's email
      
          // Content
          $mail->isHTML(false);                                         // Set email format to plain text
          $mail->Subject = 'New Landing Page Enquiry';                  // Email subject
          $mail->Body    = "You have received a new enquiry:\n\n" .
                           "Name: Buzzmakers User\n" .
                           "Email: Buzzmakers@buzzmakers.in\n" .
                           "Message: I'm interested in learning more about your services.\n";
                         
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
    </head>
    <body >
    <?php  

    //     $to = "krishnaa@buzzmakers.in"; // Receiver's email
    //     $subject = "New Landing Page Enquiry";
        
    //     $body = "You have received a new enquiry:\n\n";
    //     $body .= "Name: Buzzmakers User\n";
    //     $body .= "Email: Buzzmakers@buzzmakers.in\n";
    //     $body .= "Message: I'm interested in learning more about your services.\n";
    //     $body .= "Source: Landing Page - April 2025 Campaign\n";
        
    //     $headers = 'From: Buzzmakers <bd@buzzmakers.in>' . "\r\n";
    //     $headers = 'From: Buzzmakers <bd@buzzmakers.in>' . "\r\n";

    //     if (mail($to, $subject, $body, $headers)) {
    //         echo "1";
    //     }
    //     else{
    //         echo "0";
    //     }
       
    // ?>
        <!-- Back To Top Start -->
      
    </body>
</html>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5TYDY0D3XL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-5TYDY0D3XL');
</script>