<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Daniel',
    'idade' => 30
));

array_push($pessoas, array(
    'nome' => 'Tania',
    'idade' => 32
));

print_r($pessoas[1]['idade']);

echo json_encode($pessoas);

?>