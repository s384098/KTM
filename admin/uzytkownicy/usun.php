<h1><span>EDYCJA UŻYTKOWNIKÓW</span></h1><br />

<?php

if(isset($_GET['iduzytkownika'])){
	$id = $_GET['iduzytkownika'];
	$zapytanie = "DELETE FROM `uzytkownicy` WHERE `iduser`='$id'";
	$idzapytania = mysql_query($zapytanie); 
	header('location: index.php?id=panel_uzytkownicy');
	exit;
}else{
	header('location: index.php?id=panel_uzytkownicy');
	exit;
}		
	
?>
