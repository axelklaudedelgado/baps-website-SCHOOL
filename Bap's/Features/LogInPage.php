<?php  

 session_start();  

  require_once 'connectDatabase.php';

  
 try  
 {  
      $pdoConnect = new PDO("mysql:host=localhost;dbname=baps","root",""); 
      $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["userName"]) || empty($_POST["passwordInput"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $pdoQuery = "SELECT * FROM registrationBaps WHERE userName = :userName AND passwordInput = :passwordInput";  
                $pdoResult = $pdoConnect->prepare($pdoQuery);  
                $pdoResult->execute(  
                     array(  
                          'userName'     =>     $_POST["userName"],  
                          'passwordInput'     =>     $_POST["passwordInput"]  

                     )  
                );  
                $count = $pdoResult->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["userName"] = $_POST["userName"];  
                     $_SESSION["passwordInput"] = $_POST["passwordInput"];

                     header("location:../MainWebsite.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  

 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content= "ie=edge">
    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="icon" href="../Images/logo.png" type="image/x-icon">
    <title>BAP'S </title>
</head>

<body>
        
<div class="containerOne">
    <div class="redContainer">
        <div class="websiteName">
             BAP'S 
        </div>
        <div class="mottoContainer">        
            keni mabsi naka, 
            matula kapa
        </div>
        <div class="pickupDelivery">        
            <div class="availableFor">available for:</div>
            <div class="pickUp">pickup</div>
            <div class="deliveryText">delivery</div> 
        </div>
    </div>
    <form method = "post">
        <div class="whiteContainer">
            <div class="loginContainer">
                LOG IN 
            </div>
            <div class="usernameContainer">
            <input type="text" placeholder="Username:" class="usernameInput" name = "userName">
            </div>

            <div class="passwordContainer">
                <input type="password" placeholder="Password:" class="passwordInput" name = "passwordInput">
            </div>
            <div class="loginButton">
                <button class="enterHompage" name = "login"><span class="loginText">LOG IN</span></button>
            </div>
            <div class="accountSignup">
                <div class="accountContainer">
                    NEED AN ACCOUNT?
                </div>
                <div class="signupContainer">
                    <a href="registrationPage.php" class="signText">SIGN UP HERE</a>
                </div>
            </div>
        </div>
    </form>

</div>


</body>
</html>
        