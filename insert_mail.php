<?php

include 'connection.php';

mysql_select_db("RSS_DB_Mail", $con);
  
$sql="INSERT INTO AdresyMail (Adres_mail)
VALUES
('$_POST[Adres mail]')";
  
if (!mysql_query($sql,$con))
  {
  die('Blad: ' . mysql_error());
  }
echo "Dodano wpis!";
  
mysql_close($con)
?>
