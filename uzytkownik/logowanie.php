<?php
if (!isset($_SESSION['zalogowany'])) { // dostęp dla niezalogowanego użytkownika   
// 1 linijka sprawdza czy jest login i haslo (jesli tego by nie bylo wyskakiwalo by nie ma takiego loginu)
	if (isset($_POST['login']) && isset($_POST['haslo'])){
		$login = trim($_POST['login']); //trim - z loginu usuwamy spacje
		$haslo = md5($_POST['haslo']); //hasło kodujemy funkcja skrutu MD5
		$loguj = mysql_query ("select * from `uzytkownicy` where `login` = '$login' and `haslo` = '$haslo'");
		$stan = mysql_num_rows($loguj);
		
//pobranie z bazy loginu i hasła wpisanego w formularzu
		if($stan==1){
			$_SESSION['zalogowany'] = $_POST['login']; // jeżeli istnieje taki użytkownik w bazie wpisujemy jego login do sesji
			while($row = mysql_fetch_array($loguj))
			{
			$_SESSION['id'] = $row["iduser"];
			$_SESSION['imie'] = $row["imie"];
			$_SESSION['nazwisko'] = $row["nazwisko"];
			$_SESSION['nazwa_szkoly'] = $row["nazwa_szkoly"];
			$_SESSION['email'] = $row["email"];
			$_SESSION['uprawnienia'] = $row["uprawnienia"];
			}
			header('location: index.php?id=index'); //Przechodzimy do strony glownej
			exit;
		}else{
			header('location: index.php?id=index'); //Przechodzimy do strony glownej
			exit;
		}
	}
}
?>