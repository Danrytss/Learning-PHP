<?php

function incluirClasses($nomeClasse) {

    if (file_exists($nomeClasse.".php") === true) {

    require_once($nomeClasse.".php");
    }

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

    if (file_exists("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
        require_once("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
});

$carro = new DelRey();

$carro-> frenar(200);

?>