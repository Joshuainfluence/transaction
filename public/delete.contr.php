<?php

require_once __DIR__ . "/../config/session.php";
// require_once __DIR__."/../public/signup.classes.php";
class DeleteContr extends Delete
{
    private $id;
    
    public function __construct($id)
    {
        $this->id = $id;
        
        
    }


    public function transactionDelete()
    {
       
       return $this->deleteTransaction($this->id);
    }


    


}
