<?php

function ola($texto = "Mundo", $periodo="Boa noite!") {

    echo "Olá $texto! $periodo<br>";
}

echo ola();
echo ola("");
echo ola("Daniel", "Bom dia");
echo ola("Desgraça");
?>