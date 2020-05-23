<?php

$adres = "joeal@interia.pl";
$tytul = "Tytuł wiadomości";
$wiadomosc = "Treść przykładowej wiadomości wysyłanej bezpośrednio z kodu za pomocą funkcji mail().";

// użycie funkcji mail
mail($adres, $tytul, $wiadomosc);

?>

<?php
require_once('phpmailer-5.2.7/PHPMailerAutoload.php');
$mailer = new PHPMailer(true);
  
$mailer->Sender = 'joeal@interia.pl';
$mailer->SetFrom('bbaggins@example.com', 'Bilbo Baggins');
$mailer->AddAddress('test@interia.pl');
$mailer->Subject = 'RSSTest';
$mailer->MsgHTML('<p>urlrss</p>');
  
// konfiguracja połączenia
$mailer->IsSMTP();
$mailer->SMTPAuth = true;
$mailer->SMTPSecure = 'ssl';
$mailer->Port = 465;
$mailer->Host = 'poczta.interia.pl';
$mailer->Username = 'joeal@interia.pl';
$mailer->Password = 'hasło SMTP';
  
// zrobione
$mailer->Send();
?>