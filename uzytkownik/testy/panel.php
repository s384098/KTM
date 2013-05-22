<h1><span>MOJE TESTY</span></h1><br />
<?PHP
if (isset($_SESSION['zalogowany'])){


$query = mysql_query('SELECT idtestu, nazwa FROM testy WHERE idnauczyciela = '.$_SESSION['id'].'');
		$wpis = '';	
		while($rekord = mysql_fetch_array($query)){
			$wpis .= '<div id="lista">
						<div id="nazwa">'.$rekord["nazwa"].'</div>
						<div id="edycja"><a href="index.php?id=usun_moj_test&idtestu='.$rekord["idtestu"].'"><img src="img/img05.png" alt="Usuń" /></a></div>
						<div id="edycja"><a href="index.php?id=edytuj_moj_test&idtestu='.$rekord["idtestu"].'"><img src="img/img04.png" alt="Edytuj" /></a></div>
						<div id="edycja"><a href="index.php?id=drukuj_moj_test&idtestu='.$rekord["idtestu"].'"><img src="img/img06.png" alt="Drukuj" /></a></div>
						<div id="edycja"><a href="index.php?id=podglad_moj_test&idtestu='.$rekord["idtestu"].'"><img src="img/img07.png" alt="Podgląd" /></a></div>
						</div>';
		}
		echo '<div id="pasek">
				<div id="nazwa1">NAZWA TESTU</div>
				<div id="edycja1">USUŃ</div>
				<div id="edycja1">EDYTUJ</div>
				<div id="edycja1">DRUKUJ</div>
				<div id="edycja1">PODGLĄD</div>
			</div>';
 		echo $wpis;

		
$query = mysql_query('SELECT idtestu, nazwa_testu FROM moje_testy WHERE idnauczyciela = '.$_SESSION['id'].'');
		$wpis = '';	
		while($rekord = mysql_fetch_array($query)){
			$wpis .= '<tr>
    		<td align="center" bgcolor="#EBEBEB"><b>'.$rekord["nazwa"].'</b></td>
		    <td align="center" bgcolor="#EBEBEB"><a href="index.php?id=podglad_moj_test&idtestu='.$rekord["idtestu"].'">podglad</a></td>
			<td align="center" bgcolor="#EBEBEB"><a href="index.php?id=drukuj_moj_test&idtestu='.$rekord["idtestu"].'">drukuj</a></td>
			<td align="center" bgcolor="#EBEBEB"><a href="index.php?id=usun_moj_test&idtestu='.$rekord["idtestu"].'">usuń</a></td>
			</tr>
			
			<div id="lista">
			<div id="nazwa">'.$rekord["nazwa"].'</div>
			<div id="edycja"><a href="index.php?id=usun_moj_test&idtestu='.$rekord["idtestu"].'"><img src="img/img05.png" alt="Usuń" /></a></div>
			<div id="edycja"><a href="index.php?id=drukuj_moj_test&idtestu='.$rekord["idtestu"].'"><img src="img/img06.png" alt="Drukuj" /></a></div>
			<div id="edycja"><a href="index.php?id=podglad_moj_test&idtestu='.$rekord["idtestu"].'"><img src="img/img07.png" alt="Podgląd" /></a></div>
			</div>';
		}
		echo '<BR /><div id="pasek">
				<div id="nazwa1">EDYTOWANE TESTY</div>
				<div id="edycja1">USUŃ</div>
				<div id="edycja1">DRUKUJ</div>
				<div id="edycja1">PODGLĄD</div>
			</div>';
 		echo $wpis;
		echo '</table>';

		
}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
}
?>
