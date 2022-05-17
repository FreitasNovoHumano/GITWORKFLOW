<?php

namespace source\Inheritance\Event;

class EventOnline  extends Event
{
    private $link;
    
    public function __construct($event, \DateTime $date, $price, $link, $vacancies = null) {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }
    
    public function register($fullName, $email,) 
    {
        $this->vacancies += 1;
        $this->getRegister($fullName, $email);
        echo "<p>Show {$fullName}, cadastro com sucesso!</p>";       
    }
}
