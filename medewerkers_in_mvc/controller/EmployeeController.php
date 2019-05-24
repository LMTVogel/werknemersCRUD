<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $employees = getAllEmployees();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('employee/index', array("medewerkers" => $employees));
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render("employee/create");
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    createEmployee($_POST["naam"], ["leeftijd"]);
    //2. Bouw een url op en redirect hierheen
    header("location: index");
}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $medewerkerID = $id;
    $medewerker = getEmployee($medewerkerID);

    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render("employee/update", array("medewerker" => $medewerker));
}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    updateEmployee($_POST['naam'], $_POST['leeftijd']);
    //2. Bouw een url en redirect hierheen
    header("location: index");
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $medewerkerID = $id;
    $medewerker = getEmployee($medewerkerID);

    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render("employee/delete", array("medewerker" => $medewerker));

}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteEmployee($medewerker);
	//2. Bouw een url en redirect hierheen
    header("location:../index");
}
?>