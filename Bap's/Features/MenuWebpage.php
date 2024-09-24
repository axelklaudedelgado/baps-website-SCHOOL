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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    <script src='main.js'></script>
    <link rel="icon" href="../Images/logo.png" type="image/x-icon">
    <title>BAP's Menu</title>
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

<!--                MANAGER CONTAINER                -->
<!--                MANAGER CONTAINER                -->
<!--                MANAGER CONTAINER                -->
<!--                MANAGER CONTAINER                -->

  <div class="menuContainer">
    <div class="firstContainer"></div>
    <div class="managersChoice"><hr>OUR PRODUCTS<hr></div>
  </div>
  <div class="trialContainer">
    <div class="wrapper"> 
      <section> <!-- SECTION 1 MANAGER -->
        <a href="#manager3Right" class="arrow__btn" id = "section1Less">‹</a>
        <div class="managerImaginaryLeft" id="manager1Imaginary"></div>
        <div class="item">
          <button class="buttonSellers1">
            <div class="insideButton">
              <div>
                <img src="../Images/balut.png" class="buffaloPicture">
              </div>
              <div class="buffalotext">Sizzling Balut</div>
              <div class="priceContainer">
                <div>
                  <table class="tablePrice">
                    <tr>
                      <td class="parmesanPrice">PHP 80</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;4&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 130</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="#manager2Right" class="arrow__btn">›</a>
      </section>
      <section> <!-- SECTION 2 MANAGER -->
        <a href="#manager1Imaginary" class="arrow__btn">‹</a>
        <div class="managerImaginaryLeft" id="manager2Left"></div>
        <div class="managerImaginaryRight" id="manager2Right"></div>
        <div class="item">
          <button class="buttonSellers1">
            <div class="insideButton">
              <div>
                <img src="../Images/cheesesticks2.png" class="buffaloPicture">
              </div>
              <div class="buffalotext">Ham & Cheese Lumpia</div>
              <div class="priceContainer">
                <div>
                  <table class="oneTablePrice">
                    <tr>
                      <td class="parmesanPrice"></td>
                      <td class="onePieceDisplay">&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="onePriceDisplay">PHP 60</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>  
        <a href="#manager3Right" class="arrow__btn" id="section2Greater">›</a>
      </section>
      <section> <!-- SECTION 3 MANAGER -->
        <a href="#manager2Left" class="arrow__btn">‹</a>
        <div class="managerImaginaryLeft" id="manager3Left"></div>
        <div class="managerImaginaryRight" id="manager3Right"></div>
        <div class="item">
          <button class="buttonSellers1">
            <div class="insideButton">
              <div>
                <img src="../Images/bapcorn.png" class="buffaloPicture">
              </div>
              <div class="dynamiteText">Bapcorn</div>
              <div class="priceContainer">
                <div>
                  <table class="dynamiteTableManager">
                    <tr>
                      <td class="parmesanPrice">PHP 100</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;14&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="#manager1Imaginary" class="arrow__btn" id="section3Greater">›</a>
      </section>
    </div>
    <div class="trialManager">
    <div>
      <span class="managerchoiceText">MANAGER'S</span><br>
      <span class="choiceTextMan">CHOICE</span>
    </div>
    </div>
  </div>


