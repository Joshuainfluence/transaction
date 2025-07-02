<?php

require_once __DIR__ . "/../config/session.php";
// require_once __DIR__."/../public/signup.classes.php";
class BalanceContr extends Balance
{
    private $bank_name;
    private $account_number;
    private $account_type;
    private $balance_amount;

    private $details;

    private $passcode;

    private $status;




    //property to store validation error
    //setting it to public to have access to it from the index file

    public $error;
    // public $verification;


    public function __construct($bank_name, $account_number, $account_type, $balance_amount, $details, $passcode)
    {
        $this->bank_name = $bank_name;
        $this->account_number = $account_number;
        $this->account_type = $account_type;
        $this->balance_amount = $balance_amount;

        $this->details = $details;
        $this->passcode = $passcode;
    }

    private function emptyInput()
    {
        $result = 0;
        if (empty($this->bank_name) || empty($this->account_number) || empty($this->account_type) || empty($this->balance_amount) || empty($this->details)) {
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


    public function insertBalance()
    {
        if ($this->emptyInput() == true) {
            $this->set_message("error", "Fields cannot be empty");
            header("Location: ../admin/form.php?error=emptyfields");
            exit();
        }



        $this->set_message("success", "Registration successful");

        $this->balance($this->bank_name, $this->account_number, $this->account_type, $this->balance_amount, $this->details, $this->passcode);
    }
}
