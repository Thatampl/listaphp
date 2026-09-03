<?php
$numero = 15;
$fatorial = 1;
for ($i=0; $i < $numero; $i++) {
    $fatorial *= ($numero - $i);
}
echo "o fatorial de " . $numero . " é " . $fatorial;
?>