<?php
 ob_start();
session_start();
if (empty($_SESSION)) {
    header("location:http://localhost/exam_epidemia");
}
if (isset($_GET['deconnexion'])) {
    session_unset();
    session_destroy();
    header("location:http://localhost/exam_epidemia");
}

include("models/Pays.php");
include("models/PointSurveillance.php");
include("models/Role.php");
include("models/User.php");
include("models/Zone.php");
include("models/DBConnexion.php");
include("views/header.php");
include("views/messagesFlash.php");

$url = empty($_GET['url']) ? "dashboard" : $_GET['url'];

switch ($url) {
    case 'dashboard':
        include('views/dashboard.php');
        break;
    case 'pays':
        include('controllers/paysController.php');
        break;
    case 'pointSurveillance':
        include('controllers/pointSurveillanceController.php');
        break;
    case 'role':
        include('controllers/userController.php');
        break;
    case 'user':
        include('controllers/userController.php');
        break;
    case 'zone':
        include('controllers/zoneController.php');
        break;
}
include("views/footer.php");
