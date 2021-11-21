<?php

$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //mostra o ip de acesso do usuario

$ip2 = $_SERVER["SCRIPT_NAME"]; //diz qual página está sendo acessada pelo usuario

$ip3 = $_SERVER["SERVER_NAME"]; // mostra o nome do servidor usado

echo $ip2;

?>