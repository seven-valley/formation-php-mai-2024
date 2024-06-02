<?php 
    // doit etre en premien dans la page
    // avant la balise <!DOCTYPE html>
    session_start(); 
?>
<form method="post" action="page-b.php">
    <input name="nom_film"><br>
    <input name="annee"><br>
    <button type="submit">GO</button>
</form>
<?php 
   // si il y a qlq chose en session
   if (isset ($_SESSION["films"])):
    $films =$_SESSION["films"];
   foreach ($films as $tab):
?>
<p>
    <?=$tab["nom_film"]?> - <?=$tab["annee"]?><br>
</p>
<?php 
    endforeach;
    endif; 
?>