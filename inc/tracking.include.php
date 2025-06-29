<?php 
require_once __DIR__. "/../config/session.php";

$tracking_number = $_GET['tracking_number'];
require_once __DIR__. "/../public/tracking.classes.php";
require_once __DIR__. "/../public/tracking.contr.php";
$track = new TrackingContr($tracking_number);
$track->trackingValidate();

$_SESSION['tracking_number'] = $tracking_number;
header("Location: ../index.php?success: user found");

