<?php

date_default_timezone_set("America/Sao_Paulo");

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt -> format("d/m/Y H:i:s");

$dt -> add($periodo);

echo "<br>";

echo $dt -> format("d/m/Y H:i:d");

?>