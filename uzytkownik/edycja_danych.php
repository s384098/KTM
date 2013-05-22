<h1><span>EDYCJA DANYCH</span></h1><br />
<?PHP
if (isset($_SESSION['zalogowany'])){


if (isset($_POST['dane'])){
	if (isset($_POST['imie']) &&  isset($_POST['nazwisko']) &&  isset($_POST['nazwa_szkoly'])){

		$imie = trim($_POST['imie']);
		$nazwisko = trim($_POST['nazwisko']);
		$nazwa_szkoly = $_POST['nazwa_szkoly'];
		$login = $_SESSION['zalogowany'];

		$query="UPDATE uzytkownicy SET imie='$imie', nazwisko='$nazwisko', nazwa_szkoly='$nazwa_szkoly' WHERE login='$login'";
		mysql_query($query);
		$_SESSION['imie'] = $imie;
		$_SESSION['nazwisko'] = $nazwisko;
		$_SESSION['nazwa_szkoly'] = $nazwa_szkoly;
		echo'<p>Dane zostały zaktualizowane.</p>';
	}
}
if (isset($_POST['przyciskhaslo'])){
if (isset($_POST['haslo']) &&  isset($_POST['haslo1']) &&  isset($_POST['haslo2'])){

		$haslo = md5($_POST['haslo']);
		$haslo1 = md5($_POST['haslo1']);
		$haslo2 = md5($_POST['haslo2']);
		$login = $_SESSION['zalogowany'];
		$sql = mysql_query("SELECT `haslo` FROM uzytkownicy WHERE login = '$login'");
		while($row = mysql_fetch_array($sql)){
			$haslo12 = $row["haslo"];}
			$blad = '0';
			if ( strlen($_POST['haslo1'])<5 && strlen($_POST['haslo1'])>30 ){
				echo '<p>Podane hasło jest za krótkie lub za długie (od 5 do 30 znaków).</p>';
				$blad++;	
			}
	 		if ($haslo !== $haslo12) {
				echo '<p>Stare hasło jest nieprawidłowe.</p>';
				$blad++;
        	}
 	 		if ($haslo2 !== $haslo1) {
				echo '<p>Podane nowe hasła nie są ze sobą zgodne.</p>';
        		$blad++;
			}
			if($blad == 0){
			$query="UPDATE uzytkownicy SET haslo='$haslo1' WHERE haslo='$haslo' AND login='$login'";
			mysql_query($query);
			echo '<p>Hasło zostało zmienione.</p>';
		}
	}
}
if (isset($_POST['mail'])){
	if (isset($_POST['haslo']) &&  isset($_POST['email'])){

		$haslo = md5($_POST['haslo']);
		$email = trim($_POST['email']);
		$login = $_SESSION['zalogowany'];

		if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email)) 
		{
			echo'<p>Podany adres e-mail jest niepoprawny.</p>';
		}else{

			$query="UPDATE uzytkownicy SET email='$email' WHERE haslo='$haslo' AND login='$login'";
			mysql_query($query);
			$_SESSION['email'] = $email;
			echo '<p>Adres e-mail został zmieniony.</p>';
		}
	}
}
?>
<div id="pasek">
	<div id="nazwa1">ZMIEŃ HASŁO</div>
</div>
<form method="post" action="index.php?id=edycja_danych" enctype="multipart/form-data">
	<div id="lista">
		<div id="nazwa">Wpisz stare hasło:</div>
		<div id="nazwa"><input type="password" name="haslo" size="70" /></div>
	</div>
	<div id="lista">
		<div id="nazwa">Wpisz nowe hasło:</div>
		<div id="nazwa"><input type="password" name="haslo1" size="70"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Powtórz nowe hasło:</div>
		<div id="nazwa"><input type="password" name="haslo2" size="70"/></div>
	</div>
	<div id="lista">
		<div id="nazwa"><input type="submit" name="przyciskhaslo" value="Zmień haslo" /> </div>
	</div>
</form><br />
		
<div id="pasek">
	<div id="nazwa1">ZMIEŃ SWOJE DANE</div>
</div>

<form method="post" action="index.php?id=edycja_danych" enctype="multipart/form-data">
	<div id="lista">
		<div id="nazwa">Imię:</div>
		<div id="nazwa"><input type="text" name="imie" size="70"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Nazwisko:</div>
		<div id="nazwa"><input type="text" name="nazwisko" size="70"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Nazwa szkoły:</div>
		<div id="nazwa"><input type="text" name="nazwa_szkoly" size="70"/></div>
	</div>
	<div id="lista">
		<div id="nazwa"><input type="submit" name="dane" value="Zmień dane" />  </div>
	</div>
</form><br />
		
<div id="pasek">
	<div id="nazwa1">ZMIEŃ SWÓJ ADRES E-MAIL</div>
</div>
<form method="post" action="index.php?id=edycja_danych" enctype="multipart/form-data" >
	<div id="lista">
		<div id="nazwa">Aktualny adres e-mail: <b><?php echo $_SESSION['email']; ?></b></div>
	</div>
	<div id="lista">
		<div id="nazwa">Potwierdzenie hasłem:</div>
		<div id="nazwa"><input type="password" name="haslo" size="70"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Wpisz nowy adres e-mail:</div>
		<div id="nazwa"><input type="text" name="email" size="70"/></div>
	</div>
	<div id="lista">
		<div id="nazwa"><input type="submit" name="mail" value="Zmień e-mail" />
	</div>
</form>
		



<?php 
}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
} 
?>