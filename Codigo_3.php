<?php

echo "Quiz\n";
$VideoJuegos = array ("Hollow_Nigth", "Leage_of_Legends", "Valorant", "Rocket_Leage", "BrawlHalla");
$VideoJuegos[]="Hades";

print_r ($VideoJuegos);

$VideoJuegos=["Hollow_Nigth", "Leage_of_Legends", "Valorant", "Rocket_Leage", "BrawlHalla"];
unset ($VideoJuegos[3]);
print_r($VideoJuegos);

$VideoJuegoseliminar = "Rocket_Leage";
$llave = array_search ($VideoJuegoseliminar,$VideoJuegos);

if($llave == false)
{
    unset ($VideoJuegos[$llave]);
}

print_r ($VideoJuegos);
$VideoJuegos[0]="Hollow_Nigth";
print_r($VideoJuegos);

$VideoJuegos[2] = "Super_Meat_boy";
print_r ($VideoJuegos);

$VideoJuegosSeleccionar = array_slice ($VideoJuegos,0,2);
print_r ($VideoJuegosSeleccionar);


?> 