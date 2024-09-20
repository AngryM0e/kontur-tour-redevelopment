<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

$email=$_POST['mail'];
$FIO=$_POST['fio'];
$phone=$_POST['phone'];
function generatePassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
}
 


 include("start.php");
 $password=generatePassword(8);
mysql_query('SET NAMES "utf8"');
 $query="insert into klient(director,mail,telefon,pw,registered,is_turist,skidka) VALUES('$FIO','$email','$phone','$password',0,1,0) ";
 $result = mysql_query($query) or  die("Query failed : " . mysql_error());
 $login='user'.mysql_insert_id();
 $id=mysql_insert_id();
 mysql_query("update klient set login='$login' where id_klient='$id' ");
 //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kontur.tour@gmail.com';                     //SMTP username
    $mail->Password   = 'wmF9fABf';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($email, 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional

    //Attachments
  //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Предварительная регистрация';
	$mail->CharSet = 'UTF-8';
    $mail->Body    = 'Вы оставили заявку на регистрацию <br>
	ваш логин:'.$login.' <br>пароль:'.$password.'';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 
 
 
 
 

?>