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
    }

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
        $mail->addAddress('komalgagiya64@gmail.com');

        // $mail->addAddress('krishnaa@buzzmakers.in');

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
?>



