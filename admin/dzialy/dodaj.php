<h1><span>DODAJ NOWY DZIAŁ</span></h1><br />


<div id="pasek">
	<div id="nazwa1">DODAJ DZIAŁ</div>
</div>
<form method="post" action="index.php?id=panel_dodaj_dzial" enctype="multipart/form-data">
	<div id="lista">
		<div id="nazwa">Nazwa działu:</div>
		<div id="nazwa"><input type="text" size="70" name="dzial"/></div>
	</div>
	<div id="lista">
		<div id="nazwa"><input type="submit" name="submit" value="Zapisz"/></div>
	</div>
</form>

<?php
if (isset($_POST['submit'])){
	if (isset($_POST['dzial'])){
		$dzial = addslashes($_POST['dzial']);
		$zapytanie = "INSERT INTO dzialy (`iddzialu`,`nazwa_dzialu`) VALUES (NULL,'$dzial')";	
		mysql_query($zapytanie) or print mysql_error();	
		header('location: index.php?id=panel_dzialy');
		exit;
	}
}
?>