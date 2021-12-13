<?php
//polimofirmo

abstract class Animal {

    public function falar(){

        return "som";
    }

    public function mover()
    {

        return "anda";
    }
}

class Cachorro extends Animal {

    public function falar()
    {
        
        return "auau";
    }
}

class Gato extends Animal {

    public function falar()
    {

        return 'miau';
    }
}

class Pintinho extends Animal {

    public function falar()
    {
        
        return "piu";
    }
}

class Sapo extends Animal {

    public function falar()
    {

        return 'croac-croac';

    }

    public function mover()
    {
        
        return 'pula e ' . parent::mover();
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "<hr>";

$lyra = new Gato;

echo $lyra->falar() . "<br>";
echo $lyra->mover() . "<br>";

$sujinho = new Sapo;

echo "<hr>";

echo $sujinho->falar() . "<br>";
echo $sujinho->mover() . "<br>";

?>