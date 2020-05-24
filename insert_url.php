<?php

include 'connection.php';

mysql_select_db("RSS_DB_Url", $con);
  
$sql="INSERT INTO AdresyUrl (Adres_url)
VALUES
('$_POST[Adres url]')";
  
if (!mysql_query($sql,$con))
  {
  die('Blad: ' . mysql_error());
  }
echo "Dodano wpis!";  
  
mysql_close($con)
?>
