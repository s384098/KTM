<h1><span>DAODAJ NOWEGO UŻYTKOWNIKA</span></h1><br />



<div id="pasek">
	<div id="nazwa1">NOWY UŻYTKOWNIK</div>
</div>
<form method="post" action="index.php?id=panel_dodaj_uzytkownika" enctype="multipart/form-data">
	<div id="lista">
		<div id="nazwa">Imię:</div>
		<div id="nazwa"><input type="text" size="70" name="imie"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Nazwaisko: </div>
		<div id="nazwa"><input type="text" size="70" name="nazwisko"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Login: </div>
		<div id="nazwa"><input type="text" size="70" name="login"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Nazwa szkoły: </div>
		<div id="nazwa"><input type="text" size="70" name="nazwa_szkoly"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">E-mail: </div>
		<div id="nazwa"><input type="text" size="70" name="email"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Uprawnienia: </div>
		<div id="nazwa"><select name="uprawnienia">
			<option value="2">Nauczyciel</option>
			<option value="1">Nauczyciel i administrator</option>
		</select></div>
	</div>
	<div id="lista">
		<div id="nazwa"><input type="submit" name="submit" value="Zapisz"/></div>
	</div>
</form>

<?php

if (isset($_POST['submit'])){
	if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['login']) && isset($_POST['nazwa_szkoly']) && isset($_POST['email']) && isset($_POST['uprawnienia'])){
		$imie = trim($_POST['imie']);
		$nazwisko = trim($_POST['nazwisko']);
		$login = trim($_POST['login']);
		$nazwa_szkoly = trim($_POST['nazwa_szkoly']);
		$email = trim($_POST['email']);
		$haslo = substr(md5(time().rand()),0,9);
		$md5_haslo = md5($haslo);
		$uprawnienia = trim($_POST['uprawnienia']);
		
		$zapytanie = "INSERT INTO uzytkownicy (`iduser`,`imie`,`nazwisko`,`nazwa_szkoly`,`login`,`haslo`,`email`,`uprawnienia`) VALUES (NULL,'$imie','$nazwisko','$nazwa_szkoly','$login','$md5_haslo','$email','$uprawnienia')";	
		mysql_query($zapytanie) or print mysql_error();	
		header('location: index.php?id=panel_uzytkownicy');
		exit;
	}
}

?>