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
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>BAP's About Us</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    <link rel="icon" href="../Images/logo.png" type="image/x-icon">
    <script src='main.js'></script>
</head>
<header class="headerContainer">
    <div class="buttonContainer">
        <div><a href="../MainWebsite.php"><img src="../Images/logo.png" class="logoPic"></a></div>
        <div><a href="../MainWebsite.php" class="notHiglighted"><span class="homepageButton">HOME</span></a></div>
        <div><a href="../Features/MenuWebpage.php" class="notHiglighted"><span class="productsButton">PRODUCTS</span></a></div>
        <div><a href="../Features/About.php" class="highlightedPage"><span class="aboutButton">ABOUT</span></a></div>
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
    <div class="menuContainer">
        <div class="firstContainer"></div>
        <div class="aboutMainContainer">
            <div class="aboutUsContainer">
                <div></div>
                <div class="aboutUsText">BAP'S</div>
            </div>
            <div class="informationContainer">
                <div class="whatbapsFlex">
                    <div class="whoWeText">What is BAP's</div>
                    <div class="infoWhatBaps">
                        In the Kapampangan language, the word "bap" is a shortened version of "Bapa," 
                        which means "uncle" in English. In Pampanga, it is common among Kapampangans 
                        to address an older man they do not know personally, calling him "Bapa" as a sign of respect.
                        <br><br>
                        Although "Bapa" means uncle in the English language, currently, when an elderly man 
                        is called " Bapa" or "bap," it doesn't necessarily mean or follow that they are relatives. 
                        It simply means respect to someone older, to someone in authority, or someone "in the know."
                        <br><br>
                        Bap's Food Station is a collaboration of three (3) brothers, Bom, Dut, and Sey, 
                        whose ages range from 20 to 25, and their nephew Basti, who is also in his early 20s. 
                        The three brothers and Basti call and treat each other equally as their "Bap." During 
                        the hard times of the pandemic, the four decided it was time to reach other people with this love and respect. 
                        They realized that what better way to spread this passion than food.
                        <br><br>
                        Basti is so enamored with food that his enthusiasm for culinary arts extends beyond his 
                        goal to please the palate and stomach. He wanted to show that food is not only satisfying 
                        but is far more pleasurable. Basti believes that we should eat not merely to fill our stomachs 
                        but also because we enjoy eating good food.
                        <br><br>
                        Bom, Dut, and Sey believe Basti can offer pleasurable eating experiences, and they have 
                        backed him up in every way they can.
                        <br><br>
                        Since our launch in November 2020, we have provided pleasurable foods for 200+ households. 
                        To our future customers, we hope you can join us to give Basti a chance to serve us and satisfy our cravings.
                        <br><br>
                        Bapang Basti's passion for cooking may still not be on par with a "Michelin Star" rating. 
                        Nevertheless, he will be humble enough as he receives positive & even constructive comments to gain your 
                        seal of approval that Bap's food is - Certified Cravings Satisfied!
                    </div>
                </div>
                <div><img src="../Images/bapspeople.jpg" class="bapsPicture"></div>
            </div>
            <div class="bapsAbout">
                <div class="bapsaboutUsContainer">
                    <div class="bapsAboutUsText"><section>About Us</section></div>
                    <div></div>
                </div>
                <div class="bapsInfoContainer">
                    <div><img src="../Images/dreamTeam.png" class="dreamPicture"></div>
                    <div class="">
                        <div class="textWhoFlex">
                        <div class="whoWeText">Who we are</div>
                            <div class="infoWhoDream">
                                A website starts with a dream, a vision. But most importantly, the bond and collaboration of the whole team 
                                will power them through to create and finish every one of their works. 
                                <br><br>
                                MEET THE TEAM 
                                <br><br>
                                The team consists of students from Don Honorio Ventura State University's Bachelor of Science in Computer Engineering program. They came from different experiences and backgrounds, but their shared ambitions moved them toward a singular goal. The team believed that everyone deserves to solidify their dreams and aspirations. We are &lt/dream> team, making dreams concrete. 
                            </div>
                        </div> 
                    </div>
                    
                    
                </div>
            </div>

        </div>
    </div>
    <div class="spaceContainerAboutUs"></div>
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