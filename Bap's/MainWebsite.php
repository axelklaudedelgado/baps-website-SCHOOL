<?php
    require_once("../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/connectDatabase.php");
    session_start();
    if (!isset($_SESSION['userName'])) {
        $_SESSION['msg'] = "You have to log in first";
        header("location:../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/LogInPage.php");
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
    <link rel="icon" href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/logo.png" type="image/x-icon">
    <title>BAP'S Food Station</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<header class="headerContainer">
    <div class="buttonContainer">
        <div><a href="MainWebsite.php"><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/logo.png" class="logoPic"></a></div>
        <div><a href="MainWebsite.php" class="highlightedPage"><span class="homepageButton">HOME</span></a></div>
        <div><a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/MenuWebpage.php" class="notHiglighted"><span class="productsButton">PRODUCTS</span></a></div>
        <div><a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/About.php" class="notHiglighted"><span class="aboutButton">ABOUT</span></a></div>
        <div><a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/deliveryAndPayment.php" class="notHiglighted"><span class="deliveryButton">DELIVERY</span></a></div>
        <div><a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/ContactUsWebpage.php" class="notHiglighted"><span class="contactButton">CONTACT US</span></a></div>
    </div>
    <div class="iconContainer">
        <div class="iconText"><a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/ProfileWebpage.php"><?php try {
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
        <div><a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/ProfileWebpage.php"><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/userPlaceholder.png" class="userPlaceholder"></a></div>
    </div>
</header>
<body>
    <div class="wholeContainer">
        <div class="firstContainer">   
        </div>
        <div class="secondContainer">
            <div class="imageSlidesContainer">
                <div class="imageSlides">
                    <div>
                        <a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/OrderPage.php">
                            <button class="orderButton">ORDER NOW</button>
                        </a>
                    </div>
                    <!--radio buttons start-->
                    <input type="radio" name="radioButton" id="radio1">
                    <input type="radio" name="radioButton" id="radio2">
                    <input type="radio" name="radioButton" id="radio3">
                    <input type="radio" name="radioButton" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/Spicy Buffalo.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/Honey Butter.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/Soy Garlic.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/Garlic Parmesan.png" alt="">
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="autoSlide">
                        <div class="automaticButton1"></div>
                        <div class="automaticButton2"></div>
                        <div class="automaticButton3"></div>
                        <div class="automaticButton4"></div>
                    </div>
                  <!--automatic navigation end-->
                </div>
                <!--manual navigation start-->
                <div class="manualSlide">
                    <label for="radio1" class="manualButton"></label>
                    <label for="radio2" class="manualButton"></label>
                    <label for="radio3" class="manualButton"></label>
                    <label for="radio4" class="manualButton"></label>
                </div>
                <!--manual navigation end-->
                </div>
              <!--image imageSlidesContainer end-->
          
                <script type="text/javascript">
                var counter = 1;
                setInterval(function(){
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if(counter > 4){
                    counter = 1;
                    }
                }, 5000);
                </script>
        </div>
    </div>
    <div class="bestSellers">
        <div class="bestText">BEST SELLERS<hr></div>
        <div class="bestContainer">
            <div>
                <button class="buttonSellers">
                    <div class="insideButton">
                        <div><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/Buffalo Wings.png" class="buffaloPic"></div>
                        <div class="buffText">BUFFALO WINGS</div>
                        <div><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/ratingyellow.png" class="ratingYellow"></div>
                        <div class="classificationContainer"><div class="textWings">MIGHTY<br>WINGS</div></div>
                    </div>
                </button>
            </div>
            <div>
                <button class="buttonSellers">
                    <div class="insideButton">
                        <div><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/dynamiteBestSeller.png" class="buffaloPic"></div>
                        <div class="buffText">PORK & CHEESE DYNAMITE</div>
                        <div><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/ratingyellow.png" class="ratingYellow"></div>
                        <div class="classificationContainer"><div class="textWings">LUXURY<br>STREET FOODS</div></div>
                    </div>
                </button>
            </div>
            <div>
                <button class="buttonSellers">
                    <div class="insideButton">
                        <div><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/bapcorn.png" class="buffaloPic"></div>
                        <div class="buffText">BAPCORN</div>
                        <div><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/ratingyellow.png" class="ratingYellow"></div>
                        <div class="classificationContainer"><div class="textWings">OTHER FOOD<br>ITEMS</div></div>
                    </div>
                </button>
            </div>
        </div> 
    </div>
    <div class="reviewTitleText">REVIEWS<hr></div>
    <div class="mainPageReviewContainer">
        <div></div>
        <div></div>
        <div></div>
        
        <div class="reviewUserContainer"> 
            <div class="photoContainer">
                <img class="userReviewImage" src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/Melvin_TwoByTwo.JPG">
            </div>  
            <div class="reviewFiveStars">
                <img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/ratingRed.png" class="ratingRed">
            </div>
            <div class="reviewContent">
                Bap's really bussin. I like the streetfoods.
                <br> <br>
            
                Melvin Toledo
            </div>
        </div>

        <div class="reviewUserContainer">
            <div class="photoContainer">
                <img class="userReviewImage" src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/Shanler_TwoByTwo.jpg">
            </div>    
            <div class="reviewFiveStars">
                <img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/ratingRed.png" class="ratingRed">
            </div>
            <div class="reviewContent"> The chicken wings are the best in Pampanga.
                <br> <br>
            
                Shanler De Guzman</div>
        </div>

        <div class="reviewUserContainer"> 
            <div class="photoContainer">
                <img class="userReviewImage" src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/Lance_TwoByTwo.jpg" ></div>  
            <div class="reviewFiveStars">
                <img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/ratingRed.png" class="ratingRed">
                </div>
            <div class="reviewContent"> The food is so good in here. I recommend baps!
                <br> <br>

                Lance Tienzo</div>
        </div>
        <div></div>
        <div></div>
        <div id="container">

        </div>
    </div>
    
    <div class="footerContainer">
        <div class="addressTextContainer">
            <div class="footerLogo">
                <img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/logoBaps.png" width="250px">
            </div>
            <div class="addressText">
            <div class="footerContacts"><img class="footerContactImage" src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/gpswhite.png" alt=""></div>
            <div class="contactsText"><span class="">Address: </span>25 G.H. Del Pilar Street,<br> Kalayaan Village, CSFP 2000</div>
            <div class="footerContacts"><img class="footerContactImage" src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/phonewhite.png" alt=""></div>
            <div class="contactsText"><span class="">Phone: </span>09395981709 (Smart)<br>09667359438 (Globe)</div>
            <div class="footerContacts"><img class="footerContactImage" src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/emailwhite.png" alt=""></div>
            <div class="contactsText"><span class="">Email: </span>bapsfoodstation@gmail.com</div>
            </div>
        </div>

        <div class="dreamTeamContainer">
            <div class="poweredByText">
                POWERED BY:
            </div>
            <div class="dreamLogo">
                <img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/dreamLogo.png" width="250px">
            </div>
            <div class="teamNameText">&lt/dream team> Development Team</div>
        </div>

        <div class="contactsContainer">
	
			<div class="contactUsText">
				CONNECT WITH US:
			</div>
			<div class="socialMediaContainer">
				<div class="logoFacebook">
					<a href="https://www.facebook.com/BapsFoodStation"><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/facebookwhite.png" width="40px"></a>
				</div>
	
				<div class="logoMessenger">
                    <a href="https://m.me/BapsFoodStation"><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/messengerwhite.png" width="40px"></a>
				</div>
	
				<div class="logoTelegram">
					<a href="https://t.me/BapsFoodStation"><img src="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Images/telegramwhite.png" width="40px"></a>
				</div>
			</div>
	
			<div class="questionContainer">HAVE A QUESTION?</div>
			<div>
				<a button href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/ContactUsWebpage.php" class="questionButton"><span class="sendQuestion">Send a question</span></a>
			</div>
		</div>
	
		<div class="frequentLinksContainer">
			<div class="siteLinksText">SITE LINKS</div>
			<div class="linksList">
				<a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/MenuWebpage.php"><span class="linksText">Products</span></a> 
				<br><a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/About.php"><span class="linksText">About Us</span></a>
				<br><a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/deliveryAndPayment.php"><span class="linksText">Delivery and Payment</span></a> 
				<br><a href="../Banzil_Cudia_Crisostomo_DeGuzman_DelaCruz_Delgado_Macapagal_Manuel_Tienzo_Toledo-Final Requirement/Features/ProfileWebpage.php"><span class="linksText">Profile</span></a>
			</div>
		</div>   
    </div>
</body>
</html>