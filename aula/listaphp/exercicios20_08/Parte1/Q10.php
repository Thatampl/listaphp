<?php
$fibo = 0;
$nacci = 1;

for($i = 1; $i < 15; $i++){
    echo $fibo . "\n";
    $prox = $fibo;
    $fibo = $nacci;
    $nacci += $prox;
}
?>