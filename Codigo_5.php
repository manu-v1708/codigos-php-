<?php

$edades = array("carlos"=>23, "maria"=>21, "juan"=>15);
asort($edades);

$edades2 = array("carlos"=>23, "maria"=>21, "juan"=>15);
ksort($edades2);

// asort() ordena por valores, es decir: 15, 21, 23
// ksort() ordena por claves (alfabéticamente), es decir: carlos, juan, maria

print_r($edades);
print_r($edades2);

?>
