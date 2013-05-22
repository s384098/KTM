<?php   
if (isset($_SESSION['uprawnienia']) && $_SESSION['uprawnienia'] == 1){
?>

<h1><span>DODAJ NOWE ZADANIE</span></h1><br />

<form method="post" action="index.php?id=panel_dodaj_zadanie" enctype="multipart/form-data">
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
		<legend><b>Dział:</b></legend>
		<select name="dzial">
		<?php
		$query1 = mysql_query("SELECT * FROM dzialy");
				while($rekord = mysql_fetch_array($query1)){
					$wpis .='<option value="'.$rekord["iddzialu"].'">'.$rekord["nazwa_dzialu"].'</option>';
				}
		echo $wpis;
		?>
		</select>
		
	</fieldset>
	<fieldset>
		<legend><b>Treść pytania:</b></legend>
		<textarea cols="88" id="tekst" rows="10" name="pytanie"></textarea>
	</fieldset>
	<fieldset>
		<legend><b>Odpowiedzi:</b></legend>
		<input type="radio" name="prawidlowa" value="1"/>
		a) <input type="text" size="105" name="odp1"/><br />
		<input type="radio" name="prawidlowa" value="2"/>
		b) <input type="text" size="105" name="odp2"/><br />
		<input type="radio" name="prawidlowa" value="3"/>
		c) <input type="text" size="105" name="odp3"/><br />
		<input type="radio" name="prawidlowa" value="4"/>
		d) <input type="text" size="105" name="odp4"/>
	</fieldset>
	<fieldset>
		<legend><b>Komentarz:</b></legend>
		<input type="radio" name="prawidlowa" value="A"/>
		<textarea cols="85" name="komentarz" rows="10"></textarea>
	</fieldset>
	<fieldset>
		<input type="submit" name="submit" value="Zapisz"/>
	</fieldset>	
</form>

<?php  
if (isset($_POST['submit'])){
	if (isset($_POST['pytanie']) && isset($_POST['prawidlowa'])){
		$dzial = $_POST['dzial'];
		$pytanie = addslashes($_POST['pytanie']);
		$odp1 = addslashes($_POST['odp1']);
		$odp2 = addslashes($_POST['odp2']);
		$odp3 = addslashes($_POST['odp3']);
		$odp4 = addslashes($_POST['odp4']);
		$prawidlowa = $_POST['prawidlowa'];
		$komentarz = addslashes($_POST['komentarz']);
		$idnauczyciela = $_SESSION['id'];
		$zapytanie = "INSERT INTO pytania (`idpytania`,`iddzialu`,`pytanie`,`odp1`,`odp2`,`odp3`,`odp4`,`prawidlowa`,`komentarz`, `idnauczyciela`) VALUES (NULL,'$dzial','$pytanie','$odp1','$odp2','$odp3','$odp4','$prawidlowa','$komentarz','$idnauczyciela')";	
		mysql_query($zapytanie) or print mysql_error();	
		header('location: index.php?id=panel_zadania');
		exit;
	}
}
}else{
	header('location: index.php?id=index'); //Przechodzimy do strony glownej
	exit;
}
?>