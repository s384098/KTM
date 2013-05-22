<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
			ob_start();
			session_start();
			include "szablon/head.php" ;
			include "mysql/mysql.php" ;
		?>
	</head>
	<body>
		<?php
			include "szablon/menu.php";
			include "szablon/panel.php";

			if(empty($_GET['id']) or $_GET['id']=="index"){
				include("szablon/strona_glowna.php"); 
			}
			if (isset($_GET['id'])){
			
				//SZABLON
				if($_GET['id']=="kontakt"){
					include("szablon/kontakt.php");
				}
				if($_GET['id']=="pomoc"){
					include("szablon/pomoc.php");
				}
				
				//DEMO
				if($_GET['id']=="demo"){
					include("szablon/demo.php");
				}
				
				//UŻYTKOWNIK
				if($_GET['id']=="logowanie"){
					include("uzytkownik/logowanie.php");
				}
				if($_GET['id']=="wylogowanie"){
					include("uzytkownik/wylogowanie.php");
				}
				if($_GET['id']=="edycja_danych"){
					include("uzytkownik/edycja_danych.php");
				}
				if($_GET['id']=="moje_pytania"){
					include("uzytkownik/pytania/panel.php");
				}
				if($_GET['id']=="edytuj_pytanie"){
					include("uzytkownik/pytania/edytuj.php");
				}
				if($_GET['id']=="usun_pytanie"){
					include("uzytkownik/pytania/usun.php");
				}
				if($_GET['id']=="dodaj_moje_pytanie"){
					include("uzytkownik/pytania/dodaj.php");
				}
				if($_GET['id']=="moje_testy"){
					include("uzytkownik/testy/panel.php");
				}
				if($_GET['id']=="dodaj_test"){
					include("uzytkownik/testy/dodaj.php");
				}
				if($_GET['id']=="podglad_moj_test"){
					include("uzytkownik/testy/podglad.php");
				}
				if($_GET['id']=="drukuj_moj_test"){
					include("uzytkownik/testy/drukuj.php");
				}
				if($_GET['id']=="edytuj_moj_test"){
					include("uzytkownik/testy/edytuj.php");
				}
				if($_GET['id']=="usun_moj_test"){
					include("uzytkownik/testy/usun.php");
				}
				
				//ADMINISTRATOR
				if($_GET['id']=="panel_adminstratora"){
					include("admin/panel_administratora.php");
				}
				if($_GET['id']=="panel_uzytkownicy"){
					include("admin/uzytkownicy/panel.php");
				}
				if($_GET['id']=="panel_usun_uzytkownika"){
					include("admin/uzytkownicy/usun.php");
				}
				if($_GET['id']=="panel_edytuj_uzytkownika"){
					include("admin/uzytkownicy/edytuj.php");
				}
				if($_GET['id']=="panel_dodaj_uzytkownika"){
					include("admin/uzytkownicy/dodaj.php");
				}
				if($_GET['id']=="panel_dzialy"){
					include("admin/dzialy/panel.php");
				}
				if($_GET['id']=="panel_dodaj_dzial"){
					include("admin/dzialy/dodaj.php");
				}
				if($_GET['id']=="panel_dzialy_usun"){
					include("admin/dzialy/usun.php");
				}
				if($_GET['id']=="panel_dodaj_zadanie"){
					include("admin/pytania/dodaj.php");
				}
				if($_GET['id']=="panel_zadania"){
					include("admin/pytania/panel.php");
				}
				if($_GET['id']=="panel_usun_pytanie"){
					include("admin/pytania/usun.php");
				}
				if($_GET['id']=="panel_edytuj_pytanie"){
					include("admin/pytania/edytuj.php");
				}
			}

			include('szablon/stopka.php');
		?>
	</body>
</html>