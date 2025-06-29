<?php

require_once __DIR__ . "/../config/session.php";
// require_once __DIR__."/../public/signup.classes.php";
class ActivateContr extends Activate
{
    private $id;
    
    public function __construct($id)
    {
        $this->id = $id;
        
        
    }


    public function transactionActivate()
    {
       
       return $this->activateTransactions($this->id);
    }


    public function transactionDeactivate()
    {
       
       return $this->deactivateTransactions($this->id);
    }


}
