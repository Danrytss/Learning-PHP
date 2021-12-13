<?php

//Incluindo classes com Autoload

function __autoload($nomeClasse) {

    var_dump($nomeClasse);

    require_once("$nomeClasse.php");
   
}



$carro = new DelRey;

$carro->acelerar(80);

?>