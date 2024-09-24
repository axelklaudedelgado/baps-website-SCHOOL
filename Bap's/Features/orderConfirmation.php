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
        $garlicParmesan = $_POST['garlicParmesan'];
        $gpcFour = $_POST['gpcFour'];
        $gpcSix = $_POST['gpcSix'];
        $gpcEight = $_POST['gpcEight'];

        $honeyButter = $_POST['honeyButter'];
        $hbgFour = $_POST['hbgFour'];
        $hbgSix = $_POST['hbgSix'];
        $hbgEight = $_POST['hbgEight'];

        $soyGarlic = $_POST['soyGarlic'];
        $sgFour = $_POST['sgFour'];
        $sgSix = $_POST['sgSix'];
        $sgEight = $_POST['sgEight'];

        $spicyMild = $_POST['spicyMild'];
        $sbmFour = $_POST['sbmFour'];
        $sbmSix = $_POST['sbmSix'];
        $sbmEight = $_POST['sbmEight'];

        $spicyMedium = $_POST['spicyMedium'];
        $sbmedFour = $_POST['sbmedFour'];
        $sbmedSix = $_POST['sbmedSix'];
        $sbmedEight = $_POST['sbmedEight'];

        $spicyHot = $_POST['spicyHot'];
        $sbhFour = $_POST['sbhFour'];
        $sbhSix = $_POST['sbhSix'];
        $sbhEight = $_POST['sbhEight'];

        $chickenCheese = $_POST['chickenCheese'];
        $ccSix = $_POST['ccSix'];

        $hamCheese = $_POST['hamCheese'];
        $hcSix = $_POST['hcSix'];

        $porkCheese = $_POST['porkCheese'];
        $pcSix = $_POST['pcSix'];

        $fishBall = $_POST['fishBall'];
        $fbTwenty = $_POST['fbTwenty'];

        $chickenBall = $_POST['chickenBall'];
        $cbEight = $_POST['cbEight'];

        $kikiam = $_POST['kikiam'];
        $kEight = $_POST['kEight'];

        $friedSiomai = $_POST['friedSiomai'];
        $fsFive = $_POST['fsFive'];

        $oneDayOld = $_POST['oneDayOld'];
        $odoThree = $_POST['odoThree'];

        $kwekKwek = $_POST['kwekKwek'];
        $kkFive = $_POST['kkFive'];

        $tokwa = $_POST['tokwa'];
        $tFive = $_POST['tFive'];

        $hotdog = $_POST['hotdog'];
        $hTwelve = $_POST['hTwelve'];

        $gulaman = $_POST['gulaman'];
        $gSixTeen = $_POST['gSixTeen'];

        $mojos = $_POST['mojos'];
        $mFifTeen = $_POST['mFifTeen'];

        $oysterrificTofu = $_POST['oysterrificTofu'];
        $otwmOneOrder = $_POST['otwmOneOrder'];

        $sizzlingBalut = $_POST['sizzlingBalut'];
        $sbThree = $_POST['sbThree'];
        $sbFive = $_POST['sbFive'];

        $hamCheeseLumpia = $_POST['hamCheeseLumpia'];
        $hclTwelve = $_POST['hclTwelve'];

        $flavoredRice = $_POST['flavoredRice'];
        $frSteamed = $_POST['frSteamed'];
        $frSoy = $_POST['frSoy'];
        $frGarlic = $_POST['frGarlic'];
        $frJava = $_POST['frJava'];

        $bapCorn = $_POST['bapCorn'];
        $cornFourteen = $_POST['cornFourteen'];

        $luxuryStreetFood = $_POST['luxuryStreetFood'];
        $lsfSmall = $_POST['lsfSmall'];
        $lsfMedium = $_POST['lsfMedium'];
        $lsfLarge = $_POST['lsfLarge'];

        $mightyWings = $_POST['mightyWings'];
        $mwDars = $_POST['mwDars'];
        $mwBaps = $_POST['mwBaps'];

        $deliveryName = $_POST['userName'];
        $contactNum = $_POST['contactNumber'];
        $addressDef = $_POST['addressName'];
        $userName = '';
        $contactNumber = '';
        $streetNumber = '';
        $barangayName = '';
        $cityName = '';
        $provinceName = '';
        $postalCode = '';
        

        $gpcTotal = '0';
        $hbgTotal = '0';
        $sgTotal = '0';
        $sbmTotal = '0';
        $sbmedTotal = '0';
        $sbhTotal = '0';
        $ccTotal = '0';
        $hcTotal = '0';
        $pcTotal = '0';
        $fbTotal = '0';
        $cbTotal = '0';
        $kikiamTotal = '0';
        $fsTotal = '0';
        $odoTotal = '0';
        $kkTotal = '0';
        $tTotal = '0';
        $hdTotal = '0';
        $gTotal = '0';
        $mjTotal = '0';
        $otTotal = '0';
        $sbTotal = '0';
        $hamTotal = '0';
        $frTotal = '0';
        $bcTotal = '0';
        $lsfTotal = '0';
        $mwTotal = '0';
        $orderTotal = '0';
