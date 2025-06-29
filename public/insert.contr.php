<?php

require_once __DIR__ . "/../config/session.php";
// require_once __DIR__."/../public/signup.classes.php";
class InsertContr extends Insert
{
    private $bank_name;
    private $account_number;
    private $account_type;
    private $amount;
    private $transaction_date;
    private $foreign_writeup;

    private $tracking_number;

    private $status;
    


    
    //property to store validation error
    //setting it to public to have access to it from the index file

    public $error;
    // public $verification;


    public function __construct($bank_name, $account_number, $account_type, $amount, $transaction_date, $foreign_writeup, $tracking_number)
    {
        $this->bank_name = $bank_name;
        $this->account_number = $account_number;
        $this->account_type = $account_type;
        $this->amount = $amount;
        $this->transaction_date = $transaction_date;
        $this->foreign_writeup = $foreign_writeup;
        $this->tracking_number = $tracking_number;
        

        
    }

    private function emptyInput()
    {
        $result = 0;
        if (empty($this->bank_name) || empty($this->account_number) || empty($this->account_type) || empty($this->amount) || empty($this->transaction_date) || empty($this->foreign_writeup) ) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }




    private function set_message($type, $message)
    {
        $_SESSION[$type] = $message;
    }


    public function insertDetails()
    {
        if ($this->emptyInput() == true) {
            $this->set_message("error", "Fields cannot be empty");
            header("Location: ../admin/form.php?error=emptyfields");
            exit();
        }


        
        $this->set_message("success", "Registration successful");
      
        $this->Insert($this->bank_name, $this->account_number, $this->account_type, $this->amount, $this->transaction_date, $this->foreign_writeup, $this->tracking_number);
    }



 



}
