<h1><span>EDYCJA DZIAŁÓW</span></h1><br />

<div id="pasek">
	<div id="nazwa1">NAZWA DZIAŁU</div>
	<div id="edycja1">USUŃ</div>
</div>

<?php
$wpis='';
	$query1 = mysql_query("SELECT * FROM dzialy");
	while($rekord = mysql_fetch_array($query1)){
		$wpis .='<div id="lista"><div id="nazwa">'.$rekord["nazwa_dzialu"].'</div>
		<div id="edycja"><a href="index.php?id=panel_dzialy_usun&iddzialu='.$rekord["iddzialu"].'"><img src="img/img05.png" alt="Usuń" /></a></div></div>';
	}
	echo $wpis;
?>
