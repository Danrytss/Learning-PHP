<?php
//atributos e métodos

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo() { //pegar, retornam algo

        return $this->modelo;
    }

    public function setModelo($modelo) { //definir, colocar, manipulam o atributo e insere valor dentro deles

        $this->modelo = $modelo;
    }
    
    public function getMotor ():int {
        
        return $this ->motor;
    }

    public function setMotor ($motor) {

         $this->motor = $motor;
    }

    public function getAno ():int {

        return $this ->ano;
    }

    public function setAno ($ano) {

        $this->ano = $ano;
    }

    public function exibir() {

        return array(
            'modelo'=>$this->getModelo(),
            'motor'=>$this->getMotor(),
            'ano'=>$this->getAno()

        );// fechando array
    } //fechando método
}//fechando Carro

$onix = new Carro();
$onix->setModelo  ('Onix Turbo');
$onix->setMotor ('1.6');
$onix->setAno ('2021');

var_dump ($onix->exibir());



?>