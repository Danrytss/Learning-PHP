<?php

$qualASuaIdade = 15;

$idadeCriança = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if ($qualASuaIdade < $idadeCriança) {

    echo "Criança.";

} else if ($qualASuaIdade < $idadeCriança) {

    echo "Adolescente."; //else if permite ser utilizado vária vzs

} else if ($qualASuaIdade < $idadeIdoso) {

    echo "Adulto.";

} else { //else só pode ser usada uma unica vez

    echo "Idoso.";
}

echo "<br>";

echo ($qualASuaIdade >= $idadeMaior)?"Menor de Idade":"Maior de Idade"; //operador ternario, é uma forma mais simples de if.Usamos quando há uma condição simples
?>