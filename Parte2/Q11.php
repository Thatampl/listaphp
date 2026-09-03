<?php
$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];
$maior = $numeros[0];
$menor = $numeros[0];

foreach($numeros as $batata){
    if($batata > $maior){
        $maior = $batata;
    }
    if($batata < $menor){
        $menor = $batata;
    }
}
echo "O maior número é: " . $maior . "\n";
echo "O menor número é: " . $menor;


?>