<?php

include 'connection.php';

$basequery = "SELECT * FROM AdresyUrl";
$wynik = mysqli_query($connection, $basequery);

while($row = mysqli_fetch_array($wynik))

{echo $row['ID'] . " " . $row['Adres_url']; echo "<br>"; }

mysqli_close($baza);

?> 
