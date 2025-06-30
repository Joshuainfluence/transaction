<?php
require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__. "/../config/session.php";

class AdminContr extends Dbh
{
    private $username;
    private $password;

    private $error;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    private function set_message($type, $message)
    {
        $_SESSION[$type] = $message;
    }

    public function loginAdmin()
    {
        if ($this->username !== "jay" && $this->password !== "mik") {
            $this->set_message("error", "Admin Login incorrect!");
            header("Location: ../admin/index.php");
        }

        header("Location: ../admin/form.php");
         $this->set_message("success", "Login successful");
    }
}
