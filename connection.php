<?php 
 
 $host = 'joealdatabase.mysql.database.azure.com';
 $login_bazy_danych = 'joeal@joealdatabase'; 
 $haslo_bazy_danych = 'Alabama11';
 $nazwa_bazy_danych = 'RSS_DB';

 
 $connection = mysqli_connect($host, $login_bazy_danych,$haslo_bazy_danych, $nazwa_bazy_danych);
 
 if ( !$connection ) 
    {echo "Wystąpił błąd połączenia z bazą";
 	  exit (0);
 }

 ?>
