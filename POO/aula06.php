<?php
//herança

class Documento {

    private $numero;

    public function getNumero(){

        return $this->numero;
    }

    public function setNUmero($n){

        $this -> numero = $n;
    }

}

class CPF extends Documento {

    /*public function validar():bool{

        $numero = $this -> getNumero();

        return true;
    }*/
}




?>