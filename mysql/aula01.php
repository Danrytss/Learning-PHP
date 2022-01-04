<?php

$conn = new mysqli("localhost", "root", "", "dbphp"); //1-endereço do banco de dados, 2- login, 3-senha,4-nome do banco de dados

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "danryt";
$pass = "@#rt$#";

$stmt->execute();

?>