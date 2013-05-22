<h1><span>KREATOR TESTÓW</span></h1><br />

<div id="pytania">
<form method="POST" action="index.php?id=dodaj_test" enctype="multipart/form-data">
    <div class="cf nestable-lists">

        <div class="dd" id="nestable">
            <ol class="dd-list">
			
				<?php
				$wpis = '';
				$query1 = mysql_query("SELECT * FROM dzialy");
				while($rekord = mysql_fetch_array($query1)){
					$wpis .='<li class="dd-item">
					<div class="dd-handle">'.$rekord["nazwa_dzialu"].'</div>
					<ol class="dd-list">';
					$iddzialu = $rekord["iddzialu"];
					$query = mysql_query("SELECT * FROM pytania WHERE iddzialu='$iddzialu'");
					while($rekord = mysql_fetch_array($query)){
						$wpis .= '<li class="dd-item" data-id="'.$rekord["idpytania"].'"><div class="dd-handle">'.$rekord["pytanie"].'<br />';
						if ($rekord["odp1"]!=""){$wpis .= 'a)'.$rekord["odp1"].'<br />';}
						if ($rekord["odp2"]!=""){$wpis .= 'b)'.$rekord["odp2"].'<br />';}
						if ($rekord["odp3"]!=""){$wpis .= 'c)'.$rekord["odp3"].'<br />';}
						if ($rekord["odp4"]!=""){$wpis .= 'd)'.$rekord["odp4"].'<br />';}
						$wpis .= '</div></li>';
					}
					$wpis .= '</ol></li>';
				}
				$wpis .='<li class="dd-item"><div class="dd-handle">Moje pytania</div><ol class="dd-list">';
				$iddzialu = 0;
				$query = mysql_query("SELECT * FROM pytania WHERE iddzialu='$iddzialu'");
				while($rekord = mysql_fetch_array($query)){
					$wpis .= '<li class="dd-item" data-id="'.$rekord["idpytania"].'"><div class="dd-handle">'.$rekord["pytanie"].'<br />';
					if ($rekord["odp1"]!=""){$wpis .= 'a)'.$rekord["odp1"].'<br />';}
					if ($rekord["odp2"]!=""){$wpis .= 'b)'.$rekord["odp2"].'<br />';}
					if ($rekord["odp3"]!=""){$wpis .= 'c)'.$rekord["odp3"].'<br />';}
					if ($rekord["odp4"]!=""){$wpis .= 'd)'.$rekord["odp4"].'<br />';}
					$wpis .= '</div></li>';
				}
				$wpis .= '</ol></li>';
				echo $wpis;
				?>
                
            </ol>
        </div>
        <div class="dd" id="nestable2">
            <ol class="dd-list">
                <li class="dd-item" data-id="a">
                    <div class="dd-handle">Nazwa testu</div>
                </li>
                <li class="dd-item" data-id="b">
                    <div class="dd-handle">Imię Nazwisko</div>
                </li>
            </ol>
        </div>
    </div>
	<input type="text" name="nr_pytan" id="nestable2-output" />
	<div id="dodawanie">
		<center>
		Nazwa testu:
		<input type="text" name="nazwa" id="name" />
		<input type="submit" name="submit" value="Zapisz"/>
		</center>
	</div>	
</form>
	
<?php
if(isset($_POST['submit'])){
	if (isset($_POST['nr_pytan']) && isset($_POST['nazwa'])){		
		echo "Test został dodany do bazy danych";
		$nr_pytan = $_POST['nr_pytan'];
		$nazwa = $_POST['nazwa'];
		$idnauczyciela = 1;	
		$zapytanie = "INSERT INTO testy (`idtestu`,`nazwa`,`nr_pytan`,`idnauczyciela`) VALUES (NULL,'$nazwa','$nr_pytan','$idnauczyciela')";
		$idzapytania = mysql_query($zapytanie);		
		header('location: index.php?id=moje_testy');
		exit;
	}else{
		header('location: index.php?id=dodaj_test');
		exit;
	}
}	
?>