<!--                MIGHTY WINGS CONTAINER                -->
<!--                MIGHTY WINGS CONTAINER                -->
<!--                MIGHTY WINGS CONTAINER                -->
<!--                MIGHTY WINGS CONTAINER                -->

  <div class="menuContainer">
    <div class="firstContainer"></div>
    <div class="mightyWings">
      <img src="../Images/staryellow.png" class="starYellowLeft">MIGHTY WINGS
      <img src="../Images/staryellow.png" class="starYellowRight">
    </div>
  </div>
  <div class="mightyWingsContainer">
    <div class="wrapperMighty">
      <section> <!-- SECTION 1 MIGHTY -->
        <a href="#imaginary2Right" class="arrowMighty">‹</a>
        <div class="sectionLeftImaginary" id="imaginary1Mighty"></div>
        <div class="item">
          <button class="buttonMightyOne">
            <div class="mightyInside">
              <div>
                <img src="../Images/Garlic ParmesanC.png" class="mightyPicture">
              </div>
              <div class="garlicParmesanText">Garlic Parmesan</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 80</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;4&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 130</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 160</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;8&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyTwo">
            <div class="mightyInside">
              <div>
                <img src="../Images/Honey ButterG.png" class="mightyPicture">
              </div>
              <div class="butteredHoneyText">Honey ButterGarlic</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 80</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;4&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 130</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 160</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;8&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyThree">
            <div class="mightyInside">
              <div>
                <img src="../Images/Soy GarlicC.png" class="mightyPicture">
              </div>
              <div class="garlicParmesanText">Soy Garlic</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 80</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;4&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 130</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 160</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;8&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="#imaginary2Right" class="arrowMighty">›</a>
      </section>
      <section> <!-- SECTION 2 MIGHTY -->
        <a href="#imaginary1Mighty" class="arrowMighty">‹</a>
        <div class="sectionLeftImaginary" id="imaginary2Mighty"></div>
        <div class="sectionRightImaginary" id="imaginary2Right"></div>
        <div class="item">
          <button class="buttonMightyOne">
            <div class="mightyInside">
              <div><img src="../Images/Buffalo Wings.png" class="mightyPicture"></div>
              <div class="spicyBuffaloText">Spicy Buffalo<span class="spicyLevel">(MILD)</span></div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 80</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;4&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 130</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 160</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;8&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyTwo">
            <div class="mightyInside">
              <div><img src="../Images/Buffalo Wings.png" class="mightyPicture"></div>
              <div class="spicyBuffaloText">Spicy Buffalo<span class="spicyLevel">(MEDIUM)</span></div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 80</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;4&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 130</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 160</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;8&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyThree">
            <div class="mightyInside">
              <div><img src="../Images/Buffalo Wings.png" class="mightyPicture"></div>
              <div class="spicyBuffaloText">Spicy Buffalo<span class="spicyLevel">(HOT)</span></div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 80</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;4&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 130</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 160</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;8&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="#imaginary1Mighty" class="arrowMighty">›</a>
      </section>
      <section> <!-- SECTION 3 MIGHTY -->
        <a href="#imaginary2Mighty" class="arrowMighty">‹</a>
        <div class="sectionLeftImaginary" id="imaginary3Mighty"></div>
        <div class="sectionRightImaginary" id="imaginary3Right"></div>
        <div class="item">
          <button class="buttonMightyOne">
            <div class="mightyInside">
              <div><img src="../Images/Baps Platter.png" class="mightyPicture"></div>
              <div class="mightyInsideText">BAPS PLATTER</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="mightTable">
                    <tr>
                      <td class="mightyPrice">PHP 800</td>
                      <td class="mightyPiece">&nbsp;&nbsp;FOR 40 PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyTwo">
            <div class="mightyInside">
              <div><img src="../Images/Dars Platter.png" class="mightyPicture"></div>
              <div class="mightyInsideText">DARS PLATTER</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="mightTable">
                    <tr>
                      <td class="mightyPrice">PHP 400</td>
                      <td class="mightyPiece">&nbsp;&nbsp;FOR 20 PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyThree">
            <div class="mightyInside">
              <div><img src="../Images/Bapcorn.png" class="mightyPicture"></div>
              <div class="mightyInsideText">BAPCORN</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="mightTable">
                    <tr>
                      <td class="mightyPrice">PHP 100</td>
                      <td class="mightyPiece">FOR 4 PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="#imaginary1Mighty" class="arrowMighty">›</a>
      </section>
  </div>
  </div>


  <!--            LUXURY STREET FOODS          -->
  <!--            LUXURY STREET FOODS          -->
  <!--            LUXURY STREET FOODS          -->
  <!--            LUXURY STREET FOODS          -->

  <div class="menuContainer">
    <div class="firstContainer"></div>
    <div class="mightyWings">
      <img src="../Images/staryellow.png" class="starYellowLeft">LUXURY STREET FOODS
      <img src="../Images/staryellow.png" class="starYellowRight">
    </div>
  </div>
  <div class="mightyWingsContainer">
    <div class="wrapperLuxury">
      <section> <!-- SECTION 1 LUXURY -->
      <a href="#luxury4Right" class="arrowLuxury">‹</a>
      <div class="sectionLeftImaginary" id="luxury1Left"></div>
      <div class="item">
        <button class="buttonStreetOne">
          <div class="mightyInside">
            <div>
              <img src="../Images/chickencheese.png" class="dynamitePicture">
            </div>
            <div class="dynamiteTitle">Chicken &<br>Cheese</div>
            <div class="mightyPriceContainer">
              <div>
                <table class="dynamiteTable">
                  <tr>
                    <td class="dynamitePrice">PHP 80</td>
                    <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </button>
      </div>
      <div class="item">
        <button class="buttonStreetTwo">
          <div class="mightyInside">
            <div>
              <img src="../Images/hamcheese.png" class="dynamitePicture1">
            </div>
            <div class="dynamiteTitle">Ham &<br>Cheese</div>
            <div class="mightyPriceContainer">
              <div>
                <table class="dynamiteTable">
                  <tr>
                    <td class="dynamitePrice">PHP 80</td>
                    <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </button>
      </div>
      <div class="item">
        <button class="buttonStreetThree">
          <div class="mightyInside">
            <div>
              <img src="../Images/porkcheese.png" class="dynamitePicture1">
            </div>
            <div class="dynamiteTitle">Pork &<br>Cheese</div>
            <div class="mightyPriceContainer">
              <div>
                <table class="dynamiteTable">
                  <tr>
                    <td class="dynamitePrice">PHP 80</td>
                    <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;6&nbsp;</span>PCS</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </button>
      </div>
      <a href="#luxury2Right" class="arrowLuxury">›</a>
      </section>
      <section> <!-- SECTION 2 LUXURY -->
      <a href="#luxury1Left" class="arrowLuxury">‹</a>
      <div class="sectionLeftImaginary" id="luxury2Left"></div>
      <div class="sectionRightImaginary" id="luxury2Right"></div>
      <div class="item">
        <button class="buttonStreetOne">
          <div class="mightyInside">
              <div><img src="../Images/fishball.png" class="streetPicture"></div>
              <div class="streetText">Fishball</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="streetTable">
                    <tr>
                      <td class="parmesanPrice">PHP 20</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;20&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
          </div>
      </button>
      </div>
      <div class="item">
        <button class="buttonStreetTwo">
          <div class="mightyInside">
            <div><img src="../Images/chickenball.png" class="mightyPicture"></div>
            <div class="garlicParmesanText">Chicken Ball</div>
            <div class="mightyPriceContainer">
              <div>
                <table class="streetTable">
                  <tr>
                    <td class="parmesanPrice">PHP 30</td>
                    <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;8&nbsp;</span>PCS</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </button>
      </div>
      <div class="item">
        <button class="buttonStreetThree">
          <div class="mightyInside">
            <div><img src="../Images/kikiam.png" class="kikiamPicture"></div>
            <div class="streetText1">Kikiam</div>
            <div class="mightyPriceContainer">
              <div>
                <table class="streetTable">
                  <tr>
                    <td class="parmesanPrice">PHP 20</td>
                    <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;8&nbsp;</span>PCS</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </button>
      </div>
      <a href="#luxury3Right" class="arrowLuxury">›</a>
      </section>
      <section> <!-- SECTION 3 LUXURY -->
      <a href="#luxury2Left" class="arrowLuxury">‹</a>
      <div class="sectionLeftImaginary" id="luxury3Left"></div>
      <div class="sectionRightImaginary" id="luxury3Right"></div>
      <div class="item">
        <button class="buttonStreetOne">
          <div class="mightyInside">
            <div><img src="../Images/kwekkwek1.png" class="mightyPicture"></div>
            <div class="streetText">Kwek Kwek</div>
            <div class="mightyPriceContainer">
              <div>
                <table class="parmesanTable">
                  <tr>
                    <td class="parmesanPrice">PHP 30</td>
                    <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;5&nbsp;</span>PCS</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </button>
      </div>
      <div class="item">
        <button class="buttonStreetTwo">
          <div class="mightyInside">
            <div><img src="../Images/tokwa.png" class="tokwaPicture"></div>
            <div class="streetText2">Tokwa</div>
            <div class="mightyPriceContainer">
              <div>
                <table class="parmesanTable">
                  <tr>
                    <td class="parmesanPrice">PHP 20</td>
                    <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;5&nbsp;</span>PCS</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </button>
      </div>
      <div class="item">
        <button class="buttonStreetThree">
          <div class="mightyInside">
            <div><img src="../Images/hotdog.png" class="hotdogPicture"></div>
            <div class="streetText3">Hotdog</div>
            <div class="mightyPriceContainer">
              <div>
                <table class="parmesanTable">
                  <tr>
                    <td class="parmesanPrice">PHP 30</td>
                    <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;12&nbsp;</span>PCS</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </button>
      </div>
      <a href="#luxury4Right" class="arrowLuxury">›</a>
      </section>
      <section> <!-- SECTION 4 LUXURY -->
        <a href="#luxury3Left" class="arrowLuxury">‹</a>
        <div class="sectionLeftImaginary" id="luxury4Left"></div>
        <div class="sectionRightImaginary" id="luxury4Right"></div>
        <div class="item">
          <button class="buttonTwoOnlyOne">
            <div class="mightyInside">
                <div><img src="../Images/siomai.png" class="pictureTwoOnlyOne"></div>
                <div class="streetText">Siomai</div>
                <div class="mightyPriceContainer">
                  <div>
                    <table class="streetTable">
                      <tr>
                        <td class="parmesanPrice">PHP 30</td>
                        <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;5&nbsp;</span>PCS</td>
                      </tr>
                    </table>
                  </div>
                </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonTwoOnlyTwo">
            <div class="mightyInside">
              <div><img src="../Images/one day old.png" class="pictureTwoOnlyTwo"></div>
              <div class="streetText4">One Day Old</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="streetTable">
                    <tr>
                      <td class="parmesanPrice">PHP 35</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;3&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="#luxury1Left" class="arrowLuxury">›</a>
      </section>
    </div>
  </div>


  <!--            OTHER FOOD ITEMS             -->
  <!--            OTHER FOOD ITEMS             -->
  <!--            OTHER FOOD ITEMS             -->
  <!--            OTHER FOOD ITEMS             -->


  <div class="menuContainer">
    <div class="firstContainer"></div>
    <div class="mightyWings">
      <img src="../Images/staryellow.png" class="starYellowLeft">OTHER FOOD ITEMS
      <img src="../Images/staryellow.png" class="starYellowRight">
    </div>
  </div>
  <div class="mightyWingsContainer">
    <div class="wrapperMighty">
      <section> <!-- SECTION 1 OTHER -->
        <a href="#other3Right" class="arrowMighty">‹</a>
        <div class="sectionLeftImaginary" id="other1Left"></div>
        <div class="item">
          <button class="buttonMightyOne">
            <div class="mightyInside">
              <div>
                <img src="../Images/Gulaman.png" class="mightyPicture">
              </div>
              <div class="garlicParmesanText">GULAMAN</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 20</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;16&nbsp;</span>OZ</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyTwo">
            <div class="mightyInside">
              <div>
                <img src="../Images/mojos.png" class="mightyPicture">
              </div>
              <div class="butteredHoneyText">MOJOS</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 60</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;15&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyThree">
            <div class="mightyInside">
              <div>
                <img src="../Images/TOFU.png" class="mightyPicture">
              </div>
              <div class="garlicParmesanText">Oysterrific Tofu w/ Mushroom</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 80</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;1&nbsp;</span>BOX</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="#other2Right" class="arrowMighty">›</a>
      </section>
      <section> <!-- SECTION 2 OTHER -->
        <a href="#other1Left" class="arrowMighty">‹</a>
        <div class="sectionLeftImaginary" id="other2Left"></div>
        <div class="sectionRightImaginary" id="other2Right"></div>
        <div class="item">
          <button class="buttonMightyOne">
            <div class="mightyInside">
              <div><img src="../Images/balut.png" class="mightyPicture"></div>
              <div class="spicyBuffaloText">Sizzling Balut</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 80</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;3&nbsp;</span>PCS</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">PHP 130</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;5&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyTwo">
            <div class="mightyInside">
              <div><img src="../Images/cheesesticks.png" class="mightyPicture"></div>
              <div class="spicyBuffaloText">Ham & Cheese<br>Lumpia</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 60</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;12&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="item">
          <button class="buttonMightyThree">
            <div class="mightyInside">
              <div><img src="../Images/rice.png" class="mightyPicture"></div>
              <div class="spicyBuffaloText">Flavored Rice</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">Steamed Rice</td>
                      <td class="parmesanPrice">PHP 10</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;1&nbsp;</span>CUP</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">Soy Fried Rice</td>
                      <td class="parmesanPrice">PHP 15</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;1&nbsp;</span>CUP</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">Garlic Fried Rice</td>
                      <td class="parmesanPrice">PHP 15</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;1&nbsp;</span>CUP</td>
                    </tr>
                    <tr>
                      <td class="parmesanPrice">Java Rice</td>
                      <td class="parmesanPrice">PHP 15</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;1&nbsp;</span>CUP</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="#other3Right" class="arrowMighty">›</a>
      </section>
      <section> <!-- SECTION 3 OTHER -->
        <a href="#other2Left" class="arrowMighty">‹</a>
        <div class="sectionLeftImaginary" id="other3left"></div>
        <div class="sectionRightImaginary" id="other3Right"></div>
        <div class="item">
          <button class="buttonThreeOnlyOne">
            <div class="mightyInside">
              <div><img src="../Images/bapcorn.png" class="mightyPicture"></div>
              <div class="spicyBuffaloText">Bapcorn</div>
              <div class="mightyPriceContainer">
                <div>
                  <table class="parmesanTable">
                    <tr>
                      <td class="parmesanPrice">PHP 100</td>
                      <td class="parmesanPiece">&nbsp;&nbsp;FOR<span class="numberPieces">&nbsp;14&nbsp;</span>PCS</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </button>
        </div>
        <a href="#other1Left" class="arrowMighty">›</a>
      </section>
    </div>
  </div>



  <!--                PLATTER                  -->
  <!--                PLATTER                  -->
  <!--                PLATTER                  -->
  <!--                PLATTER                  -->
  
  <div class="menuContainer">
    <div class="firstContainer"></div>
    <div class="mightyWings">
      <img src="../Images/staryellow.png" class="starYellowLeft">PLATTERS
      <img src="../Images/staryellow.png" class="starYellowRight">
    </div>
  </div>
  <div class="platterContainer">
    <div>
      <button class="platterOne">
        <div class="mightyInside">
            <div><img src="../Images/streetplatter.png" class="platterPicOne"></div>
            <div class="platterTextOne">Luxury Street Foods</div>
            <div class="mightyPriceContainer">

                <table class="platterTable">
                  <tr>
                    <td class="sizePlatter">Small&nbsp;&nbsp;&nbsp;</td>
                    <td class="parmesanPrice">PHP 100</td>

                  </tr>
                  <tr>
                    <td class="sizePlatter">Medium&nbsp;&nbsp;&nbsp;</td>
                    <td class="parmesanPrice">PHP 150</td>

                  </tr>
                  <tr>
                    <td class="sizePlatter">Large&nbsp;&nbsp;&nbsp;</td>
                    <td class="parmesanPrice">PHP 200</td>

                  </tr>
                </table>
            </div>
        </div>
      </button>
    </div>
    <div>
      <button class="platterTwo">
        <div class="mightyInside">
          <div><img src="../Images/chickenplatter.png" class="platterPicTwo"></div>
          <div class="platterTextTwo">Mighty Wings</div>
          <div class="mightyPriceContainer">
              <table class="platterTable">
                <tr>
                  <td class="sizePlatter">Dars&nbsp;&nbsp;&nbsp;</td>
                  <td class="parmesanPrice">PHP 400</td>
                </tr>
                <tr>
                  <td class="sizePlatter">Baps&nbsp;&nbsp;&nbsp;</td>
                  <td class="parmesanPrice">PHP 800</td>
                </tr>
              </table>
          </div>
      </div>
      </button>
    </div>
  </div>


  <div class="spaceContainerMenu"></div>
  <div class="productsOrderNowButtonContainer">
    <a button class="productsOrderNowButton" href="../Features/OrderPage.php">Order Now</a>
  </div>
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