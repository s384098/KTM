		<div id="naglowek">
		<?php if (!isset($_SESSION['zalogowany'])) { ?>
			<div id="naglowek_lewy1">
				<div id="slides">
					<div class="slides_container">
						<a href="#"><img src="img/01.jpg" alt="Slide 1"></a>
						<a href="#"><img src="img/02.jpg" alt="Slide 2"></a>
					</div>
				</div>
			</div>
			<div id="naglowek_prawy">
				<form method="post" action="index.php?id=logowanie" enctype="multipart/form-data">
					<p><b>Zaloguj się:</b></p>
					<ol>
						<li>
							<label for="name">Login</label>
							<input type="text" name="login"/>
						</li>
						<li>
							<label for="password">Hasło</label>
							<input type="password" name="haslo"/>
						</li>
						<li>
							<button type="submit" name="submit" id="send" >Zaloguj</button><a href="#">  Nie pamiętam hasła</a>
						</li>
					</ol>
				</form>
			</div>
	<?php }else{ ?>
			<div id="naglowek_lewy">
				<div id="dane_nauczyciela">
					<p><b>Login: </b><?php echo $_SESSION['zalogowany']; ?></p>
					<p><b>Imie: </b><?php echo $_SESSION['imie']; ?></p>
					<p><b>Nazwisko: </b><?php echo $_SESSION['nazwisko']; ?></p>
					<p><b>Szkoła: </b><?php echo $_SESSION['nazwa_szkoly']; ?></p>
				</div>
				
			</div>
			<div id="naglowek_prawy">
				<div id="opcje">
					<p><a href="index.php?id=edycja_danych">Edycja danych</a></p>
					<p><a href="index.php?id=dodaj_moje_pytanie">Dodaj pytanie</a></p>
					<p><a href="index.php?id=moje_pytania">Moje pytania</a></p>
					<p><a href="index.php?id=moje_testy">Moje testy</a></p>
					<p><a href="index.php?id=wylogowanie">Wyloguj</a></p>
				</div>
			</div>
	<?php } ?>
			<div id="naglowek_dol"></div>
		</div>
		<div id="zawartosc_wlasciwa">