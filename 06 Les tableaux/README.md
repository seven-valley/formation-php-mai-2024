# 06 - Les Tableaux 1 dimenssion
Doc php **array** les tableaux  
https://www.php.net/manual/en/ref.array.php  
  
## je déclare un tableau
- déclarer un tableau et le remplir
- parcourir un tableau avec une boucle for
- parcourir un tableau avec une boucle foreach
- ajouter un élément dans un tableau
- enlever un élément dans un tableau de 2 façons 

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
**documentation :**
https://www.php.net/manual/en/control-structures.foreach.php
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

le tableau initial :
| Indice  | Valeur | 
| :--------------- |:---------------:|
| 0 | pomme |
| 1 | poire |
| 2 | cerise |

// effacer poire du tableau 3
### 1 - la plus commune
```php
$tab = ['pomme','poire','cerise']; // indice 1
unset($tab[1]);
var_dump($tab);
```
| Indice  | Valeur | 
| :--------------- |:---------------:|
| 0 | pomme |
| 2 | cerise |

### 2 - autre façon
```php
$tab3 = ['pomme','poire','cerise']; // indice 1
array_splice($tab3, 1, 1); //( le tableau, l'indice, le nb d'elements à effacer)
var_dump($tab3);
```
| Indice  | Valeur | 
| :--------------- |:---------------:|
| 0 | pomme |
| 1 | cerise |

  
***realocation des indices !!!***
