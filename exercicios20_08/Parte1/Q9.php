<?php
$numero = 67;
$dividores = 0;

for($i = 1 ; $i <= $numero; $i++){
    if($numero % $i == 0){
        $dividores++;
    }
}
if ($dividores == 2){
    echo $numero . " é primo";
}
else{
    echo $numero . " não é primo";
}
?>