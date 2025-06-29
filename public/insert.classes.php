<?php
require_once __DIR__ . "/../config/dbh.php";

class Insert extends Dbh
{

    // to insert users into the database or signup users
    protected function Insert($bank_name, $account_number, $account_type, $amount, $transaction_date, $foreign_writeup, $tracking_number)
    {
        $sql = "INSERT INTO information(bank_name, account_number, account_type, amount, transaction_date, foreign_writeup, tracking_number) VALUES(:bank_name, :account_number, :account_type, :amount, :transaction_date, :foreign_writeup, :tracking_number)";
        $statement = $this->connection()->prepare($sql);

        
        $statement->bindParam(':bank_name', $bank_name);
        $statement->bindParam(':account_number', $account_number);
        $statement->bindParam(':account_type', $account_type);
        $statement->bindParam(':amount', $amount);
        $statement->bindParam(':transaction_date', $transaction_date);
        $statement->bindParam(':foreign_writeup', $foreign_writeup);
        $statement->bindParam(':tracking_number', $tracking_number);
        



        if (!$statement->execute()) {
            $statement = null;
            header("Location: ../form.php?error=stmtfailed");
            exit();
        }

        $statement = null;
    }


    // Change the Insert method to Update
// protected function update($id, $bank_name, $account_number, $account_type, $amount, $transaction_date, $foreign_writeup)
// {
//     $sql = "UPDATE information 
//             SET bank_name = :bank_name, account_number = :account_number, account_type = :account_type, amount = :amount, transaction_date = :transaction_date, foreign_writeup = :foreign_writeup 
//             WHERE id = :id";
    
//     $statement = $this->connection()->prepare($sql);

//     $statement->bindParam(':id', $id);
//     $statement->bindParam(':bank_name', $bank_name);
//     $statement->bindParam(':account_number', $account_number);
//     $statement->bindParam(':account_type', $account_type);
//     $statement->bindParam(':amount', $amount);
//     $statement->bindParam(':transaction_date', $transaction_date);
//     $statement->bindParam(':foreign_writeup', $foreign_writeup);

//     if (!$statement->execute()) {
//         $statement = null;
//         header("Location: ../admin/form.php?error=stmtfailed");
//         exit();
//     }

//     $statement = null;
// }




 
}