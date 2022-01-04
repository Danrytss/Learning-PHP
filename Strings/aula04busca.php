<?php

$frase = "Você é eternamente responsável por aquilo que cativas.";

$palavra = "que ";

$q = strpos($frase, $palavra);
$text = substr($frase, 9, $q);

var_dump($text);
echo "<br/>";
echo $text;

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br/>";

var_dump($texto2);

echo "<br/>";

echo $texto2;

?>