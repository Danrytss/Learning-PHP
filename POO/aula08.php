<?php
//Classe abstrata 

//Classe abstrata é como um rascunho para outras classes que serão herdadas dela; ela não pode ser instanciada. Interface define um padrão para a classe, um comportamento que ela deverá seguir

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){

        echo "O veículo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade)
    {
        echo "O veículo frenou a " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha a " . $marcha . 'ª' . " marcha.";
    }

}

class DelRey extends Automovel {

    public function empurrar() {


    }
}

$carro = new DelRey();

$carro-> acelerar(200);
?>