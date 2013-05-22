<h1><span>DRUKUJ</span></h1><br />
<?PHP
if (isset($_SESSION['zalogowany'])){



$idtestu = $_GET["idtestu"];
$query = mysql_query('select nazwa, nr_pytan from testy where idtestu = '.$idtestu.'');
$rekord = mysql_fetch_array($query);
$nazwa = $rekord["nazwa"];
$test = (json_decode($rekord["nr_pytan"], true));
$e=1;
$n = count($test);
	for($i = 0; $i < $n; $i++){
		foreach($test[''.$i.''] as $klucz => $wartosc) { 
			if($wartosc == 'a'){echo '<div id="temat"><div id="nazwa_druk"><p>NAZWA TESTU: <b>'.$nazwa.'</b></div> <div id="grupa">GRUPA: <b>A</b></p></div></div>';}
			if($wartosc == 'b'){echo '<div id="nazwisko"><p>IMIĘ I NAZWISKO: ____________________________________________________ KLASA: ________________________</p></div>';}
			$query = mysql_query("SELECT * FROM pytania WHERE idpytania='$wartosc'");
			while($rekord = mysql_fetch_assoc($query)){
				echo '<div id="zadanie"><b>'.$e++.'. '.$rekord["pytanie"].'</b><br />';
				if ($rekord["prawidlowa"]=='1' || $rekord["prawidlowa"]=='2' || $rekord["prawidlowa"]=='3' || $rekord["prawidlowa"]=='4'){
				echo 'a)'.$rekord["odp1"].'<br />';
				echo 'b)'.$rekord["odp2"].'<br />';
				echo 'c)'.$rekord["odp3"].'<br />';
				echo 'd)'.$rekord["odp4"].'<br />';}
				if ($rekord["prawidlowa"]=='A'){echo '<br /><img src="img/kratka.jpg" alt="Kratka" />';}
				echo '</div><br />';
			}
		}
	}
}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
}
?>
