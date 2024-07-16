<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;                     
        $mail->isSMTP();                          
        $mail->Host       = 'smtp.gmail.com';     
        $mail->SMTPAuth   = true;                 
        $mail->Username   = 'qutaiba.makahleh@gmail.com'; // Your Gmail address
        $mail->Password   = 'Marwan.2004';   // Your App Password
        $mail->SMTPSecure = 'tls';                
        $mail->Port       = 587;                  

        $mail->setFrom($email, $fullname);
        $mail->addAddress('qutaiba.makahleh@gmail.com'); 
        $mail->addReplyTo($email, $fullname);

        $mail->isHTML(true);                       
        $mail->Subject = $subject;
        $mail->Body    = nl2br($message);
        $mail->AltBody = $message;

        $mail->send();
        echo "Message has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
?>
