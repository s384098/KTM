<h1><span>EDYCJA UŻYTKOWNIKÓW</span></h1><br />

<?php

$query = mysql_query('SELECT * FROM uzytkownicy');
$oceny = '';	
while($rekord = mysql_fetch_array($query)){
	$oceny .= '<div id="lista">
	<div id="nazwa">'.$rekord["login"].'</div>
	<div id="nazwa">'.$rekord["imie"].' '.$rekord["nazwisko"].'</div>
	<div id="edycja"><a href="index.php?id=panel_usun_uzytkownika&iduzytkownika='.$rekord["iduser"].'"><img src="img/img05.png" alt="Usuń" /></a></div>
	<div id="edycja"><a href="index.php?id=panel_edytuj_uzytkownika&iduzytkownika='.$rekord["iduser"].'"><img src="img/img04.png" alt="Edytuj" /></a></div>
	</div>';
}
echo '<div id="pasek">
		<div id="nazwa1">LOGIN</div>
		<div id="nazwa1">IMIĘ I NAZWISKO</div>
		<div id="edycja1">USUŃ</div>
		<div id="edycja1">EDYTUJ</div>
		</div>';
echo $oceny;

		
?>
