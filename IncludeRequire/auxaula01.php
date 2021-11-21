<?php

//include "inc/aula01.php"; // inclui um arquivo, é como se copiasse esse arquivo e o adicionasse a esse
require "inc/aula01.php"; // na pratica é igual ao include, mas o require obriga que o arquivo exista e esteja funcionando corretamente, o include tenta funcionar e ele tem mais funções
require_once "inc/aula01.php"; //obriga que o arquivo seja trazido apenas uma vez
// há o include_once tbm, que tem a mesma função
$resultado = somar(10, 20);

echo $resultado;

?>