<?php
require_once __DIR__. "/../config/session.php";
require_once __DIR__. "/../public/admin.contr.php";
$username = $_POST['username'];
$password = $_POST['password'];

$login = new AdminContr($username, $password );
$login->loginAdmin();
header("Location: ../admin/form.php");
