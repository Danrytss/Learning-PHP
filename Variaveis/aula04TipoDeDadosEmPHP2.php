<?php
/*No php temos 08 tipos de dados, divididos em três grupos

-tipos básicos: inteiro, string, ponto flutuante e boolenao;
-tipos compostos: arrays e objetos;
-dados especiais: resource e null
*/


// tipos básicos

$nome = "hcode"; //string

$site = "www.hcode.com.br"; //string

$ano = 1991; //inteiro

$salario = 5500.99; //ponto flutuante

$bloqueado = false; //booleano (V ou F)
////////////////////////////////////////////////

// tipos compostos
$frutas = array("abacaxi", "laranja", "manga", 01, 20); //array

//echo $frutas [4]; //

//echo "<br/>";

$nascimento = new DateTime(); //objetos

//var_dump($nascimento);
//////////////////////////////////////////////////

// tipos de dados especiais

//echo "<br/>";
//echo "<br/>";

$arquivo = fopen("aula02tipoDeDadosEmPHP.php" , "r"); // resource

//echo $arquivo
//var_dump($arquivo);

$nulo = NULL; // null, ausencia de valor



?>