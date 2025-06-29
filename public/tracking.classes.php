<?php 
require_once __DIR__. "/../config/dbh.php";
class Tracking extends Dbh{
    private function set_message($type, $message){
        return $_SESSION[$type] = $message;
    }
    protected function validateTracking($tracking_number)
    {
        $sql = "SELECT * FROM information WHERE tracking_number = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$tracking_number])) {
            $stmt = null;
            exit();
        }

        if ($stmt->rowCount() === 0) {
           $stmt = null;
           $this->set_message("error", "User not found");
           header("Location: ../index.php?error: use not found");
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
}