
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    <link rel="icon" href="../Images/logo.png" type="image/x-icon">
    <title>BAP's Registration Form</title>
</head>
<body>
  
    <div class="registrationContainer">
        <div class="registrationFormContainer">
            <div class="registrationTitle">
                <span class="textBeABaps">BE A BAP'S NOW</span> <br>
                <span class="textSignup">SIGNUP BY FILLING UP THE FORM</span>
            </div>
            <form action="addRegistration.php" method="post">
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
                                House #/ Street Name/ Village Name
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
                            <div class="submitRegistrationContainer">
                                <button type="submit" class="buttonRegistrationSubmit" name = "insert">Submit</button>
                             </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="sideBarRed">
            <p class="bonusSignup"> SIGN UP AND GET 50 PESOS OFF ON YOUR FIRST PURCHASE</p>
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