<?php
    include_once 'connectDatabase.php';
 //login_success.php  
    session_start();  
    if (!isset($_SESSION['userName'])) {
    $_SESSION['msg'] = "You have to log in first";
    }

    try {
        // connect to mysql
        $pdoConnect = new PDO("mysql:host=localhost;dbname=baps","root","");
        // set the PDO error mode to exception
        $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
        } 
    
        if(isset($_POST["update"])){
            $firstName = $_POST['firstName'];
            $middleName = $_POST['middleName'];
            $lastName = $_POST['lastName'];
            $streetNumber = $_POST['streetNumber'];
            $barangayName = $_POST['barangayName'];
            $cityName = $_POST['cityName'];
            $provinceName = $_POST['provinceName'];
            $postalCode = $_POST['postalCode'];
            $contactNumber = $_POST['contactNumber'];
            $userName = $_POST['userName'];
            $passwordInput = $_POST['passwordInput'];
            $confirmPass = $_POST['confirmPass'];
    
            $pdoQuery = "UPDATE registrationbaps SET firstName = :firstName, middleName = :middleName , lastName = :lastName ,streetNumber = :streetNumber ,barangayName = :barangayName ,cityName = :cityName ,provinceName = :provinceName ,postalCode = :postalCode ,contactNumber = :contactNumber ,userName = :userName ,passwordInput = :passwordInput WHERE userName = '{$_SESSION['userName']}' AND passwordInput = '{$_SESSION['passwordInput']}'";
            $pdoQuery_run = $pdoConnect->prepare($pdoQuery);
            $pdoQuery_exec = $pdoQuery_run -> execute(array(":firstName"=>$firstName,":middleName"=>$middleName,":lastName"=>$lastName,":streetNumber"=>$streetNumber,":barangayName"=>$barangayName,":cityName"=>$cityName,":provinceName"=>$provinceName,":postalCode"=>$postalCode,":contactNumber"=>$contactNumber,":userName"=>$userName,":passwordInput"=>$passwordInput));
            if($pdoQuery_exec)
            {
                $_SESSION['userName'] = $userName;
                $_SESSION["passwordInput"] = $passwordInput;
                header('location:ProfileWebpage.php');
            }
            else{
                echo "<script>Data not updated</script>";
            }
        }
        $pdoQuery = $pdoConnect->prepare("SELECT * FROM registrationbaps where userName ='{$_SESSION['userName']}' AND passwordInput ='{$_SESSION['passwordInput']}' ");
        $pdoQuery->execute();
        $pdoResult = $pdoQuery->fetchAll();
        $pdoConnect = null;
          
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    <link rel="icon" href="../Images/logo.png" type="image/x-icon">
    <title>BAP's Edit Data</title>
</head>
<body>
  
    <div class="registrationContainer">
        <div class="registrationFormContainer">
            <div class="registrationTitle">
                <span class="textBeABaps">CERTIFIED BAP'S CUSTOMER</span> <br>
                <span class="textSignup">UPDATE BY FILLING UP THE FORM</span>
            </div>
            <form method="post">
                <div class="formContainer">
                    <div class="formThreeColumns">
                        <form></form>
                        <div class="formContent">
                            <div class="labelForm">
                                First Name
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBoxName" type="text" name="firstName" required placeholder="ex. Juan">
                            </div>
                        </div>  
                        <div class="formContent">
                            <div class="labelForm">
                                Middle Name
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBoxName" type="text" name="middleName" required placeholder="ex. Aguinaldo">
                            </div>
                        </div>   
                        <div class="formContent">
                            <div class="labelForm">
                                Last Name
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBoxName" type="text" name="lastName" required placeholder="ex. Dela Cruz">
                            </div>
                        </div>   
                        
                    </div>

                    <div class="formTwoColumns">
                        <div class="formContent">
                            <div class="labelForm">
                                Street Number
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBox" type="text" name="streetNumber" required placeholder="ex. 12 Maginhawa Street">
                            </div>
                        </div>  

                        <div class="formContent">
                            <div class="labelForm">
                                Barangay
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBox" type="text" name="barangayName" required placeholder="ex. San Pedro">
                            </div>
                        </div> 
                        <div class="formContent">
                            <div class="labelForm">
                                City/Municipality
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBox" type="text" name="cityName" required placeholder="ex. Santa Ana">
                            </div>
                        </div>  

                        <div class="formContent">
                            <div class="labelForm">
                               Province
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBox" type="text" name="provinceName" required placeholder="ex. Pampanga">
                            </div>
                        </div>
                    </div>

                    <div class="formCenterPostalCode">
                        <div class="formContent">
                            <div class="labelForm">
                                Postal Code
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBox" type="number" name="postalCode" required placeholder="ex. 2022">
                            </div>
                        </div>
                    </div> 
                    <br><br>
                    <div class="formTwoColumns">
                        <div class="formContent">
                            <div class="labelForm">
                                Contact Number
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBox" type="number" name="contactNumber" required placeholder="ex. 09552524725">
                            </div>
                        </div>   
                        <div class="formContent">
                            <div class="labelForm">
                                Username
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBox" type="text" name="userName" required placeholder="ex. zippybeastxx">
                            </div>
                        </div>   
                        <div class="formContent">
                            <div class="labelForm">
                                Password
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBox" type="password" name="passwordInput" placeholder="Password" id = "passwordInput1" required>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="labelForm">
                                Confirm Password
                            </div>
                                <div class="inputForm">                                    
                                    <input class="inputBox" type="password" name="confirmPass" placeholder="Confirm Password" id = "passwordInput2" required>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="showPassword"><input type="checkbox" onclick="myFunction()">Show Password</div>
                        </div>
                        
                        <div class="formContent">
                            <div class="submitContainer">
                                <button type="submit" class="buttonRegistrationSubmit" name = "update">UPDATE</button>
                             </div>
                        </div>      
                    </div>
                </div>
            </form>
        </div>
        <div class="sideBarRed">
            <p class="bonusSignup"> FILL UP THE FORMS TO UPDATE YOUR INFORMATIONS</p>
        </div>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("passwordInput1");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
          var x = document.getElementById("passwordInput2");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
</body>
</html>

<?php
  
?>