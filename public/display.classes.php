<?php
require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__ ."/../config/session.php";

class Display extends Dbh{
    // WORKING WITH TRACKING NUMBER

    protected function displayDetails($tracking_number): array
    {
        $sql = "SELECT * FROM information WHERE tracking_number = ?";
        $stmt = $this->connection()->prepare(query: $sql);
        if (!$stmt->execute([$tracking_number])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
}