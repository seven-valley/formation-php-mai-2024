<?php
session_start(); 
if (isset($_POST["nom_film"]) && isset($_POST["annee"])){
	$nom_film = $_POST["nom_film"];
    $annee =$_POST["annee"];
    $tab["nom_film"] =$nom_film; // je stocke dans un tableau
    $tab["annee"] =$annee;
    // $_SESSION["films"] devient un tableau 2 dimmensions
    $_SESSION["films"][] = $tab; // je stocke dans un tableau de session
    // je redirige vers un autre page
   // header('Location: http://www.example.com/');
    header('Location: page-a.php');
}
