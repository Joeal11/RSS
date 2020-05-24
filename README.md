# RSS
RSS Projekt WSB

Instrukcja

Aplikacja ma za zadanie wysyłać wiadomości mail rss do adresatów i z linkami zebranymi w bazie.  Bazę adresatow i linków można uzupełniać z frontu.

![rss front](https://user-images.githubusercontent.com/57830635/82755576-bb58ad80-9dd4-11ea-8f68-39fcb17f9795.png)

















Dla prawidłowego działania wymagane jest skonfigurowanie kilku plików zgodnie z utworzoną bazą oraz samo utworzenie bazy. Szczegóły poniżej

Pliki wymagające konfiguracji:<br>
1. connection.php<br>
2. send_mail.php<br>


1. Konfiguracja serwera MySql i tworzenie bazy

Nazwa bazy i uzytkownika podane są jako przykładowe, mogą być dowolne.

	a) zaloguj się do https://portal.azure.com/

	b) w pasku wyszukiwania wpisz mysql i wybierz „Serwer usługi Azure Database dla 	MySQL”

![Azure1a](https://user-images.githubusercontent.com/57830635/82755657-505ba680-9dd5-11ea-99ed-9ac1cd93fe5a.png)









	c) dodaj nowy serwer

![azure1b](https://user-images.githubusercontent.com/57830635/82755762-0e7f3000-9dd6-11ea-9d73-2c23ba48df9f.png)


	d) uzupełnij wymagane dane i przejdź do przeglądania i tworzenia














	e) W konfiguracji serwera możesz zmniejszyć ilość procesorów do 1 i przestrzeń do 5GB












	f) utwórz zasób

2. Stworzenie bazy danych

	a) po utworzeniu serwera w prawym górnym rogu na zasobie zobaczysz swoje dane do 	komunikacji. 

	w tym wypadku jest to:
	nazwa serwera: maindatabase.mysql.database.azure.com
	nazwa użytkownika: lrozwora@maindatabase
	hasło: nie jest widoczne, jest to hasło, które wpisałeś przy tworzeniu serwera









	b) korzystając z terminala komend mysql połącz się z serwerem 
		
> mysql -h maindatabase.mysql.database.azure.com -u lrozwora@maindatabase – p password

	c) utwórz bazę danych „dowolna nazwa”

> CREATE DATABASE dowolna nazwa

d) utwórz w bazie dwie tabele (aby nie zmieniać dodatkowych plików php to niech tabele mają odpowiednio nazwy: AdresyMail, AdresyUrl i zawierają odpowiednio kolumny Adres_Mail, Adres_Url


3. Konfiguracja plików<br><br>

	1. connection.php (poniżej dane przykładowe)<br>

	$host = 'joealdatabase.mysql.database.azure.com';<br>
 	$login_bazy_danych = 'joeal@joealdatabase'; <br>
	$haslo_bazy_danych = '*****';<br>
	$nazwa_bazy_danych = 'joealdb';<br><br>

	2. send_mail (poniżej dane przykładowe)<br>

	$mailer->IsSMTP();<br>
	$mailer->SMTPAuth = true;<br>
	$mailer->SMTPSecure = 'ssl';<br>
	$mailer->Port = 465;<br>
	$mailer->Host = 'poczta.interia.pl';<br>
	$mailer->Username = 'joeal';<br>
	$mailer->Password = '****';<br><br>
