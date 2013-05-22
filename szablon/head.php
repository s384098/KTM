<title>Kreatortestow.pl - KREATOR TESTÓW MATEMATYCZNYCH</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/style.css" type="text/css" />

<?php
if (isset($_SESSION['zalogowany'])){
	include "szablon/MathJax.html" ;
	if(isset($_GET['id']) && $_GET['id']=="dodaj_test"){
		include "szablon/nestable.html" ;
	}else{
		include "szablon/fancybox.html" ;
	}
}else{
	include "szablon/slides.html" ;
}

?>