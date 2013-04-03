<div id="pytania">
					<h1><span>KREATOR TESTÓW</span></h1>	
					<br /><br />
		
	<menu id="nestable-menu">
		<button type="button" data-action="expand-all">Rozwiń liste</button>
        <button type="button" data-action="collapse-all">Zwiń liste</button>
		<a href="zad.html"><button type="button">Dodaj zadanie</button></a>
		
    </menu>

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
						$wpis .= '<li class="dd-item" data-id="'.$rekord["idpytania"].'"><div class="dd-handle">'.$rekord["pytanie"].'<br />
						a)'.$rekord["odp1"].'<br />
						b)'.$rekord["odp2"].'<br />
						c)'.$rekord["odp3"].'<br />
						d)'.$rekord["odp4"].'</div></li>';
					}
					$wpis .='</ol></li>';
				}
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
				
				<br />
	<div id="dodawanie">
		<form method="POST" action="index.php?id=4" enctype="multipart/form-data">
			Nazwa testu:
			<input type="text" name="nazwa" id="name" /><br />
			Ilość grup:
			<select name="jezyk" size="1">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select><br />
			Ustaw czas:
			<input type="text" name="name" value="00:00" id="name" /><br />
			<input type="text" name="nr_pytan" id="nestable2-output" />
			<input type="submit" name="submit" value="Zapisz">
			<button type="button">Podgląd wydruku</button>
			<button type="button">Drukuj</button>
			<button type="button">Zapisz w formie online</button>
		</form>
	</div>
