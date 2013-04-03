<?php

if (isset($_POST['nr_pytan']) && isset($_POST['nazwa'])){		
	echo "dasd";
	$nr_pytan = $_POST['nr_pytan'];
	$nazwa = $_POST['nazwa'];
	$idnauczyciela = 1;
		
		$zapytanie = "INSERT INTO testy (`idtestu`,`nazwa`,`nr_pytan`,`idnauczyciela`) VALUES (NULL,'$nr_pytan','$nazwa','$idnauczyciela')";
	$idzapytania = mysql_query($zapytanie);		
}
	?>