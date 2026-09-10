<?php
$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];
$maior = $notas[0];
$menor = $notas[0];

$quantMaior = 0;
$quantMenor = 0;

$media = 0;

foreach($notas as $nota){

    $media += $nota;
    if($nota >= $maior){
        $maior = $nota;
    }
    if($nota < $menor){
        $menor = $nota;
    }

    if($nota >= 6){
        $quantMaior++;
    }
    else{
        $quantMenor++;
    }
}
$media /= count($notas);


echo "A média das notas é: " . $media . "\n";
echo "A quantidade de notas maiores ou iguais a 6 é: " . $quantMaior . "\n";
echo "A quantidade de notas menores que 6 é: " . $quantMenor . "\n";
echo "A maior nota é: " . $maior . "\n";
echo "A menor nota é: " . $menor . "\n";
?>