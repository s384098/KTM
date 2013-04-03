<?php
include('mysql.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>KREATOR TESTÓW MATEMATYCZNYCH</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.nestable.js"></script>
	<script>

	$(document).ready(function()
	{

		var updateOutput = function(e)
		{
			var list   = e.length ? e : $(e.target),
				output = list.data('output');
			if (window.JSON) {
				output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
			} else {
				output.val('JSON browser support required for this demo.');
			}
		};

		// activate Nestable for list 1
		$('#nestable').nestable({
			group: 1
		})
		.on('change', updateOutput);
		
		// activate Nestable for list 2
		$('#nestable2').nestable({
			group: 1
		})
		.on('change', updateOutput);

		// output initial serialised data
		updateOutput($('#nestable').data('output', $('#nestable-output')));
		updateOutput($('#nestable2').data('output', $('#nestable2-output')));

		$('#nestable-menu').on('click', function(e)
		{
			var target = $(e.target),
				action = target.data('action');
			if (action === 'expand-all') {
				$('.dd').nestable('expandAll');
			}
			if (action === 'collapse-all') {
				$('.dd').nestable('collapseAll');
			}
		});

		$('#nestable3').nestable();

	});
	</script>
</head>
<body>
	<div id="gora">
		<div id="gora_kontener">
			<div id="logo"><p><span>KREATOR</span>TESTÓW<span>.PL</span></p></div>
			<div id="menu">
				<ul>
				<li><a href="index.php?id=index">STRONA GŁÓWNA</a></li>
				<li><a href="index.php?id=1">KREATOR TESTÓW</a></li>
				<li><a href="index.php?id=3">INSTRUKCJA OBSŁUGI</a></li>
				<li><a href="index.php?id=2">KONTAKT</a></li>
			</ul>
			</div>
		</div>
	</div>
	<div id="wysrodkowany">
<div id="naglowek">
			<div id="naglowek_lewy">
				<div id="dane_nauczyciela">
				<p><b>Login:</b> nauczyciel01</p>
				<p><b>Imie:</b> Piotr</p>
				<p><b>Nazwisko:</b> Nowak</p>
				<p><b>Szkoła:</b> ZSK w Poznaniu</p>
				
				</div>
				<div id="opcje">
				<p><a href="#">Edycja danych</a></p>
				<p><a href="#">Moja pytania</a></p>
				<p><a href="#">Moje testy</a></p>
				<p><a href="#">Dziennik ocen</a></p>
				</div>
			</div>
			<div id="naglowek_prawy">
				<form action="...">
					<p><b>Zaloguj się:</b></p>
					<ol>
						<li>
							<label for="name">Login</label>
							<input type="text" name="name" id="name" />
						</li>
						<li>
							<label for="password">Hasło</label>
							<input type="password" name="password" id="password" />
						</li>
						<li>
							<button type="submit" id="send">Zaloguj</button>
						</li>
					</ol>
					<center><p><a href="#">Zapominiałem hasło</a> | <a href="#">Nie mam jeszcze konta</a></p></center>
				</form>
			</div>
			<div id="naglowek_dol"></div>
		</div>
		<div id="zawartosc_wlasciwa">



<?php
if(empty($_GET['id'])){
	include("strona_glowna.php"); 
}
if (isset($_GET['id'])){
switch ($_GET['id']):
    case 0:
        include('strona_glowna.php');
        break;
    case 1:
        include('dodaj_test.php');
        break;
    case 2:
        include('dodaj_pytanie.php');
        break;
	case 3:
        include('rejestracja.php');
        break;
	case 4:
        include('test.php');
        break;
    default:
        include('strona_glowna.php');
endswitch;
}

include('stopka.php');
?>