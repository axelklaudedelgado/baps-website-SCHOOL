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
    <link rel="icon" href="../Images/logo.png" type="image/x-icon">
    <title>BAP's Order</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    <script src='main.js'></script>
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
    <form action='orderConfirmation.php' method='post'>
        <div class="menuContainer">
            <div class="firstContainer"></div>
            <div class="mightyWingsOrderContainer">
                <div class="titleTextOrderPage">
                    <img src="../Images/staryellow.png" class="starYellowLeft">MIGHTY WINGS
                    <img src="../Images/staryellow.png" class="starYellowRight">
                </div>
                <div class="threeGridOrderPage">
                    <div>
                        <label class="toggleChoice">
                            <input class="choiceInput" name="garlicParmesan" type="checkbox" value = "Garlic Parmesan Wings">
                            <input type="hidden" name="garlicParmesan" value="Garlic Parmesan Wings"/>
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/GARLIC PARMESAN.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        GARLIC PARMESAN
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name="gpcFour"> 
                                    <label class="piecesChoiceLabel"> 4 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name="gpcSix">
                                    <label class="piecesChoiceLabel"> 6 PCS&nbsp;<span class="pesosPerPiece">(&#8369;130)</span></label> <br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name="gpcEight">
                                    <label class="piecesChoiceLabel"> 8 PCS&nbsp;<span class="pesosPerPiece">(&#8369;160)</span></label>
                                </div>
                            </div>
                        </label>
  
                    </div>

                    <div>
                        <label class="toggleChoice">
                            <input class="choiceInput" name="honeyButter" value="Honey Butter Garlic Wings" type="checkbox">
                            <input type="hidden" name="honeyButter" value="Honey Butter Garlic Wings" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/BUTTERED HONEY GARLIC.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        HONEY BUTTER <br>GARLIC
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name="hbgFour"> 
                                    <label class="piecesChoiceLabel"> 4 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name="hbgSix">
                                    <label class="piecesChoiceLabel"> 6 PCS&nbsp;<span class="pesosPerPiece">(&#8369;130)</span></label> <br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name="hbgEight">
                                    <label class="piecesChoiceLabel"> 8 PCS&nbsp;<span class="pesosPerPiece">(&#8369;160)</span></label>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">
                            <input class="choiceInput" name="soyGarlic" value="Soy Garlic Wings" type="checkbox">
                            <input type="hidden" name="soyGarlic" value="Soy Garlic Wings" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/SOY GARLIC.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        SOY <br>GARLIC
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sgFour"> 
                                    <label class="piecesChoiceLabel"> 4 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sgSix">
                                    <label class="piecesChoiceLabel"> 6 PCS&nbsp;<span class="pesosPerPiece">(&#8369;130)</span></label> <br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sgEight">
                                    <label class="piecesChoiceLabel"> 8 PCS&nbsp;<span class="pesosPerPiece">(&#8369;160)</span></label>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">
                            <input class="choiceInput" name="spicyMild" value="Spicy Buffalo (Mild) Wings" type="checkbox">
                            <input type="hidden" name="spicyMild" value="Spicy Buffalo (Mild) Wings" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/SPICY BUFFALO.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        SPICY <br>BUFALLO (MILD)
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbmFour"> 
                                    <label class="piecesChoiceLabel"> 4 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbmSix">
                                    <label class="piecesChoiceLabel"> 6 PCS&nbsp;<span class="pesosPerPiece">(&#8369;130)</span></label> <br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbmEight">
                                    <label class="piecesChoiceLabel"> 8 PCS&nbsp;<span class="pesosPerPiece">(&#8369;160)</span></label>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">
                            <input class="choiceInput" name="spicyMedium" value="Spicy Buffalo (Medium) Wings" type="checkbox">
                            <input type="hidden" name="spicyMedium" value="Spicy Buffalo (Medium) Wings" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/Spicy Buffalo.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        SPICY <br>BUFALLO (MEDIUM)
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbmedFour"> 
                                    <label class="piecesChoiceLabel"> 4 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbmedSix">
                                    <label class="piecesChoiceLabel"> 6 PCS&nbsp;<span class="pesosPerPiece">(&#8369;130)</span></label> <br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbmedEight">
                                    <label class="piecesChoiceLabel"> 8 PCS&nbsp;<span class="pesosPerPiece">(&#8369;160)</span></label>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">
                            <input class="choiceInput" name="spicyHot" value="Spicy Buffalo (Hot) Wings" type="checkbox">
                            <input type="hidden" name="spicyHot" value="Spicy Buffalo (HOT) Wings" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/SPICY BUFFALO.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        SPICY <br>BUFALLO <br>(HOT)
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbhFour"> 
                                    <label class="piecesChoiceLabel"> 4 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbhSix">
                                    <label class="piecesChoiceLabel"> 6 PCS&nbsp;<span class="pesosPerPiece">(&#8369;130)</span></label> <br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbhEight">
                                    <label class="piecesChoiceLabel"> 8 PCS&nbsp;<span class="pesosPerPiece">(&#8369;160)</span></label>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>


            
            <!--            LUXURY CONTAINER                -->
            <!--            LUXURY CONTAINER                -->
            <!--            LUXURY CONTAINER                -->
            <!--            LUXURY CONTAINER                -->
            <div class="luxuryOrderPageContainer">
                <div class="mightyWingsOrderContainer">
                    <div class="titleTextOrderPage">
                        <img src="../Images/staryellow.png" class="starYellowLeft">LUXURY STREET FOODS
                        <img src="../Images/staryellow.png" class="starYellowRight">
                    </div>
                    <div class="threeGridOrderPageluxury">
                        <div>
                            <label class="toggleChoice">
                                <input class="choiceInput" name="chickenCheese" value="Chicken & Cheese" type="checkbox">
                                <input type="hidden" name="chickenCheese" value="Chicken & Cheese" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/CHICKEN  AND CHEESE.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            CHICKEN <br> & CHEESE
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "ccSix"> 
                                        <label class="piecesChoiceLabel"> 6 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="toggleChoice">
                                <input class="choiceInput" name="hamCheese" value="Ham & Cheese" type="checkbox">
                                <input type="hidden" name="hamCheese" value="Ham & Cheese" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/HAM AND CHEESE.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            HAM <br>& CHEESE
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "hcSix"> 
                                        <label class="piecesChoiceLabel"> 6 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="toggleChoice">
                                <input class="choiceInput" name="porkCheese" value="Pork & Cheese" type="checkbox">
                                <input type="hidden" name="porkCheese" value="Pork & Cheese" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/PORK AND CHEESE.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            PORK & CHEESE
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "pcSix"> 
                                        <label class="piecesChoiceLabel"> 6 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="toggleChoice">
                            <input class="choiceInput" name="fishBall" value="Fishball" type="checkbox">
                            <input type="hidden" name="fishBall" value="Fishball" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/FISHBALL.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            FISHBALL
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "fbTwenty"> 
                                        <label class="piecesChoiceLabel"> 20 PCS&nbsp;<span class="pesosPerPiece">(&#8369;20)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="toggleChoice">
                            <input class="choiceInput" name="chickenBall" value="Chicken Ball" type="checkbox">
                            <input type="hidden" name="chickenBall" value="Chicken Ball" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/CHICKENBALLS.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            CHICKEN<br>BALL
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "cbEight"> 
                                        <label class="piecesChoiceLabel"> 8 PCS&nbsp;<span class="pesosPerPiece">(&#8369;30)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="toggleChoice">
                            <input class="choiceInput" name="kikiam" value="Kikiam" type="checkbox">
                            <input type="hidden" name="kikiam" value="Kikiam" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/KIKIAM.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            KIKIAM
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "kEight"> 
                                        <label class="piecesChoiceLabel"> 8 PCS&nbsp;<span class="pesosPerPiece">(&#8369;20)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="toggleChoice">
                            <input class="choiceInput" name="friedSiomai" value="Siomai" type="checkbox">
                            <input type="hidden" name="friedSiomai" value="Siomai" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/FRIED SIOMAI.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            SIOMAI
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "fsFive"> 
                                        <label class="piecesChoiceLabel"> 5 PCS&nbsp;<span class="pesosPerPiece">(&#8369;30)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="toggleChoice">
                            <input class="choiceInput" name="oneDayOld" value="One Day Old" type="checkbox">
                            <input type="hidden" name="oneDayOld" value="One Day Old" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/ONE DAY OLD.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            ONE DAY <br>OLD
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "odoThree"> 
                                        <label class="piecesChoiceLabel"> 3 PCS&nbsp;<span class="pesosPerPiece">(&#8369;35)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="toggleChoice">
                            <input class="choiceInput" name="kwekKwek" value="Kwek-Kwek" type="checkbox">
                            <input type="hidden" name="kwekKwek" value="Kwek-Kwek" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/KWEK-KWEK.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            KWEK-<br>KWEK
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "kkFive"> 
                                        <label class="piecesChoiceLabel"> 5 PCS&nbsp;<span class="pesosPerPiece">(&#8369;30)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="twoOrderOnlyContainer">
                            <label class="toggleChoice">
                            <input class="choiceInput" name="tokwa" value="Tokwa" type="checkbox">
                            <input type="hidden" name="tokwa" value="Tokwa" />
                                <div class="orderItem">
                                    <div class="imageOrderItem">
                                        <img class="imageOrderCustom" src="../Images/orderPage/TOKWA.png">
                                    </div>
                                    <div class="contentOrderItemContainer">
                                        <span class="contentOrderName">
                                            TOKWA
                                        </span>
                                    </div>
                                    <div class="piecesChoiceContainer">
                                        <span class="orderQuantity">QTY:</span><br>
                                        <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "tFive"> 
                                        <label class="piecesChoiceLabel"> 5 PCS&nbsp;<span class="pesosPerPiece">(&#8369;20)</span> </label> <br>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <div class="twoOrderOnlyContainer">
                                <label class="toggleChoice">
                                    <input class="choiceInput" name="hotdog" value="Hotdog" type="checkbox">
                                    <input type="hidden" name="hotdog" value="Hotdog" />
                                    <div class="orderItem">
                                        <div class="imageOrderItem">
                                            <img class="imageOrderCustom" src="../Images/orderPage/HOTDOG.png">
                                        </div>
                                        <div class="contentOrderItemContainer">
                                            <span class="contentOrderName">
                                                HOTDOG
                                            </span>
                                        </div>
                                        <div class="piecesChoiceContainer">
                                            <span class="orderQuantity">QTY:</span><br>
                                            <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "hTwelve"> 
                                            <label class="piecesChoiceLabel"> 12 PCS&nbsp;<span class="pesosPerPiece">(&#8369;30)</span> </label> <br>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>       
            </div>
    
                    <!--        OTHER FOOD ITEMS            -->
                    <!--        OTHER FOOD ITEMS            -->
                    <!--        OTHER FOOD ITEMS            -->
                    <!--        OTHER FOOD ITEMS            -->
                    <!--        OTHER FOOD ITEMS            -->
                    <!--        OTHER FOOD ITEMS            -->
    
            <div class="otherFoodItemsOrderContainer">
                <div class="titleTextOrderPage">
                    <img src="../Images/staryellow.png" class="starYellowLeft">OTHER FOOD ITEMS
                    <img src="../Images/staryellow.png" class="starYellowRight">
                </div>
                <div class="threeGridOrderPageluxury">
                    <div>
                        <label class="toggleChoice">
                        <input class="choiceInput" name="gulaman" value="Gulaman" type="checkbox">
                        <input type="hidden" name="gulaman" value="Gulaman" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/Gulaman.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        GULAMAN
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "gSixTeen"> 
                                    <label class="piecesChoiceLabel"> 16 OZ&nbsp;<span class="pesosPerPiece">(&#8369;20)</span> </label> <br>
                                        
                    
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">
                        <input class="choiceInput" name="mojos" value="Mojos" type="checkbox">
                        <input type="hidden" name="mojos" value="Mojos" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/mojos.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        MOJOS
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "mFifTeen"> 
                                    <label class="piecesChoiceLabel">15 PCS &nbsp;<span class="pesosPerPiece">(&#8369;60)</span> </label> <br>
                                        
                            
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">
                        <input class="choiceInput" name="oysterrificTofu" value="Oysterrific Tofu W/ Mushroom" type="checkbox">
                        <input type="hidden" name="oysterrificTofu" value="Oysterrific Tofu W/ Mushroom" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/TOFU.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        OYSTERRIFIC <br> TOFU <br> W/ MUSHROOM
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0"  name = "otwmOneOrder"> 
                                    <label class="piecesChoiceLabel"> 1 ORDER&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                        
                                    
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">
                        <input class="choiceInput" name="sizzlingBalut" value="Sizzling Balut" type="checkbox">
                        <input type="hidden" name="sizzlingBalut" value="Sizzling Balut" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/balut.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        SIZZLING BALUT
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbThree"> 
                                    <label class="piecesChoiceLabel"> 3 PCS&nbsp;<span class="pesosPerPiece">(&#8369;80)</span> </label> <br>
                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "sbFive">
                                    <label class="piecesChoiceLabel"> 5 PCS&nbsp;<span class="pesosPerPiece">(&#8369;130)</span></label> <br>
                                
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">
                        <input class="choiceInput" name="hamCheeseLumpia" value="Ham & Cheese Lumpia" type="checkbox">
                        <input type="hidden" name="hamCheeseLumpia" value="Ham & Cheese Lumpia" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/cheesesticks.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        HAM <br>& CHEESE LUMPIA
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "hclTwelve"> 
                                    <label class="piecesChoiceLabel"> 12 PCS&nbsp;<span class="pesosPerPiece">(&#8369;60)</span> </label> <br>
                                        
        
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">    
                            <input class="choiceInput" name="flavoredRice" value="Flavored Rice" type="checkbox">
                            <input type="hidden" name="flavoredRice" value="Flavored Rice" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/flavoredRice.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                        FLAVORED RICE
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "frSteamed"> 
                                    <label class="piecesChoiceLabel"> STEAMED&nbsp;<span class="pesosPerPiece">(&#8369;10)</span> </label> <br>
                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "frSoy">
                                    <label class="piecesChoiceLabel"> SOY&nbsp;<span class="pesosPerPiece">(&#8369;15)</span></label> <br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "frGarlic">
                                    <label class="piecesChoiceLabel"> GARLIC&nbsp;<span class="pesosPerPiece">(&#8369;15)</span></label>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "frJava">
                                    <label class="piecesChoiceLabel"> JAVA&nbsp;<span class="pesosPerPiece">(&#8369;15)</span></label>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div></div>
                    <div>
                        <label class="toggleChoice">
                            <input class="choiceInput" name="bapCorn" value="Bap Corn" type="checkbox">
                            <input type="hidden" name="bapCorn" value="Bap Corn" />
                            <div class="orderItem">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom" src="../Images/orderPage/bapcorn.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName">
                                       BAPCORN
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "cornFourteen"> 
                                    <label class="piecesChoiceLabel"> 14 PCS&nbsp;<span class="pesosPerPiece">(&#8369;100)</span> </label> <br>
                                        
        
                                </div>
                            </div>
                        </label>
                    </div>

                    <div></div>

                    
                </div>
            </div>
    
                    <!--        PLATTERS            -->
                    <!--        PLATTERS            -->
                    <!--        PLATTERS            -->
                    <!--        PLATTERS            -->
                    <!--        PLATTERS            -->
            <div class="platterOrderContainer">
                <div class="titleTextOrderPage">
                    <img src="../Images/staryellow.png" class="starYellowLeft">PLATTERS
                    <img src="../Images/staryellow.png" class="starYellowRight">
                </div>
                <div class="twoGridOrderPage">
                    <div>
                        <label class="toggleChoice">
                            <input class="choiceInput" name="luxuryStreetFood" value="Luxry Street Food" type="checkbox">
                            <input type="hidden" name="luxuryStreetFood" value="Luxry Street Food" />
                            <div class="orderItemTwo">
                                <div class="imageOrderItemTwo">
                                    <img class="imageOrderCustom2" src="../Images/streetplatter.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName2">
                                        LUXURY <br>STREET <br>FOODS
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer2">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "lsfSmall"> 
                                    <label class="piecesChoiceLabel"> SMALL&nbsp;<span class="pesosPerPiece">(&#8369; 100)</span> </label> <br>
                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "lsfMedium">
                                    <label class="piecesChoiceLabel"> MEDIUM&nbsp;<span class="pesosPerPiece">(&#8369; 150)</span></label> <br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "lsfLarge">
                                    <label class="piecesChoiceLabel"> LARGE&nbsp;<span class="pesosPerPiece">(&#8369; 200)</span></label>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label class="toggleChoice">
                            <input class="choiceInput" name="mightyWings" value="Mighty Wings" type="checkbox">
                            <input type="hidden" name="mightyWings" value="Mighty Wings" />
                            <div class="orderItemTwo">
                                <div class="imageOrderItem">
                                    <img class="imageOrderCustom2" src="../Images/chickenplatter.png">
                                </div>
                                <div class="contentOrderItemContainer">
                                    <span class="contentOrderName2">
                                        MIGHTY <br>WINGS
                                    </span>
                                </div>
                                <div class="piecesChoiceContainer2">
                                    <span class="orderQuantity">QTY:</span><br>
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "mwDars"> 
                                    <label class="piecesChoiceLabel"> DARS&nbsp;<span class="pesosPerPiece">(&#8369; 400)</span></label> <br>
                                        
                                    <input class="piecesChoiceNumber" type="number" min ="0" max ="20" placeholder="0" name = "mwBaps">
                                    <label class="piecesChoiceLabel"> BAPS&nbsp;<span class="pesosPerPiece">(&#8369; 800)</span> </label> <br>
                                    
                                </div>
                            </div>
                        </label>
                    </div>
            </div>

        </div>

        <div class="logisticsContainer">
            <div class="recipientNameContainer">
                <span class="storeLocationText"> TO BE DELIVERED TO:</span>
                <span><input class="orderLocationChoice" type="radio" name = "userName" value = "defaultName" checked = "checked"> Default Recipient Name </span>
                <span>
                    <input class="orderLocationChoice" type="radio" name = "userName" value = "customName"> Custom Recipient Name
                </span> 
                <input class="recipientNameInput" type="text" placeholder="Given Name, Middle Name, Last Name">
                
            </div>
            <div class="contactNumberDeliveryContainer">
                <span class="storeLocationText"> CONTACT NUMBER</span>
                <span><input class="orderLocationChoice" type="radio" name = "contactNumber" value = "defaultContact" checked = "checked"> Default Contact Number </span>
                <span>
                    <input class="orderLocationChoice" type="radio" name = "contactNumber" value = "customContact"> Custom Contact Number
                </span> 
                <input class="contactNumberDeliveryInput" type="text" placeholder="Enter 11 digit number. Ex. 09XX-XXX-XXXX">

            </div>
            <div class="pickupReceiveContainer">
                <span class="storeLocationText"> <input type="checkbox">PICK UP LOCATION</span>
                <span class="mapouterTwo">
                    <div class="gmap_canvasTwo">
                    <iframe  id="gmap_canvasTwo" src="https://maps.google.com/maps?q=15.0574625,%20120.6612344&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </span>
                <span class="piecesChoiceLabel"> 25, Kalayaan Village, City of San Fernando, Pampanga 2000</span>
            </div>
            <div class="deliverReceiveContainer">
                <span class="storeLocationText"> <input type="checkbox">DELIVERY ADDRESS</span>
                <span><input class="orderLocationChoice" type="radio" name = "addressName" value = "defaultAddress" checked = "checked"> Default Address </span>
                <span>
                    <input class="orderLocationChoice" type="radio" name = "addressName" value = "customAddress"> Custom Location
                </span> 
                <input class="orderDeliveryLocationInput" type="text" placeholder="House No., Street, Barangay, City, Province">

            </div>
            <div class="submitOrderButtonContainer">
                <button type="submit" class="orderingSubmitButton" name="order">Place Order</button>
            </div>
            
        </div>        
    </form>

            </div>  
            <div class="spaceContainerOrder"></div>
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
                        <a button href="ContactUsWebpage.php" class="questionButton"><span class="sendQuestion">Send a question</span></a>
                    </div>
                </div>
            
                <div class="frequentLinksContainer">
                    <div class="siteLinksText">SITE LINKS</div>
                    <div class="linksList">
                        <a href="MenuWebpage.php"><span class="linksText">Products</span></a> 
                        <br><a href="About.php"><span class="linksText">About Us</span></a>
                        <br><a href="deliveryAndPayment.php"><span class="linksText">Delivery and Payment</span></a> 
                        <br><a href="ProfileWebpage.php"><span class="linksText">Profile</span></a>
                    </div>
                </div>   
            </div>
        </body>
    </html>