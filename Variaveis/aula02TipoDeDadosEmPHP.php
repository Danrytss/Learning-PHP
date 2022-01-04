<?php

//procure criar variaveis com nomes auto-explicativos, isso facilita a identificação da variaveis e seu uso

$anoNacimento = 1991 ;

$nome = "Daniel" ;

$sobrenome = "Souza";

$nome1 = "dd" ;

$_data = '05/07/1991' ;

$nomeCompleto = $nome . " " . $sobrenome . " " . "nascido em " . $_data; //ponto faz a concatenação e as aspas criam um espaço entre as palvras, numeros,etc

//unset($nome1); //comando 'unset' apaga uma variavel ou várias


if (isset($nome1)) {
    echo $nome1 . "<br/>";
}

echo $nomeCompleto;


//exit; //usamos para parar a execução em alguns que desejamos

// comentário de linha
/* comentário de bloco */

//há nomes que não podem ser usadas como variaveis, pois são palavras reservadas do PHP


//echo "<br/>"; // pula linha, não confundir com o <br> de HTML, note que uma há barra diagonal

/*
if (isset($nomeCompleto)){ 
    echo $nomeCompleto;
} (*permite verificar se uma variavel esta defininda ou não)
*/
echo "<br/>";

echo $_data


?>