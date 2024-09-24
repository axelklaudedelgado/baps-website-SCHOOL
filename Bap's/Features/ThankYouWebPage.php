<?php
    require_once("../Features/connectDatabase.php");
    session_start();
    if (!isset($_SESSION['userName'])) {
        $_SESSION['msg'] = "You have to log in first";
        header("location:../Features/LogInPage.php");
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
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    <script src='main.js'></script>
    <link rel="icon" href="../Images/logo.png" type="image/x-icon">
    <title>BAP's Thank You</title>
</head>
<header class="headerContainer">
    <div class="buttonContainer">
        <div><a href="../MainWebsite.php"><img src="../Images/logo.png" class="logoPic"></a></div>
        <div><a href="../MainWebsite.php" class="notHiglighted"><span class="homepageButton">HOME</span></a></div>
        <div><a href="../Features/MenuWebpage.php" class="highlightedPage"><span class="productsButton">PRODUCTS</span></a></div>
        <div><a href="../Features/About.php" class="notHiglighted"><span class="aboutButton">ABOUT</span></a></div>
        <div><a href="../Features/deliveryAndPayment.php" class="notHiglighted"><span class="deliveryButton">DELIVERY</span></a></div>
        <div><a href="../Features/ContactUsWebpage.php" class="notHiglighted"><span class="contactButton">CONTACT US</span></a></div>
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
	<div class="wholeContainerConfirmation">
    <div class="firstContainer"></div>
	<div class="thanksContainer">
		<div class="satisfyContainer">KANYAMANAN KA SANA BAP</div>
		<div class="satisfyTranslation">(WE HOPE IT SATISFIES YOUR CRAVINGS)</div>
		<div class="patronageContainer">
			SALAMAT KING PAMAGTANGKILIK
			<br>
			KENG TUTUKING PASIBAYU
		</div>
		<div class="patronageTranslation">
			(THANKS FOR YOUR PATRONAGE)
			<br>
			(TILL OUR NEXT TRANSACTION)
		</div>
		<div class="reviewContainer">
			<a href="../Features/submitReview.php">
				<button class="reviewButton"><span class="reviewText">LEAVE A REVIEW</span></button>
			</a>
		</div>
	</div>
    <div class="spaceContainerThankYou"></div>
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
    </div>
</body>
</html>