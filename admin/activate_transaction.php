<?php
// admin/activate_transaction.php
require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__ . "/../config/session.php";

// Get transaction ID from the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Update the transaction status to active (1)
    $sql = "UPDATE information SET status = 1 WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Redirect back to the transactions page
    header("Location: view_transactions.php");
    exit();
}
?>
