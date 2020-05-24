<?php 
 
 $host = 'rssjoeal.database.windows.net';
 $login_bazy_danych = 'joeal'; 
 $haslo_bazy_danych = 'Alabama11';
 $nazwa_bazy_danych = 'RSS_DB_Mail';

 $table_mail = '';
 $table_url = '':
 
 $connection = mysqli_connect($host, $login_bazy_danych,$haslo_bazy_danych, $nazwa_bazy_danych);
 
 if ( !$connection ) 
    {echo "Wystąpił błąd połączenia z bazą";
 	  exit (0);
 }

 ?>