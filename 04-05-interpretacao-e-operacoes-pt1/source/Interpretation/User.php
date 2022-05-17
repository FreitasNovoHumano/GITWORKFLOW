<?php

namespace source\Interpretation;

class User 
{
    private $firstName;
    private $lastName;
    private $email;

//Método executado automaticamente quando a classe é instânciada no obj  
    public function __construct($firstName, $lastName, $email)//3 parâmetros
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
    
    public function __clone() 
    {
        $this->firstName = null;
        $this->lastName = null;
        echo "<p class='trigger'>Clonou!/p>";//Não é boa prática o uso do echo
    }
    
    public function __destruct() 
    {
        var_dump($this);
        echo "<p class='trigger accept'>O objeto {$this->firstName} foi destruído!</p>";
    }

    
    public function getFistName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }
//SET é o método para manipular as propriedades
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function setLastName($lastName): void {
        $this->lastName = $lastName;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }


}
