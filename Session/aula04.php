<?php

require_once('configaula01.php');

echo session_save_path(); //obtem e/ou define o caminho para o armaz da sessão atual

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {

    case PHP_SESSION_DISABLED:
    echo "As sessões estão desabilitadas.";
    break;

    case PHP_SESSION_NONE:
    echo "As sessões estão habilitadas, mas não iniciadas.";
    break;

    case PHP_SESSION_ACTIVE:
    echo "As sessões estão habilitadas, e uma sessão existe/iniciada.";
    break;
}

?>