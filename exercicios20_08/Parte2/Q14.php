<?php
$numeros = [9, 2, 5, 2, 8, 5, 2, 10, 8, 5, 5];

foreach($numeros as $num){
    $contagem[$num] = isset($contagem[$num]) ? $contagem[$num] + 1 : 1;
    //[9,2,5,8,10] $contagem
    //[1,3,4,2,1] $ocorrencias
}
foreach($contagem as $num => $ocorrencias){
    echo $num . " aparece " . $ocorrencias . " vezes\n";
}
?>