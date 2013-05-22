<h1><span>EDYTUJ DANE UŻYTKOWNIKA</span></h1><br />



<div id="pasek">
	<div id="nazwa1">EDYCJA DANYCH O UŻYTKOWNIKU</div>
</div>
<form method="post" action="index.php?id=panel_edytuj_uzytkownika" enctype="multipart/form-data">
	
	

<?php
$id =$_GET['iduzytkownika'];
$query = mysql_query("SELECT * FROM uzytkownicy WHERE iduser = '$id'");
$oceny = '';	
while($rekord = mysql_fetch_array($query)){
	$oceny .= '<div id="lista">
		<div id="nazwa">Imię:</div>
		<div id="nazwa"><input type="text" size="70" name="imie" value="'.$rekord["imie"].'"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Nazwaisko: </div>
		<div id="nazwa"><input type="text" size="70" name="nazwisko" value="'.$rekord["nazwisko"].'"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Login: </div>
		<div id="nazwa"><input type="text" size="70" name="login" value="'.$rekord["login"].'"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">Nazwa szkoły: </div>
		<div id="nazwa"><input type="text" size="70" name="nazwa_szkoly" value="'.$rekord["nazwa_szkoly"].'"/></div>
	</div>
	<div id="lista">
		<div id="nazwa">E-mail: </div>
		<div id="nazwa"><input type="text" size="70" name="email" value="'.$rekord["email"].'"/></div>
	</div>';
}
echo $oceny;
?>
	<div id="lista">
		<div id="nazwa">Uprawnienia: </div>
		<div id="nazwa"><select name="uprawnienia">
			<option value="2">Nauczyciel</option>
			<option value="1">Nauczyciel i administrator</option>
		</select></div>
	</div>
	<input type="hidden" name="id" value="<?php echo $_GET["iduzytkownika"]; ?>"/>
	<div id="lista">
		<div id="nazwa"><input type="submit" name="submit" value="Zapisz"/></div>
	</div>
</form>

<?PHP
if (isset($_POST['submit'])){
	if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['login']) && isset($_POST['nazwa_szkoly']) && isset($_POST['email']) && isset($_POST['uprawnienia'])){
		$id = trim($_POST['id']);
		$imie = trim($_POST['imie']);
		$nazwisko = trim($_POST['nazwisko']);
		$login = trim($_POST['login']);
		$nazwa_szkoly = trim($_POST['nazwa_szkoly']);
		$email = trim($_POST['email']);
		$uprawnienia = trim($_POST['uprawnienia']);
		
		$query="UPDATE uzytkownicy SET imie='$imie', nazwisko='$nazwisko', nazwa_szkoly='$nazwa_szkoly', login='$login', email='$email', uprawnienia='$uprawnienia' WHERE iduser='$id'";
		mysql_query($query);
		header('location: index.php?id=panel_uzytkownicy');
		exit;
	}
}

?>










