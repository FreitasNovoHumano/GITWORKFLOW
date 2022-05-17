<?php

namespace Source\Related;

class Company 
{
    private $company;
    
    /**
     * 
     * @var Address
     */
    private $address;
    private $team;
    private $products;
    
    public function bootCompany($company, $address)
    {
        $this->company = $company;
        $this->address = $address;
    }
    
    //Método só vai aceitar obj da classe Address
    public function boot($company, Address $address) 
    {
        $this->company = $company;
        $this->address = $address;        
    }
    
    public function addProduct($product) 
    {
        $this->products[] = $product;        
    }
    
    public function addTeamMember($job, $firstName, $lastname) 
    {
        $this->team[] = new User($job, $firstName, $lastname);        
    }

    public function getCompany() {
        return $this->company;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getTeam() {
        return $this->team;
    }

    public function getProducts() {
        return $this->products;
    }


}
