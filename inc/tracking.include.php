<?php 

$tracking_number = $_GET['tracking_number'];
require_once __DIR__. "/../public/tracking.classes.php";
require_once __DIR__. "/../public/tracking.contr.php";
$track = new TrackingContr($tracking_number);
$track->trackingValidate();
header("Location: ../index.php?success: user found");

