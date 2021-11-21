<?php

$salarioBase = 8000.00;

$salarioBaixo = 2600.00;
$salarioMedio = 2601.00;
$salarioAlto = 8000.00;

if ($salarioBase <= $salarioBaixo) {

    echo "Você já foi chamado de pobre hoje? Seu POBRE!!";

} else if ($salarioBase <= $salarioMedio) {

    echo "Vai se contentar com isso?";

} else {

    echo "Hummm tá podendo, hein?";

}

?>