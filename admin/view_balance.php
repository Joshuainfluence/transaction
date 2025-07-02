<?php

use Dba\Connection;
// admin/view_transactions.php
require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__ . "/../config/session.php";
require_once __DIR__ . "/../public/show.classes.php";
require_once __DIR__ . "/../public/show.contr.php";

// Fetch all transactions from the database
// $sql = "SELECT * FROM information";
// $stmt = $dbh->prepare($sql);
// $stmt->execute();
// $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
$id = 0;

$transactions = new ShowContr($id);
$transactions = $transactions->balanceShow()
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Transactions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <!-- <h2>All Transactions</h2> -->
        <div class="d-flex justify-content-between mb-2">
            <h2 class="text-center">View Transactions</h2>
            <a href="admin-view" class="btn btn-outline-dark">View Transaction</a>
            <a href="admin-create" class="btn btn-outline-dark">create transactions</a>
            <a href="admin-create_balance" class="btn btn-outline-dark">Create Balance</a>

        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Bank Name</th>
                    <th>Account Number</th>
                    <th>Balance</th>

                    <th>Passcode</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactions as $transaction) : ?>
                    <tr>
                        <td><?= $transaction['id'] ?></td>
                        <td><?= $transaction['bank_name'] ?></td>
                        <td><?= $transaction['account_number'] ?></td>
                        <td><?= $transaction['balance_amount'] ?></td>

                        <td><?= $transaction['passcode'] ?></td>

                        <td><?= $transaction['details'] ?></td>
                        <td>
                            <? #php if ($transaction['status'] == 0) : 
                            ?>
                            <!-- <a href="../inc/activate.include.php?id=<? #= $transaction['id'] 
                                                                            ?>" class="btn btn-success">Activate</a> -->
                            <? #php else : 
                            ?>
                            <!-- <button class="btn btn-secondary" disabled>Activated</button> -->
                            <!-- <a href="../inc/deactivate.include.php?id=<? #= $transaction['id'] 
                                                                            ?>" class="btn btn-danger">Deactivate</a> -->
                            <a href="../inc/delete.include.php?id=<?= $transaction['id'] ?>" class="btn btn-danger">Delete</a>

                            <? #php endif; 
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>