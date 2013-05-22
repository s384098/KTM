<h1><span>EDYTUJ MÓJ TEST</span></h1><br />
<?PHP
if (isset($_SESSION['zalogowany'])){



$idtestu = $_GET["idtestu"];
$query = mysql_query('select nazwa, nr_pytan from testy where idtestu = '.$idtestu.'');
$rekord = mysql_fetch_array($query);
$nazwa = $rekord["nazwa"];
$test = (json_decode($rekord["nr_pytan"], true));

$n = count($test);
echo '<form method="post" action="index.php?id=edytuj_moj_test" enctype="multipart/form-data">';
echo '<fieldset><legend><b>Nazwa testu:</b></legend><input type="text" size="111" name="nazwa_testu" value="'.$nazwa.'"/></fieldset>';
	$e =1;
	for($i = 0; $i < $n; $i++){
		foreach($test[''.$i.''] as $klucz => $wartosc) {
			$query = mysql_query("SELECT * FROM pytania WHERE idpytania='$wartosc'");
			while($rekord = mysql_fetch_assoc($query)){
				echo '<fieldset><legend><b>Pytanie nr '.$e++.':</b></legend><textarea cols="88" rows="10" name="pytanie">'.$rekord["pytanie"].'</textarea></fieldset>';
				if ($rekord["prawidlowa"]=='1' || $rekord["prawidlowa"]=='2' || $rekord["prawidlowa"]=='3' || $rekord["prawidlowa"]=='4'){
				$p1=''; $p2=''; $p3=''; $p4='';
				if ($rekord["prawidlowa"]=='1'){$p1='checked="checked"';}
				elseif ($rekord["prawidlowa"]=='2'){$p2='checked="checked"';} 
				elseif ($rekord["prawidlowa"]=='3'){$p3='checked="checked"';} 
				elseif ($rekord["prawidlowa"]=='4'){$p4='checked="checked"';}
				echo '<fieldset><legend><b>Odpowiedzi:</b></legend>
				<input type="radio" '.$p1.' value="1" name="prawidlowa"/>
				a) <input type="text" size="105" name="odp1" value="'.$rekord["odp1"].'" /><br />
				<input type="radio" '.$p2.' value="2" name="prawidlowa"/>
				b) <input type="text" size="105" name="odp2" value="'.$rekord["odp2"].'" /><br />
				<input type="radio" '.$p3.' value="3" name="prawidlowa"/>
				c) <input type="text" size="105" name="odp3" value="'.$rekord["odp3"].'" /><br />
				<input type="radio" '.$p4.' value="4" name="prawidlowa"/>
				d) <input type="text" size="105" name="odp4" value="'.$rekord["odp4"].'" /></fieldset>';}
				if ($rekord["prawidlowa"]=='A'){echo '<fieldset><legend><b>Komentarz:</b></legend><textarea cols="88" rows="10" name="komentarz">'.$rekord["komentarz"].'</textarea></fieldset>';}
				echo '<br />';
			}
		}
	}
	echo '<fieldset>
		<input type="submit" name="submit" value="Zapisz zmiany"/>
	</fieldset>';
echo '</form>';

}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
}
?>
