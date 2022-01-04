<?php

//O escopo de uma variável é o contexto onde foi definida. A maioria das variáveis do PHP tem somente escopo local. Este escopo local inclui os arquivos incluídos e requeridos.

$nome = "Galu";

function teste() {

    global $nome;
    echo $nome;
}


function teste2() {

     $nome = "Galili";
    //global $nome;
    echo $nome. " agora no teste 2";

}

teste();

echo "<br/>";

teste2();

?>