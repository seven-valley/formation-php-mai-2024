<?php
// je déclare un tableau
$tab = ['pomme','poire','cerise'];
var_dump($tab);
//$tab2 =[];
$tab2[] = 'pomme'; // 0
$tab2[] = 'poire';
$tab2[] = 'cerise';

var_dump($tab2);

// cela marche aussi
$tab3[0] = 'pomme'; // 0
$tab3[1] = 'poire';
$tab3[2] = 'cerise';


$tab4 = [0 =>'pomme',1=>'poire',2=>'cerise'];

for ($i=0;$i<count($tab3);$i++){
    echo $tab4[$i]."<br>";
}

foreach ($tab as $fruit){
    echo $fruit."<br>";
}

foreach ($tab as $i => $fruit){
    echo $fruit." ".$i."<br>";

}
// effacer poire du tableau 3

//$tab = ['pomme','poire','cerise']; // indice 1
unset($tab[1]);
var_dump($tab);

//$tab3 = ['pomme','poire','cerise']; // indice 1
array_splice($tab3, 1, 1);
var_dump($tab3);