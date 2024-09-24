<?php
// php pdo insert data to mysql database 
if(isset($_POST['insert']))
{
    try {
        // connect to mysql
    $pdoConnect = new PDO("mysql:host=localhost;dbname=baps","root","");
    // set the PDO error mode to exception
    $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    // get values form input text and number
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

   
    // mysql query to insert data
    $pdoQuery = "INSERT INTO `registrationbaps`(`firstName`, `middleName`, `lastName`, `streetNumber`, `barangayName`, `cityName`, `provinceName`, `postalCode`, `contactNumber`, `userName`, `passwordInput`) VALUES (:firstName,:middleName,:lastName,:streetNumber,:barangayName,:cityName,:provinceName,:postalCode,:contactNumber,:userName,:passwordInput)";
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    $pdoExec = $pdoResult->execute(array(":firstName"=>$firstName,":middleName"=>$middleName,":lastName"=>$lastName,":streetNumber"=>$streetNumber,":barangayName"=>$barangayName,":cityName"=>$cityName,":provinceName"=>$provinceName,":postalCode"=>$postalCode,":contactNumber"=>$contactNumber,":userName"=>$userName,":passwordInput"=>$passwordInput));
    
    // check if mysql insert query successful
    if($pdoExec AND ($passwordInput == $confirmPass))
    {
        // retrieve all files and display
        $pdoQuery = 'SELECT * FROM registrationBaps';
        $pdoResult =  $pdoConnect->prepare($pdoQuery);
        $pdoResult->execute();
            while ($row = $pdoResult->fetch()){
                echo  $row['firstName'] . " | " .$row['middleName'] . " | " . $row['lastName'] . " | " . $row['streetNumberber'] . " | " . $row['barangayName'] . " | " . $row['cityName'] . " | " . $row['provinceName'] . " | " . $row['postalCode'] . " | " . $row['contactNumber'] . " | " . $row['userName'] . " | " . $row['passwordInput'] . "<br/>";
            }
            
            header("Location: registrationConfirmation.php");
            exit;
        } else {
            echo 'Data Not Inserted';
    }
}
$pdoConnect = null;
?>
