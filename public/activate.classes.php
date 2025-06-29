<?php
require_once __DIR__ . "/../config/dbh.php";
class Activate extends Dbh{
    protected function activateTransactions($id)
    {
        $sql = "UPDATE information SET status = 1 WHERE id = :id";
        // $stmt = $this->connection()->prepare($sql);
        $statement = $this->connection()->prepare($sql);

        $statement->bindParam(':id', $id);

        if (!$statement->execute()) {
            $statement = null;
            exit();
        }
        return null;
    }


    protected function deactivateTransactions($id)
    {
        $sql = "UPDATE information SET status = 0 WHERE id = :id";
        // $stmt = $this->connection()->prepare($sql);
        $statement = $this->connection()->prepare($sql);

        $statement->bindParam(':id', $id);

        if (!$statement->execute()) {
            $statement = null;
            exit();
        }
        return null;
    }
}