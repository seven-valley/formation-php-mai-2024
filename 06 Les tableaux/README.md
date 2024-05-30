# 06 - Les Tableaux 1 dimenssion

## je déclare un tableau

### declarer en dure
```php
$tab = ['pomme','poire','cerise'];
var_dump($tab);
```

### declaration la plus utilisée
```php
//$tab2 =[]; // pas besoin d'instancier en php
$tab2[] = 'pomme'; // 0
$tab2[] = 'poire';
$tab2[] = 'cerise';
var_dump($tab2);
```


### autre declaration 
```php
// cela marche aussi
$tab3[0] = 'pomme'; // 0
$tab3[1] = 'poire';
$tab3[2] = 'cerise';
var_dump($tab3);
```
### très utilisé ds symfony
```php
$tab4 = [0 =>'pomme',1=>'poire',2=>'cerise'];
var_dump($tab4);
```

## je parcours, j'affiche un tableau un tableau

### la boucle for à papa
```php
for ($i=0;$i<count($tab3);$i++){
    echo $tab4[$i]."<br>";
}
```
### la for each très utile !
```php
foreach ($tab as $fruit){
    echo $fruit."<br>";
}
```

### la for each avec i ou l'indice !
```php
foreach ($tab as $i => $fruit){
    echo $fruit." ".$i."<br>";
}
```

## Effacer un élément 2 façons
// effacer poire du tableau 3

### 1 - la plus commune
```php
$tab = ['pomme','poire','cerise']; // indice 1
unset($tab[1]);
var_dump($tab);
```

### 2 - autre façon
```php
$tab3 = ['pomme','poire','cerise']; // indice 1
array_splice($tab3, 1, 1);
var_dump($tab3);
```
*** realocation des indices !!!***
