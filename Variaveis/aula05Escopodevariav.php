<?php

$nome = "Galu";

function teste() {

    global $nome;
    echo $nome;
}


function teste2() {

    $nome = "Galili";
    echo $nome. " agora no teste 2";

}

teste();

echo "<br/>";

teste2();

?>