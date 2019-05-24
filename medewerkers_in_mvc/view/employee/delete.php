<?php
// Bevestig pagina voor het verwijderen van een mededwerker

?>

<h1>Weet u zeker dat u <?php echo $medewerker["name"] ?> wilt verwijderen?</h1>
<form method ="POST" action='<?=URL?>employee/destroy/<?php echo $medewerker["id"]?>'>
    <input type="hidden" name="id" value="<?=$medewerker["id"] ?>"/>
    <input type='submit'>
</form>