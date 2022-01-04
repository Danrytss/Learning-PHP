<?php

$conn = new mysqli("localhost", "root", "", "dbphp"); //1-endereço do banco de dados, 2- login, 3-senha,4-nome do banco de dados

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_field()) {

    array_push($data, $row);
    //var_dump($row);

}

echo json_encode($data);



?>