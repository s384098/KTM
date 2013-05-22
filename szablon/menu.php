<body>
<div id="gora">
		<div id="gora_kontener">
			<a href="index.php?id=index"><div id="logo"></div></a>
			<div id="menu" class="sansation">
				<ul>
					<li>
					<?php if (isset($_SESSION['uprawnienia']) && $_SESSION['uprawnienia'] == 1){echo '<a href="index.php?id=panel_adminstratora"><font color="#EDF0AA">PANEL ADMINISTRATORA</font></a>';} 
					else {echo'<a href="index.php?id=index">STRONA GŁÓWNA</a>';} ?>
					</li>
					<li>
					<?php if (isset($_SESSION['zalogowany'])){
					echo'<a href="index.php?id=dodaj_test">KREATOR TESTÓW</a>';
					}else{
					echo'<a href="index.php?id=demo">DEMONSTRACJA</a>';
					}
					?>
					</li>
					<li><a href="index.php?id=pomoc">INSTRUKCJA OBSŁUGI</a></li>
					<li><a href="index.php?id=kontakt">KONTAKT</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="wysrodkowany">