<form method="post" action="tp1-v1.php">
    <input name="poids" value="80"><br>
    <input name="taille" value="1.8"><br>
    <button type="submit">Calcul</button>
</form>
<?php  if ((isset($_POST['taille'])) && (isset($_POST['poids']))): 
  // imc = poids / (taille*taille)  
  $poids = $_POST['poids'];
  $taille = $_POST['taille'];
  $imc = $poids / ($taille* $taille);
  
    
?>
<h1>Votre IMC : <?=round($imc,1)?></h1>
<?php endif; ?>