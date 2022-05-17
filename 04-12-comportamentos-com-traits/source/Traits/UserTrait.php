<?php

namespace Source\Traits;

trait UserTrait 
{
    private $user;
    
    /**
     * @return User
     */
    public function getUser(): User 
    {
        return $this->user;
    }
    
    /**
     * @return mixed
     */
    public function setUser( User $user): void 
    {
        $this->user = $user;
    }
}
