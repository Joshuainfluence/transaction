<?php
require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__ ."/../config/session.php";

class Display extends Dbh{
    // protected function displayDetails($status): array
    // {
    //     $sql = "SELECT * FROM information WHERE status = ?";
    //     $stmt = $this->connection()->prepare(query: $sql);
    //     if (!$stmt->execute([$status])) {
    //         $stmt = null;
    //         exit();
    //     }
    //     $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $details;
    // }


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