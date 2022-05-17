<?php

namespace Source\Related;

class User 
{
    private $job;
    private $firstName;
    private $lastname;
    
    
    public function __construct($job, $firstName, $lastName) 
    {
        $this->job = $job;
        $this->firstName = $firstName;
        $this->lastname = $lastName;        
    }
    
    public function getJob() {
        return $this->job;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastname() {
        return $this->lastname;
    }
}
