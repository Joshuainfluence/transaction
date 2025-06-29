
<?php

// checking is the form was submitted successfully
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // fetching out the details from the form

    $bank_name = htmlspecialchars($_POST['bank_name'], ENT_QUOTES, 'UTF-8');
    $account_number = htmlspecialchars($_POST['account_number'], ENT_QUOTES, 'UTF-8');
    $account_type = htmlspecialchars($_POST['account_type'], ENT_QUOTES, 'UTF-8');
    $amount = htmlspecialchars($_POST['amount'], ENT_QUOTES, 'UTF-8');
    $transaction_date = htmlspecialchars($_POST['transaction_date'], ENT_QUOTES, 'UTF-8');
    $foreign_writeup = htmlspecialchars($_POST['foreign_writeup'], ENT_QUOTES, 'UTF-8');
    $tracking_number = rand(000000, 999999);


    
    // including all necessary files
    require_once __DIR__ . "/../config/dbh.php";
    require_once __DIR__ . "/../config/session.php";
    require_once __DIR__ . "/../public/insert.classes.php";
    require_once __DIR__ . "/../public/insert.contr.php";

    // With the help of require_once we are able to get the signup controller class 
    // which is responsible for all form validation 
    $insert = new InsertContr($bank_name, $account_number, $account_type, $amount, $transaction_date, $foreign_writeup, $tracking_number);

    // signUser is a method created in the controller class for final execution 
    // header("Location: ../sendEmail/send.php?error=none");
    // header("Location: ../sendEmail/send.php?error=none");
    // header("Location: ../sendEmail/send.php?error=none");
    $insert->insertDetails();
    header("Location: ../admin/view_transactions.php");
}




