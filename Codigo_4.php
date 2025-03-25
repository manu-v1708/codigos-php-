<?php

$numeros = array(0,1,2,3,4,5,6,7,8,9);

$numerosFiltrar1 = array_filter($numeros, function ($valor): bool {
    return $valor <= 5;
});

$numerosFiltrar2 = array_filter($numeros, function ($valor): bool {
    return $valor >= 5;
});

print_r($numerosFiltrar1);
print_r($numerosFiltrar2);

?>
