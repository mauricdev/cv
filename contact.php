<?php
 
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers= "De: ".$from_name."<br>"."email: ".$from_email."<br>"."subject: ".$subject."<br>"."message: ".$message ."<br>";

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';
  
  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'mauric.gutierr1995@gmail.com';                     // SMTP username
      $mail->Password   = 'lyibmtdtdvwiwogg';                               // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  
      //Recipients
      $mail->setFrom('mauric.gutierr1995@gmail.com', 'Contacto cv' );
      $mail->addAddress('mauric.gutierr1995@gmail.com');     // Add a recipient
  
      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Contacto CV';
      $mail->Body    = $headers;
  
      $mail->send();

  } catch (Exception $e) {


  }
 
  echo "<script>
  alert('Mensaje enviado con exito');
  window.location= 'index.html'
  </script>";
 
  ?>
