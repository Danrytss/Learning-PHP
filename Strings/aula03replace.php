<?php

// permite trocar letras em uma palavra

$empresa = "Sabor";

$empresa = str_replace("o","0",$empresa);
$empresa = str_replace("a","@",$empresa);

echo $empresa;

?>