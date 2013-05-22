<h1><span>MOJE PYTANIA</span></h1><br />
<?PHP
if (isset($_SESSION['zalogowany'])){


$query = mysql_query('SELECT * FROM pytania WHERE idnauczyciela = '.$_SESSION['id'].' and iddzialu = 0');
		$oceny = '';	
		while($rekord = mysql_fetch_array($query)){
			$oceny .= '<div id="lista_pytania">
			<div id="nazwa_pytania">'.$rekord["pytanie"].'</div>
			<div id="edycja"><a href="index.php?id=usun_pytanie&idpytania='.$rekord["idpytania"].'"><img src="img/img05.png" alt="Usuń" /></a></div>
			<div id="edycja"><a href="index.php?id=edytuj_pytanie&idedytuj='.$rekord["idpytania"].'"><img src="img/img04.png" alt="Edytuj" /></a></div>
			</div>';
		}
		echo '<div id="pasek">
				<div id="nazwa1">TREŚĆ</div>
				<div id="edycja1">USUŃ</div>
				<div id="edycja1">EDYTUJ</div>
				</div>';
 		echo $oceny;

		
}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
}
?>
