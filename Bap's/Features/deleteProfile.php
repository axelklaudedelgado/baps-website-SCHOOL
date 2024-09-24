<?php
    session_start();
    require_once("connectDatabase.php");
    if (!isset($_SESSION['userName'])) {
        $_SESSION['msg'] = "You have to log in first";
        }
        $userName = $_SESSION['userName'];
        $passwordInput = $_SESSION['passwordInput'];
        $pdoQuery = "DELETE FROM registrationBaps WHERE userName = :userName AND passwordInput = :passwordInput";
        $pdoResult =  $pdoConnect->prepare($pdoQuery);
        $pdoResult->execute(array(":userName" => $userName,":passwordInput"=>$passwordInput));
        header('location:deleteAccountConfirmation.php');

	$pdoConnect = null;
?>