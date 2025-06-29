<?php
require_once __DIR__. "/../config/dbh.php";
class Delete extends Dbh{
    protected function deleteTransaction($id){
        $sql = "DELETE FROM information WHERE id = ?";
        // $stmt = $this->connection()->prepare($sql);
        $statement = $this->connection()->prepare($sql);

        // $statement->bindParam(':id', $id);

        if (!$statement->execute([$id])) {
            $statement = null;
            exit();
        }
        return null;
    }
}