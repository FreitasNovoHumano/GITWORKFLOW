<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace source\Qualifield;

class User 
{

    private $firstName;
    private $lastName;
    private $email;
    
    private $error;//Ter controle em o que acontece na aplicação
    
    public function setUser($firstName, $lastName, $email)//Arg obrigatórios
    {//Método acessado somente através da classe, por estar encapsulado
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        
        if (!$this->setEmail($email)){
            $this->error = "O e-mail {$this->getEmail()} não é válido";
            return false;
        }
        
        return true;
    }
    
    public function getError() {//Disponibilizando acesso ao private error
        return $this->error;
    }

    
    public function getFirstName()//Método para obter o nome
    {
        return $this->firstName;
    }

    private function setFirstName($firstName)//Método para manipular 
    {
        
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function getLastName() {
        return $this->lastName;
    }

    private function setLastName($lastName) {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function getEmail() {
        return $this->email;
    }   

    private function setEmail($email) {
        $this->email = $email;//Armazena email na propriedade email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){//Verifica email
            return true;            
        } else {
            return false;
        }
    }
}
