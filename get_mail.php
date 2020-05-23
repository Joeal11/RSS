<?php

$baza=mysqli_connect("rssjoeal.database.windows.net","joeal","***","RSS_DB_Mail");

if (mysqli_connect_errno())

{echo "Wystąpił błąd połączenia z bazą";}

$wynik = mysqli_query($baza,"SELECT ID, Adres_mail FROM AdresyMail");

while($row = mysqli_fetch_array($wynik))

{echo $row['ID'] . " " . $row['Adres_mail']; echo "<br>"; }

mysqli_close($baza);

?> 