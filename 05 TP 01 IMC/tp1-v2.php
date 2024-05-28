<form method="post" action="tp1-v2.php">
    <input name="poids" value="80"><br>
    <input name="taille" value="1.8"><br>
    <button type="submit">Calcul</button>
</form>
<?php  if ((isset($_POST['taille'])) && (isset($_POST['poids']))): 
  // imc = poids / (taille*taille)  
  $poids = $_POST['poids'];
  $taille = $_POST['taille'];
  $imc = $poids / ($taille* $taille);
  if ($imc <18.5){
    $tranche = "maigreur";
  } 
  else if ($imc < 25){ // 18.5  <imc < 25
    $tranche = "normal";
  } else if ($imc < 30){ // 18.5  <imc < 25
    $tranche = "surpoids";
  }
   else if ($imc < 35){ // 18.5  <imc < 25
    $tranche = "obese";
  }
  else if ($imc < 40){ // 18.5  <imc < 25
    $tranche = "obese severe";
  }
  else{ // 18.5  <imc < 25
    $tranche = "obese massive";
  }

  
    
?>
<h1>Votre IMC : <?=round($imc,1)?></h1>
<h2>tranche : <?=$tranche?></h2>
<?php endif; ?>