	<?php
		// maak een overzicht lijst van ALLE personen
		getAllEmployees();
	?>
	<h1>Overzicht van personen</h1>
	<ul>
		<?php foreach($medewerkers as $medewerker) { ?>
			<li>
				<span><?php echo $medewerker["name"];?> is  <?php echo $medewerker["age"];?> jaar.</span>
				<?php
				// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
				// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
				// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
				// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
				?>
				<a href="<?=URL?>employee/edit/<?php echo $medewerker["id"]?>">Wijzigen</a>  <a href="<?=URL?>employee/delete/<?php echo $medewerker["id"]?>">Verwijderen</a>
			</li>
		<?php }?>
	</ul>