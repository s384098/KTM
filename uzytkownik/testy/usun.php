<?PHP
if (isset($_SESSION['zalogowany'])){


if(isset($_GET['idtestu'])){
	$id = $_GET['idtestu'];
	$zapytanie = "DELETE FROM `testy` WHERE `idtestu`='$id'";
	$idzapytania = mysql_query($zapytanie); 
	header('location: index.php?id=moje_testy');
	exit;
}else{
	header('location: index.php?id=moje_testy');
	exit;
}


}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
}
?>
