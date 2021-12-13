<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setName("Daniel Souza");
$cad->setEmail("dadadadadada@phpmail.com");
$cad->setPassword("issoeumteste");

$cad->registrarVenda();

?>