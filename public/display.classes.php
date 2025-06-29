<?php
require_once __DIR__ . "/../config/dbh.php";
class Display extends Dbh{
    protected function displayDetails($status): array
    {
        $sql = "SELECT * FROM information WHERE status = ?";
        $stmt = $this->connection()->prepare(query: $sql);
        if (!$stmt->execute([$status])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
}