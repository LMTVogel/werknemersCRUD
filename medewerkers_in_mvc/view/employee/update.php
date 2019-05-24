	
	<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>employee/update">
	    <input type="hidden" name="id" value="<?=$medewerker["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
		<div class="form-group">
			<label>Naam</label>
			<input type="text" class="form-control" name="naam" placeholder="<?=$medewerker["name"] ?>" value="<?=$medewerker["name"] ?>" required>
		</div>

		<div class="form-group">
			<label>Leeftijd</label>
			<input type="number" class="form-control" name="leeftijd" placeholder="<?=$medewerker["age"] ?>" value="<?=$medewerker["age"] ?>" required>
		</div>

		<button type="submit" class="btn btn-primary">Toevoegen</button>
	</form>