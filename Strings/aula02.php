<?php

$nome = "daniel souza";

$nome = strtoupper($nome); 

echo strtoupper($nome);// transforma minusculas em maisculas

echo "<br/>";

$nome = strtolower($nome);  

echo strtolower($nome);// transforma maisculas em minusculas

echo "<br/>";

echo ucwords($nome); // transforma cada primeira letra das palavras em maiuscula

echo "<br/>";

echo ucfirst($nome); // transforma somente a primeira em maiscula


?>