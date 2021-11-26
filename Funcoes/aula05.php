<?php

$a =10;

function trocaValor(&$b) { //passagem de parametro por referencia

    $b += 50;

    return $b;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;
?>