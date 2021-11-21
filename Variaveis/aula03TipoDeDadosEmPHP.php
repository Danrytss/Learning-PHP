<?php

$anoNacimento = 1991 ;

$nome = "Daniel" ;

$sobrenome = "Souza";

$nome1 = "dd" ;

$_data = '05/07/1991' ;

$nomeCompleto = $nome . " " . $sobrenome; //ponto faz a concatenação e as aspas criam um espaço entre as palvras, numeros,etc

echo $nomeCompleto;

exit; //usamos para parar a execução em alguns que desejamos

// comentário de linha
/* comentário de bloco */

//há nomes que não podem ser usadas como variaveis, pois são palavras do PHP

echo $nomeCompleto;

//echo "<br/>"; // pula linha, não confundir com o <br> de HTML, note que uma há barra diagonal

/*
if (isset($nomeCompleto)){ 
    echo $nomeCompleto;
} (*permite verificar se uma variavel esta defininda ou não)
*/
echo "<br/>";

echo $_data


?>