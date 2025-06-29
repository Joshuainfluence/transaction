<?php
// index.php
require_once __DIR__ . "/config/dbh.php";
require_once __DIR__ . "/public/display.classes.php";
require_once __DIR__ . "/public/display.contr.php";
require_once __DIR__ . "/config/session.php";

$_GET['id'] = "transaction";

// Fetch the active transaction from the database
// $sql = "SELECT * FROM information WHERE status = 1 LIMIT 1"; // Assuming only one active transaction at a time
// $stmt = $dbh->prepare($sql);
// $stmt->execute();
// $transaction = $stmt->fetch(PDO::FETCH_ASSOC);
// $status = 1;
$tracking_number = $_SESSION['tracking_number'];
// $limit = 1;
$transactions = new DisplayContr($tracking_number);
$transactions = $transactions->detailsDisplay();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
</head>

<body>
    <?php foreach ($transactions as $transaction): ?>
    <header>
        <nav>
            <div class="logo">
                <?= ucwords($transaction['bank_name'])?>
            </div>
            <div class="mail"></div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
                <div class="col">
                    <h2>
                        <?= isset($transaction['bank_name']) ? ucwords($transaction['bank_name']) : 'No active transaction' ?>
                        <br>Account Type: <?= isset($transaction['account_type']) ? ucfirst($transaction['account_type']) : 'N/A' ?>
                        <br>Account Number: <?= isset($transaction['account_number']) ? $transaction['account_number'] : 'N/A' ?>
                        <br>Tracking number: <?= $_SESSION['tracking_number'] ?>
                        <br>
                        <span style="color: orange;"><?= $transaction['bank_name']?></span> is sending you $<?= $transaction['amount']?>
                    </h2>
                    <br>

                    <div class="border">
                        <div class="info">
                            <div class="p">
                                <div class="purple"></div>
                                <div class="writeup">
                                    <?= isset($transaction['foreign_writeup']) ? ucwords($transaction['bank_name']) : 'No foreign transaction details available.' ?>, N.A made a $<?= $transaction['amount']?> transfer
                                </div>
                            </div>
                            <div class="date">
                                <?= isset($transaction['transaction_date']) ? $transaction['transaction_date'] : 'N/A' ?>
                            </div>
                        </div>

                        <div class="transaction">
                            <div class="trans">
                                Transaction Progress
                            </div>
                            <div class="score">
                                97%
                            </div>
                        </div>

                        <div class="progressbar">
                            <div class="bar"></div>
                        </div>

                        <div class="main">
                            <div class="for">
                                <div class="orange"></div>

                                <div class="foreign">
                                    Foreign Transaction Fees
                                </div>
                            </div>

                            <div class="unresolved">
                                Unresolved
                            </div>
                        </div>

                        <div class="transup">
                            <!-- Transaction Unresolved. Your transfer has been fully confirmed and is now in the final stage of processing for international transfer. -->
                            <?= isset($transaction['foreign_writeup']) ? ucfirst( $transaction['foreign_writeup']) : 'No writeup available' ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        
        <script>
        const bar = document.querySelector('.bar');
        const score = document.querySelector('.score');

        let progress = 0;

        const interval = setInterval(() => {
            if (progress <= 97) {
                bar.style.width = progress + '%';
                score.textContent = progress + '%';

                if (progress >= 90) {
                    bar.style.backgroundColor = 'red';
                } else {
                    bar.style.backgroundColor = '#4caf50'; // green
                }

                progress++;
            } else {
                clearInterval(interval);
            }
        }, 50);
    </script>

</body>

</html>