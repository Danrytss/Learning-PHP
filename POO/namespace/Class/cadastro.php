<?php

class Cadastro {

    private $name;
    private $email;
    private $password;

    public function getName():string
    {
        return $this->name;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function getPassword():string
    {
        return $this->password;
    }

    public function setName($name)
    {
        $this-> name = $name;
    }

    public function setEmail($email)
    {
        $this-> email = $email;
    }

    public function setPassword($password)
    {
        $this-> password = $password;
    }

    public function __toString()
    {
        return json_encode(array(
            "name"=>$this->getName(),
            "email"=>$this->getEmail(),
            "password"=>$this->getPassword()
        ));
    }

}

?>