
<?php

// checking is the form was submitted successfully
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // fetching out the details from the form

    $bank_name = htmlspecialchars($_POST['bank_name'], ENT_QUOTES, 'UTF-8');
    $account_number = htmlspecialchars($_POST['account_number'], ENT_QUOTES, 'UTF-8');
    $account_type = htmlspecialchars($_POST['account_type'], ENT_QUOTES, 'UTF-8');
    $balance_amount = htmlspecialchars($_POST['balance_amount'], ENT_QUOTES, 'UTF-8');
    
    $details = htmlspecialchars($_POST['details'], ENT_QUOTES, 'UTF-8');
    $passcode = rand(000000, 999999);


    
    // including all necessary files
    require_once __DIR__ . "/../config/dbh.php";
    require_once __DIR__ . "/../config/session.php";
    require_once __DIR__ . "/../public/balance.classes.php";
    require_once __DIR__ . "/../public/balance.contr.php";

    // With the help of require_once we are able to get the signup controller class 
    // which is responsible for all form validation 
    $insert = new BalanceContr($bank_name, $account_number, $account_type, $balance_amount, $details, $passcode);

    // signUser is a method created in the controller class for final execution 
    // header("Location: ../sendEmail/send.php?error=none");
    // header("Location: ../sendEmail/send.php?error=none");
    // header("Location: ../sendEmail/send.php?error=none");
    $insert->insertBalance();
    header("Location: ../admin/view_balance.php");
}




