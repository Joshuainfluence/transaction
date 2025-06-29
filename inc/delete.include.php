<?php
require_once __DIR__. "/../public/delete.classes.php";
require_once __DIR__. "/../public/delete.contr.php";
$id = $_GET['id'];
$delete = new DeleteContr( $id );
$delete->transactionDelete();
header("Location: ../admin/view_transactions.php");
