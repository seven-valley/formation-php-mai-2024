<?php
//contruire un tableau 2D
$films =[
    0=> ["titre"=>"star wars","annee"=>"1977"],
    1=> ["titre"=>"The Matrix","annee"=>"1999"],
];
var_dump($films) ;
// 2emme facon
$film1["titre"] ="star wars";
$film1["annee"] ="1977";

$film2["titre"] ="The Matrix";
$film2["annee"] ="1999";

$tab[] = $film1;
$tab[] = $film2;
var_dump($tab) ;

// 3 eme façon
$tab3[0]["titre"] ="star wars";
$tab3[0]["annee"] ="1977";
$tab3[1]["titre"] ="The Matrix";
$tab3[1]["annee"] ="1999";

foreach ( $tab3 as $film){
    echo $film["titre"]."<br>";
    echo $film["annee"]."<br>";

}

//$tuiles =[ 43,32,23]