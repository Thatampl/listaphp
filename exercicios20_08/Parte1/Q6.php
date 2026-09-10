<?php
$a = 19;
$b = 7;
$c = 3;

if ($a > $b && $a > $c){
    echo "O incrivel número: " . $a . " é o maior numero";
}
elseif($b > $a && $b > $c){
    echo "O incrivel número: " . $b . " é o maior numero";
}
else{
    echo "O incrivel numero: " . $c . " é o maior numero";
}

?>