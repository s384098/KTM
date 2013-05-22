<h1><span>PANEL ADMINISTRATORA</span></h1><br /><br />
<?php if (isset($_SESSION['uprawnienia']) && $_SESSION['uprawnienia'] == 1) { 
echo '<div id="uzytkownicy">
			<img id="obrazek" src="img/img01.png"/>
			<div id="tekst_admin"><center><p>Zarządzanie użytkownikami</p></center></div>
			<a href="index.php?id=panel_dodaj_uzytkownika"><div id="admin_dodaj"><center><p>DODAJ</p></center></div></a>
			<a href="index.php?id=panel_uzytkownicy"><div id="admin_lista"><center><p>EDYTUJ</p></center></div></a>
		</div>
		<div id="dzialy">
			<img id="obrazek" src="img/img03.png"/>
			<div id="tekst_admin"><center><p>Zarządzanie działami</p></center></div>
			<a href="index.php?id=panel_dodaj_dzial"><div id="admin_dodaj"><center><p>DODAJ</p></center></div></a>
			<a href="index.php?id=panel_dzialy"><div id="admin_lista"><center><p>EDYTUJ</p></center></div></a>
		</div>
		<div id="zadania">
			<img id="obrazek" src="img/img02.png"/>
			<div id="tekst_admin"><center><p>Zarządzanie zadaniami</p></center></div>
			<a href="index.php?id=panel_dodaj_zadanie"><div id="admin_dodaj"><center><p>DODAJ</p></center></div></a>
			<a href="index.php?id=panel_zadania"><div id="admin_lista"><center><p>EDYTUJ</p></center></div></a>
		</div>';
}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
}
?>		