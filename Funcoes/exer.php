<?php

function hello2($t, $p) {

    return "Olá $t! Bom $p!"; 
}

$t = array("Lily", "Robin", "Ted", "Marshall", "Barney");
$p = array("dia", "tarde", "noite");

echo hello2($t[1], $p[1]);
?>