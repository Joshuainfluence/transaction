<?php
require_once __DIR__ . "/../config/dbh.php";
class Show extends Dbh{
    protected function showTransactions($status)
    {
        $sql = "SELECT * FROM information WHERE status != ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$status])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
}