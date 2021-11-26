<?php
//forçando uma criação de nova sessão
session_id(/*'insira o id aqui'*/);

require_once("configaula01.php");

session_regenerate_id();
echo session_id();
//var_dump($_SESSION);

?>