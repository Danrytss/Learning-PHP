<?php
//encapsulamento

class Pessoa {

    public $nome = 'Rasmus Lerdorf';
    protected $idade = 48;
    private $senha ='1347';

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

$objeto = new Pessoa ();

//echo $objeto -> nome . "<br>";

$objeto->verDados();
?>