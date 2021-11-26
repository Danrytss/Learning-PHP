<?php

$pessoa = array(
    'nome' => 'Jubileu',
    'idade' => 126 
);

foreach ($pessoa as $value) {

    if (gettype($value) === 'integer') $value += 10;

    echo $value. '<br>';

}

print_r($pessoa);

?>