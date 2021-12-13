<?php

class Aluno {
    public $nome;
    private $cpf;
    protected $mediaAnual;

    public function getNome () {
        return $this ->nome;
    }

    public function setNome($name) {
        $this->nome= $name;
    }

    public function getCpf () {
        return $this ->cpf;
    }

    public function setCpf ($cpf) {
        $this->cpf = $cpf;
    }

    public function getMediaAnual() {
        return $this -> mediaAnual;
    }

    public function setMediaAnual($mediaAnual) {
        $this->mediaAnual = $mediaAnual;
    }
}




// métodos especiais devem ser publicos, pois eles serã acessados de fora das classes.

// a palavra reservada $this é usada para quando se refere a classe, de dentro dela. Ou seja, quando eu escrevo 'return $this -> nome. é como se eu escrevesse: returnAluno->nome.

// os métodos gets sempre retornam algo e o métodos sets sempre manipulam o atributo e insere valor dentro eles, por isso, tais métodos recebem parâmetros que serão alocados aos atributos.

// por fim, tais métodos são uma forma de acessar ou manipular os atributos que não são públicos. Porem, é recomendado que mesmo os públicos precisam de tais métodos para acessá-los ou manipulá-los.

?>