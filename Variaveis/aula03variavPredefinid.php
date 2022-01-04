<?php

//Superglobais — Superglobais são variáveis nativas que estão sempre disponíveis em todos escopos
//Várias variáveis pré-definidas no PHP são "superglobais", que significa que elas estão disponível em todos escopos para todo o script. Não há necessidade de fazer global $variable; para acessá-lo dentro de funções ou métodos.

/*
Estas variáveis superglobais são:

$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
*/

$nome = (int)$_GET["a"];

var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //mostra o ip de acesso do usuario

$ip2 = $_SERVER["SCRIPT_NAME"]; //diz qual página está sendo acessada pelo usuario

$ip3 = $_SERVER["SERVER_NAME"]; // mostra o nome do servidor usado

echo "<br/>";

echo $ip2;

?>