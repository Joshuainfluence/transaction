<?php
require_once __DIR__ . "/../config/dbh.php";

class Insert extends Dbh
{

    // to insert users into the database or signup users
    protected function Insert($bank_name, $account_number, $account_type, $balance_amount, $details, $passcode)
    {
        $sql = "INSERT INTO balance(bank_name, account_number, account_type, balance_amount, details, passcode) VALUES(:bank_name, :account_number, :account_type, :balance_amount, :details, :passcode)";
        $statement = $this->connection()->prepare($sql);

        
        $statement->bindParam(':bank_name', $bank_name);
        $statement->bindParam(':account_number', $account_number);
        $statement->bindParam(':account_type', $account_type); 
        $statement->bindParam(':balance_amount', $balance_amount);
        $statement->bindParam(':details', $details);
        $statement->bindParam(':passcode', $passcode);
        



        if (!$statement->execute()) {
            $statement = null;
            header("Location: ../form.php?error=stmtfailed");
            exit();
        }

        $statement = null;
    }
}