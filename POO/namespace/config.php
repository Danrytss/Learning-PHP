<?php

spl_autoload_register(function($nameClass) {


    //var_dump($nameClass);
    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; //refere-se a todo caminho da pasta até os arquivos contidos nela

    if (file_exists($filename) ) {

        require_once($filename);
    }

});

?>