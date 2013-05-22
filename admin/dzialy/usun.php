<h1><span>USUNIĘCIE DZIAŁU</span></h1><br />

<div id="pasek">
	<div id="nazwa_pytania">CZY JESTEŚ PEWNY, ŻE CHCESZ USUNĄĆ DZIAŁ?</div>
	<div id="edycja1">USUŃ</div>
	<div id="edycja1">POZOSTAW</div>
</div>
<div id="lista">
<div id="nazwa_uwagi">Jeżeli usuniesz dział użytkownicy nie będą mieli dostepu do zadań wpisachy w tym dziale!!</div>
<div id="edycja"><a href="index.php?id=panel_dzialy_usun&iddzialu_tak=<?php echo $_GET['iddzialu']; ?>"><img src="img/img05.png" alt="Usuń" /></a></div>
<div id="edycja"><a href="index.php?id=panel_dzialy"><img src="img/img08.png" alt="Pozostaw" /></a></div>
</div>
<?php
if (isset($_GET['iddzialu_tak'])){
	$id = $_GET['iddzialu_tak'];
	$zapytanie = "DELETE FROM `dzialy` WHERE `iddzialu`='$id'";
	$idzapytania = mysql_query($zapytanie); 
	header('location: index.php?id=panel_dzialy');
	exit;
}
?>
