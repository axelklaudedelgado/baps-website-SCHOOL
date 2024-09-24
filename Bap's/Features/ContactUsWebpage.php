<?php
    require_once("connectDatabase.php");
    session_start();
    if (!isset($_SESSION['userName'])) {
        $_SESSION['msg'] = "You have to log in first";
        header("location:LogInPage.php");
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

        $emailAddress = $_POST['emailAddress'];
        $messageQuestion = trim($_POST['messageQuestion']);
        
        if(isset($_POST['messageSubmit'])){
            $userName = $_SESSION['userName'];
            $passwordInput = $_SESSION['passwordInput'];
            $pdoQuery = "UPDATE registrationbaps SET emailAddress = :emailAddress , messageQuestion = :messageQuestion WHERE userName = '{$_SESSION['userName']}' AND passwordInput = '{$_SESSION['passwordInput']}'";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoExec = $pdoResult->execute(array(":emailAddress"=>$emailAddress,":messageQuestion"=>$messageQuestion));
            if($pdoExec){
                header("location:../Features/ContactUsWebpageConfirmation.php");
            }
            else{

            }
        }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>BAP's Contact Us</title>
        <link rel="icon" href="../Images/logo.png" type="image/x-icon">
        <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    </head>
    <header class="headerContainer">
        <div class="buttonContainer">
            <div><a href="../MainWebsite.php"><img src="../Images/logo.png" class="logoPic"></a></div>
            <div><a href="../MainWebsite.php" class="notHiglighted"><span class="homepageButton">HOME</span></a></div>
            <div><a href="../Features/MenuWebpage.php" class="notHiglighted"><span class="productsButton">PRODUCTS</span></a></div>
            <div><a href="../Features/About.php" class="notHiglighted"><span class="aboutButton">ABOUT</span></a></div>
            <div><a href="../Features/deliveryAndPayment.php" class="notHiglighted"><span class="deliveryButton">DELIVERY</span></a></div>
            <div><a href="../Features/ContactUsWebpage.php" class="highlightedPage"><span class="contactButton">CONTACT US</span></a></div>
        </div>
        <div class="iconContainer">
            <div class="iconText"><a href="../Features/ProfileWebpage.php"><?php try {
                $pdoConnect = new PDO("mysql:host=localhost;dbname=baps","root","");
            } catch (PDOException $exc) {
                echo $exc->getMessage();
                exit();
            }

                $userName = $_SESSION['userName'];
                $passwordInput = $_SESSION['passwordInput'];
                $pdoQuery = "SELECT * FROM registrationbaps WHERE userName = :userName AND passwordInput = :passwordInput";    
                $pdoResult =  $pdoConnect->prepare($pdoQuery);
                $pdoExec = $pdoResult->execute(array(":userName"=>$userName, ":passwordInput" => $passwordInput));
                echo $userName;
            ?></a></div>
            <div><a href="../Features/ProfileWebpage.php"><img src="../Images/userPlaceholder.png" class="userPlaceholder"></a></div>
        </div>
    </header>
    <body>
    <div class="threeContainer">
        <div class="oneContainer"></div>
        <div class="basicContactsContainer">
            <div class="contactsBox"><img class="contactsImage" src="../Images/gps.png" alt=""></div>
            <div class="contactsBox"><img class="contactsImage" src="../Images/phone.png" alt=""></div>
            <div class="contactsBox"><img class="contactsImage" src="../Images/email.png" alt=""></div>
            <div class="textBoxes"><span class="highlightText">Address: </span>25 G.H. Del Pilar Street,<br> Kalayaan Village, CSFP 2000</div>
            <div class="textBoxes"><span class="highlightText">Phone: </span>09395981709 (Smart)<br>09667359438 (Globe)</div>
            <div class="textBoxes"><span class="highlightText">Email: </span>bapsfoodstation@gmail.com</div>
        </div>
        <div class="headerContainerContact">
            <span class="headerQuestions">GET IN TOUCH WITH US</span><br>
            <span class="sendUsQuestions">Send us your questions, feedback, or inquiries</span>
        </div>
        <form method = "post" enctype="multipart/form-data">
        <div class="contentBox">
            <div class="submitAReview">WHAT CAN WE HELP YOU WITH?</div>
            <div></div>
            <div class="contactUsTextContactWeb">CONNECT WITH US:</div>
            
            <div class="reviewBox">
                <div class="messagePlaceholder">NAME</div>
                <?php
                            try {
                                $pdoConnect = new PDO("mysql:host=localhost;dbname=baps","root","");
                            } catch (PDOException $exc) {
                                echo $exc->getMessage();
                                exit();
                            }
                
                                $userName = $_SESSION['userName'];
                                $passwordInput = $_SESSION['passwordInput'];
                                $pdoQuery = "SELECT * FROM registrationbaps WHERE userName = :userName AND passwordInput = :passwordInput";    
                                $pdoResult =  $pdoConnect->prepare($pdoQuery);
                                $pdoExec = $pdoResult->execute(array(":userName"=>$userName, ":passwordInput" => $passwordInput));
                                if($pdoExec)
					{
							// if id exist 
							// show data in inputs
						if($pdoResult->rowCount()>0)
						{
							while($row=$pdoResult->fetch(PDO::FETCH_ASSOC)) {
								extract($row);
                                echo $firstName," ",$middleName," ",$lastName;

							}
							
						} else {
							echo '<br><br><br><br><br>';
							echo 'No Data';
					}
				}
                        ?>
                <div class="messagePlaceholder">EMAIL</div>
                <input type="text" class="textBoxEmail" placeholder="Email Address" name = "emailAddress">
                <div class="messagePlaceholder">MESSAGE</div>
                <textarea class="textBoxReview" name = "messageQuestion" placeholder="Type your message..." maxlength="400"></textarea>
            </div>
            
            <div></div>
            <div>
                <div class="iconBox">
                    <div><img src="../Images/facebook.png" alt="Facebook" class="iconImage"></div>
                    <div>BAP'S FOOD STATION</div>
                    <div><img src="../Images/messenger.png" alt="Instagram" class="iconImage"></div>
                    <div>m.me/BapsFoodStation</div>
                    <div><img src="../Images/telegram.png" alt="Twitter" class="iconImage"></div>
                    <div>BapsFoodStation</div>   
                </div>
                <div class="reviewPartition">WANT TO SUBMIT A<br>REVIEW INSTEAD?</div>   
            </div>  
            <div class="messageSubmit">
                <button class="submitButton" name = "messageSubmit"><span class="submitText">SUBMIT</span></button>
            </div>  
            </form>
            <div></div>
            <div class="proceedContainer"><a href="submitReview.php"><button type = "button" class="submitButton"><span class="submitText">PROCEED</span></button></a></div>
        </div>
    
        <div class="spaceContainerContact"></div>
        <div class="footerContainer">
        <div class="addressTextContainer">
            <div class="footerLogo">
                <img src="../Images/logoBaps.png" width="250px">
            </div>
            <div class="addressText">
            <div class="footerContacts"><img class="footerContactImage" src="../Images/gpswhite.png" alt=""></div>
            <div class="contactsText"><span class="">Address: </span>25 G.H. Del Pilar Street,<br> Kalayaan Village, CSFP 2000</div>
            <div class="footerContacts"><img class="footerContactImage" src="../Images/phonewhite.png" alt=""></div>
            <div class="contactsText"><span class="">Phone: </span>09395981709 (Smart)<br>09667359438 (Globe)</div>
            <div class="footerContacts"><img class="footerContactImage" src="../Images/emailwhite.png" alt=""></div>
            <div class="contactsText"><span class="">Email: </span>bapsfoodstation@gmail.com</div>
            </div>
        </div>

        <div class="dreamTeamContainer">
            <div class="poweredByText">
                POWERED BY:
            </div>
            <div class="dreamLogo">
                <img src="../Images/dreamLogo.png" width="250px">
            </div>
            <div class="teamNameText">&lt/dream team> Development Team</div>
        </div>

        <div class="contactsContainer">
            <div class="contactUsText">
                    CONNECT WITH US:
                </div>
                <div class="socialMediaContainer">
                    <div class="logoFacebook">
                        <a href="https://www.facebook.com/BapsFoodStation"><img src="../Images/facebookwhite.png" width="40px"></a>
                    </div>
        
                    <div class="logoMessenger">
                        <a href="https://m.me/BapsFoodStation"><img src="../Images/messengerwhite.png" width="40px"></a>
                    </div>
        
                    <div class="logoTelegram">
                        <a href="https://t.me/BapsFoodStation"><img src="../Images/telegramwhite.png" width="40px"></a>
                    </div>
                </div>

			<div class="questionContainer">HAVE A QUESTION?</div>
			<div>
				<a button href="../Features/ContactUsWebpage.php" class="questionButton"><span class="sendQuestion">Send a question</span></a>
			</div>
		</div>
	
		<div class="frequentLinksContainer">
			<div class="siteLinksText">SITE LINKS</div>
			<div class="linksList">
				<a href="../Features/MenuWebpage.php"><span class="linksText">Products</span></a> 
				<br><a href="../Features/About.php"><span class="linksText">About Us</span></a>
				<br><a href="../Features/deliveryAndPayment.php"><span class="linksText">Delivery and Payment</span></a> 
				<br><a href="../Features/ProfileWebpage.php"><span class="linksText">Profile</span></a>
			</div>
		</div>   
    </div>
</body>
</html>