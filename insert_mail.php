<html>
<body>
 
<?php

try {
    $conn = new PDO("sqlsrv:server = tcp:rssjoeal.database.windows.net,1433; Database = RSS_DB_Mail", "joeal", "***");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


mysql_select_db("RSS_DB_Mail", $con);
  
$sql="INSERT INTO AdresyMail (ID, Adres_mail)
VALUES
('$_POST[ID]','$_POST[Adres mail]')";
  
if (!mysql_query($sql,$con))
  {
  die('Blad: ' . mysql_error());
  }
echo "Dodano wpis!";
  
mysql_close($con)
?>
 
</body>
</html>