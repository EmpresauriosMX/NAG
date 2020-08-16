<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../phpmailer/PHPMailer.php";
require "../phpmailer/SMTP.php";
require "../phpmailer/Exception.php";
	
$email=$_POST["email"];
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$contr=substr(str_shuffle($permitted_chars), 0, 10);
$hcont=password_hash($contr,PASSWORD_DEFAULT);
include("conexion.php");
$link=conectarse();

$qry = mysqli_query($link,"select * from usuarios where correo = '$email'")
or die("Failed to query database".mysql_error());
$row = mysqli_fetch_array($qry);

if($row['correo']==$email){
	mysqli_query($link,"update usuarios set Contrasena = '$hcont' where correo='$email'");
	mysqli_query($link,"update usuarios set cambio = 1 where correo='$email'");
	//para hosting mail($email,"recuperacion de contraseña NAG",$new);
	//php mailer
	$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'newacademicgeneration@gmail.com';                     // SMTP username
    $mail->Password   = 'Julian27@';                               // SMTP password
    $mail->Password   = 'Julian27@';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('newacademicgeneration@gmail.com', 'NAG'); //envia----
    $mail->addAddress($email, 'Contraseña nueva');     // Add a recipient--- recibe
   // $mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    // Attachments archivos
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recuperacion de cuenta';
    $mail->Body    = "Se reinicio tu contraseña: ". $contr;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
	echo "<meta http-equiv='REFRESH'content='0;URL=../index.php'>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
	
}else{
	echo "<meta http-equiv='REFRESH'content='0;URL=../recuperar_contra.html'>";
	echo '<script>alert("Correo invalido");</script>';
}
?>












