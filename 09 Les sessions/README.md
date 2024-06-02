# 09 Les session
![module-9](../img/09-session.png)


## Comment utiliser les sessions en PHP ?   

### ETAPE 1 envoyer des données

**page-a.php**  

```php
<form method="post" action="page-b.php">
    <input name="prenom"><br>
    <input name="nom"><br>
    <button type="submit">GO</button>
</form>
```

**page-b.php**  
```php
<?php
if (isset($_POST["film"]) && isset($_POST["annee"])){
	$film = $_POST["film"];
    $annee =$_POST["annee"];
    $tab["film"] =$film; // je stocke dans un tableau
    $tab["annee"] =$annee;
    // $_SESSION["films"] devient un tableau 2 dimmensions
    $_SESSION["films"][] = $tab; // je stocke dans un tableau de session
    // je redirige vers un autre page
    header("Location:page-b.php");
}

```
### ETAPE 2 J'affiche les données en session
![module-9b](../img/09b-session.png)

**page-a.php**  
  
```php
<?php 
    // doit etre en premien dans la page
    // avant la balise <!DOCTYPE html>
    session_start(); 
?>
<form method="post" action="page-b.php">
    <input name="prenom"><br>
    <input name="nom"><br>
    <button type="submit">GO</button>
</form>
<?php 
   // si il y a qlq chose en session
   if (isset ($_SESSION["films"])):
    $films =$_SESSION["films"];
   foreach ($films as $tab):
?>
<p>
    <?=$tab["film"]?> - <?=$tab["annee"]?><br>
</p>
<?php 
    endforeach;
    endif; 
?>
```
