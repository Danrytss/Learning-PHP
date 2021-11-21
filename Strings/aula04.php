<?php

$frase = "Você é eternamente responsável por aquilo que cativas.";

$palavra = "por";

$q = strpos($frase, $palavra);
$q2 = substr($frase, 0, $q);

var_dump($q2);
echo "<br/>";
echo $q2;

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br/>";

var_dump($texto2);
echo "<br/>";
echo $texto2;

?>