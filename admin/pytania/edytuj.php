<?php
if (isset($_SESSION['zalogowany'])){
echo'<h1><span>EDYCJA PYTANIA</span></h1><br />';



if(isset($_GET['idedytuj'])){
	$p1='';
	$p2='';
	$p3='';
	$p4='';
	$pA='nie';
	$id = $_GET['idedytuj'];
	$query = mysql_query("select * from pytania where `idpytania` = '$id'");
	$rekord = mysql_fetch_array($query);
	if ($rekord["prawidlowa"]=='1'){$p1='checked="checked"';} 
	elseif ($rekord["prawidlowa"]=='2'){$p2='checked="checked"';} 
	elseif ($rekord["prawidlowa"]=='3'){$p3='checked="checked"';} 
	elseif ($rekord["prawidlowa"]=='4'){$p4='checked="checked"';} 
	elseif ($rekord["prawidlowa"]=='A'){$pA='tak';}
	$lekcja = '
	<form method="post" action="index.php?id=panel_edytuj_pytanie" enctype="multipart/form-data">
	<fieldset>
		<a id="various1" href="#inline1">Dodaj znak matematyczny</a>
		<div style="display: none;">
		<div id="inline1" style="width:560px;height:363px;overflow:auto;">
			<div id="dragmath"> 
				<applet width="540" height="333" archive="DragMath.jar" code="Display.MainApplet.class" codebase="applet" name="DragMath">
					<param value="pl" name="language" />Aby wyświetlić DragMath potrzebujesz wtyczki Java. Ściągniesz ją tutaj: <a href="http://www.java.com/">Java.com</a>
				</applet>
				<form>
					<input type="button" value="Dodaj" onclick="renderLatex(); return true;" />
				</form>
			</div>
		</div>
	</div>
	</fieldset>
	<fieldset>
		<legend><b>Treść zadania:</b></legend>
		<input type="hidden" name="idpytania" value="'.$id.'" />
		<textarea cols="88" id="tekst" rows="10" name="pytanie">'.$rekord["pytanie"].'</textarea>
	</fieldset>';
	if($pA=='nie'){
	$lekcja .= '
	<fieldset>
		<legend><b>Odpowiedzi:</b></legend>
		<input type="radio" '.$p1.' value="1" name="prawidlowa"/>
		a) <input type="text" size="105" name="odp1" value="'.$rekord["odp1"].'" /><br />
		<input type="radio" '.$p2.' value="2" name="prawidlowa"/>
		b) <input type="text" size="105" name="odp2" value="'.$rekord["odp2"].'" /><br />
		<input type="radio" '.$p3.' value="3" name="prawidlowa"/>
		c) <input type="text" size="105" name="odp3" value="'.$rekord["odp3"].'" /><br />
		<input type="radio" '.$p4.' value="4" name="prawidlowa"/>
		d) <input type="text" size="105" name="odp4" value="'.$rekord["odp4"].'" />
	</fieldset>';
	}
	if($pA=='tak'){
	$lekcja .= '
	<fieldset>
		<legend><b>Komentarz:</b></legend>
		<textarea cols="88" rows="10" name="komentarz">'.$rekord["komentarz"].'</textarea>
		<input type="hidden" name="prawidlowa" value="A" />
	</fieldset>';
	}
	$lekcja .= '
	<fieldset>
		<input type="submit" name="submit" value="Zapisz zmiany"/>
	</fieldset>
	</form>';
}
echo $lekcja;

if (isset($_POST['submit'])){ 
	$idpytania = $_POST['idpytania'];
	$pytanie = addslashes($_POST['pytanie']);
	$odp1 = addslashes($_POST['odp1']);
	$odp2 = addslashes($_POST['odp2']);
	$odp3 = addslashes($_POST['odp3']);
	$odp4 = addslashes($_POST['odp4']);
	$prawidlowa = $_POST['prawidlowa'];
	$komentarz = addslashes($_POST['komentarz']);
	$query="UPDATE pytania SET pytanie='$pytanie', odp1='$odp1', odp2='$odp2', odp3='$odp3', odp4='$odp4', prawidlowa='$prawidlowa', komentarz='$komentarz', idnauczyciela=NULL WHERE idpytania='$idpytania'";
	mysql_query($query);
	header('location: index.php?id=panel_zadania');
	exit;
}




}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
}

?>