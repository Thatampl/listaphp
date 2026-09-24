<?php
$numeros = [15, 8, 35, 42, 11, 27, 39];
$maior = $numeros[0];
$segundo = null;

foreach($numeros as $num){
    if($num > $maior){
        $segundo = $maior;
        $maior = $num;
    }
    else if(($segundo == null || $num > $segundo) && $num < $maior){
        $segundo = $num;
    }

}
echo "O maior número é: " . $maior . "\n";
echo "O segundo maior número é: " . $segundo;
?>