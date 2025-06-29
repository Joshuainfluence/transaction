<?php
require_once __DIR__. "/../public/activate.classes.php";
require_once __DIR__. "/../public/activate.contr.php";
$id = $_GET['id'];
$activate = new ActivateContr( $id );
$activate->transactionActivate();
header("Location: ../admin/view_transactions.php");