?>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <link rel="icon" href="../Images/logo.png" type="image/x-icon">
 <title>Order Summary</title>
 <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>

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
      <div class="iconText"><?php try {
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
                    ?></div>
      <div><a href="../Features/ProfileWebpage.php"><img src="../Images/userPlaceholder.png" class="userPlaceholder"></a></div>
    </div>
</header>
<body>
<div class = "menuContainer">
    <div class = "firstContainer"></div>
    <div>
    <div class="everythingContainer">      
    <div class="confirmationContainer">       
        ORDER SUMMARY
    </div>

    <div class="seperateContainer"> <!--container for left side and right side-->
               <!--start of left side container-->
        <div class="orderAndTotal">
            <div class='tablesContainer'>
                <table>
                <?php  
                    if ($garlicParmesan == null){

                    }
                    else{
                        if($gpcFour > 0){
                            echo"<tr>";
                            echo"<td class= 'orderName'> 4 pcs ",$garlicParmesan,"</td>";
                            echo"<td>",$gpcFour," Order/s </td>";
                            echo"<td> PHP 80.00 <td>";
                            echo"PHP ",($gpcFour * 80.00),".00</td>";
                            echo"</tr>";
                        }
                        if($gpcSix > 0){
                            echo"<tr>";
                            echo"<td class= 'orderName'> 6 pcs ",$garlicParmesan,"</td>";
                            echo"<td>",$gpcSix," Order/s </td>";
                            echo"<td> PHP 130.00 <td>";
                            echo"PHP ",($gpcSix * 130.00),".00</td>";
                            echo"</tr>";
                        }
                        if($gpcEight > 0){
                            echo"<tr>";
                            echo"<td class= 'orderName'> 8 pcs ",$garlicParmesan,"</td>";
                            echo"<td>",$gpcEight," Order/s </td>";
                            echo"<td> PHP 160.00 <td>";
                            echo"PHP ",($gpcEight * 160.00),".00</td>";
                            echo"</tr>";
                        }
                        $gpcTotal = (intval($gpcFour) * 80) + (intval($gpcSix) * 130) + (intval($gpcEight) * 160);
                    }        
                ?>  
                <?php
                    if ($honeyButter == null){
                                                    
                    }
                    else{
                        if($hbgFour > 0){
                            echo"<tr>";
                            echo"<td class= 'orderName'> 4 pcs ",$honeyButter,"</td>";
                            echo"<td>",$hbgFour," Order/s </td>";
                            echo"<td> PHP 80.00 <td>";
                            echo"PHP ",($hbgFour * 80.00),".00</td>";
                            echo"</tr>";
                        }
                        if($hbgSix > 0){
                            echo"<tr>";
                            echo"<td class= 'orderName'> 6 pcs ",$honeyButter,"</td>";
                            echo"<td>",$hbgSix," Order/s </td>";
                            echo"<td> PHP 130.00 <td>";
                            echo"PHP ",($hbgSix * 130.00),".00</td>";
                            echo"</tr>";
                        }
                        if($hbgEight > 0){
                            echo"<tr>";
                            echo"<td class= 'orderName'> 8 pcs ",$honeyButter,"</td>";
                            echo"<td>",$hbgEight," Order/s </td>";
                            echo"<td> PHP 160.00 <td>";
                            echo"PHP ",($hbgEight * 160.00),".00</td>";
                            echo"</tr>";
                        }
                        $hbgTotal = (intval($hbgFour) * 80.00) + (intval($hbgSix) * 130.00) + (intval($hbgEight) * 160.00);
                    }
                ?>
            <?php
                if ($soyGarlic == null){
                                                
                }
                else{
                    if($sgFour > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 4 pcs ",$soyGarlic,"</td>";
                        echo"<td>",$sgFour," Order/s </td>";
                        echo"<td> PHP 80.00 <td>";
                        echo"PHP ",($sgFour * 80.00),".00</td>";
                        echo"</tr>";
                    }
                    if($sgSix > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$soyGarlic,"</td>";
                        echo"<td>",$sgSix," Order/s </td>";
                        echo"<td> PHP 130.00 <td>";
                        echo"PHP ",($sgSix * 130.00),".00</td>";
                        echo"</tr>";
                    }
                    if($sgEight > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$soyGarlic,"</td>";
                        echo"<td>",$sgEight," Order/s </td>";
                        echo"<td> PHP 160.00 <td>";
                        echo"PHP ",($sgEight * 160.00),".00</td>";
                        echo"</tr>";
                    }
                    $sgTotal= (intval($sgFour) * 80.00) + (intval($sgSix) * 130.00) + (intval($sgEight) * 160.00);
                }
            ?>
            <?php
                if ($spicyMild == null){
                                                
                }
                else{
                    if($sbmFour > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 4 pcs ",$spicyMild,"</td>";
                        echo"<td>",$sbmFour," Order/s </td>";
                        echo"<td> PHP 80.00 <td>";
                        echo"PHP ",($sbmFour * 80.00),".00</td>";
                        echo"</tr>";
                    }
                    if($sbmSix > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$spicyMild,"</td>";
                        echo"<td>",$sbmSix," Order/s </td>";
                        echo"<td> PHP 130.00 <td>";
                        echo"PHP ",($sbmSix * 130.00),".00</td>";
                        echo"</tr>";
                    }
                    if($sbmEight > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$spicyMild,"</td>";
                        echo"<td>",$sbmEight," Order/s </td>";
                        echo"<td> PHP 160.00 <td>";
                        echo"PHP ",($sbmEight * 160.00),".00</td>";
                        echo"</tr>";
                    }
                    $sbmTotal= (intval($sbmFour) * 80.00) + (intval($sbmSix) * 130.00) + (intval($sbmEight) * 160.00);
                }
            ?>
            <?php
                if ($spicyMedium == null){
                                                
                }
                else{
                    if($sbmedFour > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 4 pcs ",$spicyMedium,"</td>";
                        echo"<td>",$sbmedFour," Order/s </td>";
                        echo"<td> PHP 80.00 <td>";
                        echo"PHP ",($sbmedFour * 80.00),".00</td>";
                        echo"</tr>";
                    }
                    if($sbmedSix > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$spicyMedium,"</td>";
                        echo"<td>",$sbmedSix," Order/s </td>";
                        echo"<td> PHP 130.00 <td>";
                        echo"PHP ",($sbmedSix * 130.00),".00</td>";
                        echo"</tr>";
                    }
                    if($sbmedEight > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$spicyMedium,"</td>";
                        echo"<td>",$sbmedEight," Order/s </td>";
                        echo"<td> PHP 160.00 <td>";
                        echo"PHP ",($sbmedEight * 160.00),".00</td>";
                        echo"</tr>";
                    }
                    $sbmedTotal= (intval($sbmedFour) * 80.00) + (intval($sbmedSix) * 130.00) + (intval($sbmedEight) * 160.00);
                }
            ?>
            <?php
                if ($spicyHot == null){
                                                
                }
                else{
                    if($sbhFour > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 4 pcs ",$spicyHot,"</td>";
                        echo"<td>",$sbhFour," Order/s </td>";
                        echo"<td> PHP 80.00 <td>";
                        echo"PHP ",($sbhFour * 80.00),".00</td>";
                        echo"</tr>";
                    }
                    if($sbhSix > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$spicyHot,"</td>";
                        echo"<td>",$sbhSix," Order/s </td>";
                        echo"<td> PHP 130.00 <td>";
                        echo"PHP ",($sbhSix * 130.00),".00</td>";
                        echo"</tr>";
                    }
                    if($sbhEight > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$spicyHot,"</td>";
                        echo"<td>",$sbhEight," Order/s </td>";
                        echo"<td> PHP 160.00 <td>";
                        echo"PHP ",($sbhEight * 160.00),".00</td>";
                        echo"</tr>";
                    }
                    $sbhTotal= (intval($sbhFour) * 80.00) + (intval($sbhSix) * 130.00) + (intval($sbhEight) * 160.00);
                }
            ?>
            <?php
                if ($chickenCheese == null){
                                                
                }
                else{
                    if($ccSix > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$chickenCheese,"</td>";
                        echo"<td>",$ccSix," Order/s </td>";
                        echo"<td> PHP 80.00 <td>";
                        echo"PHP ",($ccSix * 80.00),".00</td>";
                        echo"</tr>";
                    }
                    $ccTotal= (intval($ccSix) * 80.00);
                }
            ?>
            <?php
                if ($hamCheese == null){
                                                
                }
                else{
                    if($hcSix > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$hamCheese,"</td>";
                        echo"<td>",$hcSix," Order/s </td>";
                        echo"<td> PHP 80.00 <td>";
                        echo"PHP ",($hcSix * 80.00),".00</td>";
                        echo"</tr>";
                    }
                    $hcTotal= (intval($hcSix) * 80.00);
                }
            ?>
            <?php
                if ($porkCheese == null){
                                                
                }
                else{
                    if($pcSix > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 6 pcs ",$porkCheese,"</td>";
                        echo"<td>",$pcSix," Order/s </td>";
                        echo"<td> PHP 80.00 <td>";
                        echo"PHP ",($pcSix * 80.00),".00</td>";
                        echo"</tr>";
                    }
                    $pcTotal= (intval($pcSix) * 80.00);
                }
            ?>
            <?php
                if ($fishBall == null){
                                                
                }
                else{
                    if($fbTwenty > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 20 pcs ",$fishBall,"</td>";
                        echo"<td>",$fbTwenty," Order/s </td>";
                        echo"<td> PHP 20.00 <td>";
                        echo"PHP ",($fbTwenty * 20.00),".00</td>";
                        echo"</tr>";
                    }
                    $fbTotal= (intval($fbTwenty) * 20.00);
                }
            ?>
            <?php
                if ($chickenBall == null){
                                                
                }
                else{
                    if($cbEight > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 8 pcs ",$chickenBall,"</td>";
                        echo"<td>",$cbEight," Order/s </td>";
                        echo"<td> PHP 30.00 <td>";
                        echo"PHP ",($cbEight * 30.00),".00</td>";
                        echo"</tr>";
                    }
                    $cbTotal= (intval($cbEight) * 30.00);
                }
            ?>
            <?php
                if ($kikiam== null){
                                                
                }
                else{
                    if($kEight > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 8 pcs ",$kikiam,"</td>";
                        echo"<td>",$kEight," Order/s </td>";
                        echo"<td> PHP 20.00 <td>";
                        echo"PHP ",($kEight * 20.00),".00</td>";
                        echo"</tr>";
                    }
                    $kikiamTotal= (intval($kEight) * 20.00);
                }
            ?>
            <?php
                if ($friedSiomai== null){
                                                
                }
                else{
                    if($fsFive > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 5 pcs ",$friedSiomai,"</td>";
                        echo"<td>",$fsFive," Order/s </td>";
                        echo"<td> PHP 30.00 <td>";
                        echo"PHP ",($fsFive * 30.00),".00</td>";
                        echo"</tr>";
                    }
                    $fsTotal= (intval($fsFive) * 30.00);
                }
            ?>
            <?php
                if ($oneDayOld== null){
                                                
                }
                else{
                    if($odoThree > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 3 pcs ",$oneDayOld,"</td>";
                        echo"<td>",$odoThree," Order/s </td>";
                        echo"<td> PHP 35.00 <td>";
                        echo"PHP ",($odoThree * 35.00),".00</td>";
                        echo"</tr>";
                    }
                    $odoTotal = (intval($odoThree) * 35.00);
                }
            ?>
            <?php
                if ($kwekKwek== null){
                                                
                }
                else{
                    if($kkFive > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 5 pcs ",$kwekKwek,"</td>";
                        echo"<td>",$kkFive," Order/s </td>";
                        echo"<td> PHP 30.00 <td>";
                        echo"PHP ",($kkFive* 30.00),".00</td>";
                        echo"</tr>";
                    }
                    $kkTotal = (intval($kkFive) * 30.00);
                }
            ?>
            <?php
                if ($tokwa== null){
                                                
                }
                else{
                    if($tFive > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 5 pcs ",$tokwa,"</td>";
                        echo"<td>",$tFive," Order/s </td>";
                        echo"<td> PHP 20.00 <td>";
                        echo"PHP ",($tFive * 20.00),".00</td>";
                        echo"</tr>";
                    }
                    $tTotal = (intval($tFive) * 20.00);
                }
            ?>
            <?php
                if ($hotdog== null){
                                                
                }
                else{
                    if($hTwelve > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 12 pcs ",$hotdog,"</td>";
                        echo"<td>",$hTwelve," Order/s </td>";
                        echo"<td> PHP 30.00 <td>";
                        echo"PHP ",($hTwelve * 30.00),".00</td>";
                        echo"</tr>";
                    }
                    $hdTotal = (intval($hTwelve) * 30.00);
                }
            ?>
            <?php
                if ($gulaman== null){
                                                
                }
                else{
                    if($gSixTeen > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 16 oz ",$gulaman,"</td>";
                        echo"<td>",$gSixTeen," Order/s </td>";
                        echo"<td> PHP 20.00 <td>";
                        echo"PHP ",($gSixTeen * 20.00),".00</td>";
                        echo"</tr>";
                    }
                    $gTotal = (intval($gSixTeen) * 20.00);

                }
            ?>
            <?php
                if ($mojos== null){
                                                
                }
                else{
                    if($mFifTeen > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 15 pcs ",$mojos,"</td>";
                        echo"<td>",$mFifTeen," Order/s </td>";
                        echo"<td> PHP 60.00 <td>";
                        echo"PHP ",($mFifTeen * 60.00),".00</td>";
                        echo"</tr>";
                    }
                    $mjTotal = (intval($mFifTeen) * 60.00);

                }
            ?>
            <?php
                if ($oysterrificTofu== null){
                                                
                }
                else{
                    if($otwmOneOrder > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 order ",$oysterrificTofu,"</td>";
                        echo"<td>",$otwmOneOrder," Order/s </td>";
                        echo"<td> PHP 80.00 <td>";
                        echo"PHP ",($otwmOneOrder * 80.00),".00</td>";
                        echo"</tr>";
                    }
                    $otTotal = (intval($otwmOneOrder) * 80.00);

                }
            ?>
             <?php
                if ($sizzlingBalut == null){
                                                
                }
                else{
                    if($sbThree > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 3 pcs ",$sizzlingBalut,"</td>";
                        echo"<td>",$sbThree," Order/s </td>";
                        echo"<td> PHP 80.00 <td>";
                        echo"PHP ",($sbThree * 80.00),".00</td>";
                        echo"</tr>";
                    }
                    if($sbFive > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 5 pcs ",$sizzlingBalut,"</td>";
                        echo"<td>",$sbFive," Order/s </td>";
                        echo"<td> PHP 130.00 <td>";
                        echo"PHP ",($sbFive * 130.00),".00</td>";
                        echo"</tr>";
                    }
                    $sbTotal = (intval($sbThree) * 80.00) + (intval($sbFive) * 130.00);

                }
            ?>
            <?php
                if ($hamCheeseLumpia== null){
                                                
                }
                else{
                    if($hclTwelve > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 12 pcs ",$hamCheeseLumpia,"</td>";
                        echo"<td>",$hclTwelve," Order/s </td>";
                        echo"<td> PHP 60.00 <td>";
                        echo"PHP ",($hclTwelve * 60.00),".00</td>";
                        echo"</tr>";
                    }
                    $hamTotal = (intval($hclTwelve) * 60.00);

                }
            ?>
            <?php
                if ($flavoredRice == null){
                                                
                }
                else{
                    if($frSteamed > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 pcs ",$flavoredRice,"</td>";
                        echo"<td>",$frSteamed," Order/s </td>";
                        echo"<td> PHP 10.00 <td>";
                        echo"PHP ",($frSteamed * 10.00),".00</td>";
                        echo"</tr>";
                    }
                    if($frSoy > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 pcs ",$flavoredRice,"</td>";
                        echo"<td>",$frSoy," Order/s </td>";
                        echo"<td> PHP 15.00 <td>";
                        echo"PHP ",($frSoy * 15.00),".00</td>";
                        echo"</tr>";
                    }
                    if($frGarlic > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 pcs ",$flavoredRice,"</td>";
                        echo"<td>",$frGarlic," Order/s </td>";
                        echo"<td> PHP 15.00 <td>";
                        echo"PHP ",($frGarlic * 15.00),".00</td>";
                        echo"</tr>";
                    }
                    if($frJava > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 pcs ",$flavoredRice,"</td>";
                        echo"<td>",$frJava," Order/s </td>";
                        echo"<td> PHP 15.00 <td>";
                        echo"PHP ",($frJava * 15.00),".00</td>";
                        echo"</tr>";
                    }
                    $frTotal = (intval($frSteamed) * 10.00) + (intval($frSoy) * 15.00) + (intval($frGarlic) * 15.00) + (intval($frJava) * 15.00);

                }
            ?>
            <?php
                if ($bapCorn== null){
                                                
                }
                else{
                    if($cornFourteen > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 14 pcs ",$bapCorn,"</td>";
                        echo"<td>",$cornFourteen," Order/s </td>";
                        echo"<td> PHP 100.00 <td>";
                        echo"PHP ",($cornFourteen * 100.00),".00</td>";
                        echo"</tr>";
                    }
                    $bcTotal = (intval($cornFourteen) * 100.00);

                }
            ?>
            <?php
                if ($luxuryStreetFood == null){
                                                
                }
                else{
                    if($lsfSmall > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 pcs ",$luxuryStreetFood,"</td>";
                        echo"<td>",$lsfSmall," Order/s </td>";
                        echo"<td> PHP 100.00 <td>";
                        echo"PHP ",($lsfSmall * 100.00),".00</td>";
                        echo"</tr>";
                    }
                    if($lsfMedium > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 pcs ",$luxuryStreetFood,"</td>";
                        echo"<td>",$lsfMedium," Order/s </td>";
                        echo"<td> PHP 150.00 <td>";
                        echo"PHP ",($lsfMedium * 150.00),".00</td>";
                        echo"</tr>";
                    }
                    if($lsfLarge > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 pcs ",$luxuryStreetFood,"</td>";
                        echo"<td>",$lsfLarge," Order/s </td>";
                        echo"<td> PHP 200.00 <td>";
                        echo"PHP ",($lsfLarge * 200.00),".00</td>";
                        echo"</tr>";
                    }
                    $lsfTotal = (intval($lsfSmall) * 100.00) + (intval($lsfMedium) * 150.00) + (intval($lsfLarge) * 200.00);

                }
            ?>
            <?php
                if ($mightyWings == null){
                                                
                }
                else{
                    if($mwDars > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 pcs ",$mightyWings,"</td>";
                        echo"<td>",$mwDars," Order/s </td>";
                        echo"<td> PHP 400.00 <td>";
                        echo"PHP ",($mwDars * 400.00),".00</td>";
                        echo"</tr>";
                    }
                    if($mwBaps > 0){
                        echo"<tr>";
                        echo"<td class= 'orderName'> 1 pcs ",$mightyWings,"</td>";
                        echo"<td>",$mwBaps," Order/s </td>";
                        echo"<td> PHP 800.00 <td>";
                        echo"PHP ",($mwBaps * 800.00),".00</td>";
                        echo"</tr>";
                    }
                    $mwTotal = (intval($mwDars) * 400.00) + (intval($mwBaps) * 800.00);
                    
                }
            ?>

                </table>
                
            </div>
            <div class="billBreakdown">
                    <div class="breakdownContainer"> 
                        FOOD:
                    </div>
                    <div class="billContainer">  
                        <?php
                            $orderTotal = $gpcTotal + $hbgTotal + $sgTotal + $sbmTotal + $sbmedTotal + $sbhTotal + $ccTotal + $hcTotal + $pcTotal + $fbTotal + $cbTotal + $kikiamTotal + $fsTotal + $odoTotal + $kkTotal + $tTotal + $hdTotal + $gTotal + $mjTotal + $otTotal + $sbTotal + $hamTotal + $frTotal + $bcTotal + $lsfTotal + $mwTotal;

                            echo "Php ",$orderTotal,".00";
                        ?>
                    </div>
                    <div class="breakdownContainer">     
                        DELIVERY FEE:
                    </div>  
                    <div class="billContainer">
                        Php 70.00
                    </div>
                </div>
                <div class="totalBillContainer">
                    <div class="totalContainer">
                        TOTAL:
                    </div>
                    <div class="totalBill">
                    <?php
                        echo "Php ",$orderTotal + 70, ".00";
                        ?>
                    </div>  
                </div> 
        </div>   
       <!--end of left side container-->   
        <div class="paymentAndSubmit">            <!--start of right side container-->
            <div class="paymentByContainer">
                TO BE RECEIVED BY:<br>
                <?php
                try {
                    $pdoConnect = new PDO("mysql:host=localhost;dbname=baps","root","");
                } catch (PDOException $exc) {
                    echo $exc->getMessage();
                    exit();
                }
                    if($deliveryName == "customName"){
                    
                    }
                    else{
                        $userName = $_SESSION['userName'];
                        $passwordInput = $_SESSION['passwordInput'];
                        $pdoQuery = "SELECT * FROM registrationbaps WHERE userName = :userName AND passwordInput = :passwordInput";    
                        $pdoResult =  $pdoConnect->prepare($pdoQuery);
                        $pdoExec = $pdoResult->execute(array(":userName"=>$userName, ":passwordInput" => $passwordInput));
                        
                        if($pdoResult->rowCount()>0)
						{
							while($row=$pdoResult->fetch(PDO::FETCH_ASSOC)) {
								extract($row);
                                echo "<span class = 'contentsConfirm'>",$firstName," ",$middleName," ", $lastName,"</span>";
							}
							
						} else {
							echo '<br><br><br><br><br>';
							echo 'No Data';
					}
                    }
                ?>
            </div>

            <div class="deliveryContainer">
                <p> TO BE RECEIVED AT: </p> <p class="redDelivery">
                    <span class="addressConfirmation">
                    <?php
                    if($contactNumber == "customContact"){
                    
                    }
                    else{
                        echo $streetNumber," ",$barangayName," ",$cityName," ",$provinceName," ",$postalCode;
                    }
                        
                    ?>
                    </span>
                </p>
            </div>

            <div class="blankContainer">
                <p>CONTACT NUMBER: </p>
                <?php
                
                    if($contactNumber == "customContact"){
                    
                    }
                    else{
                        echo "<span class = 'contentsConfirm'>",$contactNumber,"</span>";
                    }
                ?>
            </div>

            <div>
            <a href = "../Features/orderProcess.php"><button class="submitContainerOrderSummary">SUBMIT ORDER</button></a>
            </div>
        </div>          <!--end of right side container-->
    </div>
</div>
    </div>
</div>
<div class = "spaceContainerOrderPage">

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