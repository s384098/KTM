<?PHP
if (isset($_SESSION['zalogowany'])){



if(isset($_GET['idpytania'])){
	$id = $_GET['idpytania'];
	$zapytanie = "DELETE FROM `pytania` WHERE `idpytania`='$id'";
	$idzapytania = mysql_query($zapytanie); 
	header('location: index.php?id=panel_zadania');
	exit;
}else{
	header('location: index.php?id=panel_zadania');
	exit;
}
}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
}
?>
