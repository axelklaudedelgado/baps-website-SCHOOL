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
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
        <title>BAP's Delivery and Payment</title>
        <link rel="icon" href="../Images/logo.png" type="image/x-icon">
    </head>
    <header class="headerContainer">
        <div class="buttonContainer">
            <div><a href="../MainWebsite.php"><img src="../Images/logo.png" class="logoPic"></a></div>
            <div><a href="../MainWebsite.php" class="notHiglighted"><span class="homepageButton">HOME</span></a></div>
            <div><a href="../Features/MenuWebpage.php" class="notHiglighted"><span class="productsButton">PRODUCTS</span></a></div>
            <div><a href="../Features/About.php" class="notHiglighted"><span class="aboutButton">ABOUT</span></a></div>
            <div><a href="../Features/deliveryAndPayment.php" class="highlightedPage"><span class="deliveryButton">DELIVERY</span></a></div>
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
        <div class="wholeContainer">
            <div class="firstContainer"></div>
            <div class="deliveryAndPaymentMainContainer">
                <div class="deliveryAndPaymentTitleText">
                    Delivery and Payment Methods
                </div>
                <div class="deliveryAndPaymentContent">
                    <div class="deliveryChargeContainer">
                        <div class="titleDeliveryCharge">
                            <span class="headingDeliveryCharge">
                                Delivery Charge <br>
                            </span>
                        </div>
                        <div class="locationDeliveryCharge">
                            <div class="locationDelivery">
                                Fixed Delivery Rate
                            </div>
                            <div class="priceDelivery">
                                Php 70
                            </div>
                        </div>         
                    </div>
                    <div class="paymentMethodContainer">
                        <div class="titleDeliveryCharge">
                            <span class="headingDeliveryCharge">
                                Payment Methods <br>
                            </span>
                            <span class="subheadingDeliveryCharge">
                                pay your order in cash or digital
                            </span>  
                        </div>
                        <div class="paymentLogosContainer">
                            <div class="logosContainer">
                                <img src="../Images/cash-on-delivery.png" alt="" class="codBDO">
                            </div>
                            <div class="paymentText">Cash on Delivery</div>
                            <div class="logosContainer">
                                <img src="../Images/gcashpaymaya.png" alt="" class="gcashPaymaya">
                            </div>
                            <div class="paymentText">09667359438</div>
                            <div class="logosContainer">
                                <img src="../Images/BDO_Unibank_(logo).png" alt="" class="codBDO">
                            </div>
                            <div class="paymentText">002380291043</div>
                        </div>
                        
                    </div>
                    <div class="pickupContainer">
                        <div class="pickupText">
                            <span class="headingDeliveryCharge">
                                Pickup <br>
                            </span>
                            <span class="subheadingDeliveryCharge">
                                you can pick up your food at our physical store
                            </span> 
                        </div>
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                <iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=KALAYAAN%20VILLAGE,%20CITY%20OF%20SAN%20FERNANDO&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spaceContainerDelivery"></div>
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