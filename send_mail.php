<?php
require_once('phpmailer-5.2.7/PHPMailerAutoload.php');
$mailer = new PHPMailer(true);

$mailer->IsSMTP();
$mailer->SMTPAuth = true;
$mailer->SMTPSecure = 'ssl';
$mailer->Port = 465;
$mailer->Host = 'poczta.interia.pl';
$mailer->Username = 'joeal';
$mailer->Password = '****';

include 'connection.php';

$basequerymail = "SELECT * FROM AdresyMail";
$basequeryurl = "SELECT * FROM AdresyUrl";

$wynikmail = mysqli_query($connection, $basequerymail);
$wynikurl = mysqli_query($connection, $basequeryurl);

while ( $row = mysqli_fetch_array($wynikmail) )
{ 
  while ( $row = mysqli_fetch_array($wynikurl) )
  {
    $to = "{$row['Adres_mail']}";
    $subject = "RSS powiadomienie";
    $message = "{$row['Adres_url']},' '<a href='{$row['Adres_url']}'></a><br><br>";
    $header = "From: $email \nContent-Type:".
            ' text/plain;charset="UTF-8"'.
            "\nContent-Transfer-Encoding: 8bit";

    mail($to, $subject, $message, $header);

  }
}

?>