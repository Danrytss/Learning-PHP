<?php

//session_start();
require_once("configaula01.php");

//unset($_SESSION["nome"]);

//session_destroy([]); // elemina qualquer vestigio do usuario
echo $_SESSION["nome"];

?>