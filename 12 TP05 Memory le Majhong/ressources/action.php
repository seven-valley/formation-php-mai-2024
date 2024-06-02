<?php
session_start();
if ((isset($_GET["indice"])) && (isset($_GET["valeur"]))) {
$indice =$_GET["indice"];
$valeur =$_GET["valeur"];
}
header('Location:etape1.php')
?>