<?php
$numero = 2;
if ($numero % 3 == 0 && $numero % 5 == 0) {
    echo $numero . " É multiplo de 3 e 5\n";
}
else if ($numero % 5 == 0) {
    echo $numero . " É multiplo de 5\n";
}
else if ($numero % 3 == 0) {
    echo $numero . " É multiplo de 3\n";
} else{
    echo $numero . " kkk não é multiplo de 3 nem de 5\n";
}

?>