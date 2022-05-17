<?php

namespace source\Inheritance\Event;

use Source\Inheritance\Address;

class EventLive extends Event 
{
    /**
     * 
     * @var Address
     */
    protected $address;
    
    public function __construct($event, \DateTime $date, $price, $vacancies, Address $address) {
        parent::__construct($event, $date, $price, $vacancies);
        $this->address = $address;
    }
    
    public function getAddress(): Address 
    {
        return $this->address;
    }
}
