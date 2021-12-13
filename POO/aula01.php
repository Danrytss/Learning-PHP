<?php
//criando classes

class Pessoa {

    public $nome;//atributo

    public function falar() {//método

        return "O meu nome é ". $this->nome;
     
    }


}

$dan = new Pessoa();
$dan->nome = "Daniel Souza";
echo $dan->falar()

?>