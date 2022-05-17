<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of User
 *
 * @author fabio
 */
class User 
{

    public $firstName;
    public $lastName;
    public $email;

    public function getFirstName()//Método para obter o nome
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)//Método para manipular 
    {
        
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function getEmail() {
        return $this->email;
    }   

    public function setEmail($email) {
        $this->email = $email;//Armazena email na propriedade email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){//Verifica email
            return true;            
        } else {
            return false;
        }
    }
}
