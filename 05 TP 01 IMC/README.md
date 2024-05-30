# Calculer votre IMC
https://fr.wikipedia.org/wiki/Indice_de_masse_corporelle

démo live :
[demo en javascript](https://seven-valley.github.io/formation-php-mai-2024/web/tp1-1/)


poids en kg    
taille en mètre  
imc = poids / (taille*taille)  
  
par exemple :  
1m80 pour 80kg   
imc = 80 / (1.8*1.8)  
imc = 25  
  
Si imc < 18.5  tranche : maigreure  
Si 18.5 < imc< 25  tranche : normal  
Si 25 < imc < 30 tranche : surpoids  
Si 30 < imc < 35 tranche : obésité  
Si 35 < imc < 40 tranche : obésité sévère  
Si 35 < imc < 40 tranche : obésité massive  
  
Etape 1 : afficher l' imc   
Etape 2 : Arrondir l'imc à 1 chiffre après la virgule  
Etape 3 : Afficher les tranche  
Etape 4 : Afficher le nombre de kilo à perdre 



## correction v1
```php
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
```


## correction v2
```php
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
  if ($imc <18.5){
    $tranche = "maigreur";
  } // 18.5  <imc < 25
  else if ($imc < 25){ // 18.5  <imc < 25
    $tranche = "maigreur";
  } else if ($imc < 30){ // 18.5  <imc < 25
    $tranche = "obese";
  }
   else if ($imc < 35){ // 18.5  <imc < 25
    $tranche = "obese massive";
  }

  
    
?>
<h1>Votre IMC : <?=round($imc,1)?></h1>
<h2>tranche : <?=tranche?></h2>
<?php endif; ?>
```

