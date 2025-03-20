<?php

echo "Quiz";
//$VideoJuegos = array ("Hollow_Nigth", "Leage_of_Legends", "Valorant", "Rocket_Leage", "BrawlHalla");
//%VideoJuegos[]="Hades";

//print_r ($VideoJuegos);

$VideoJuegos=["Hollow_Nigth", "Leage_of_Legends", "Valorant", "Rocket_Leage", "BrawlHalla"];
unset ($VideoJuegos[3]);
print_r($VideoJuegos);

?>