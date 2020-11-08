<!DOCTYPE html>
<html>

<head>
    <title>
        Bootstrap Assignment
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta HTTP-EQUIV="Refresh"
content="0; URL=http://localhost:8080/sameepsawant/Qizz/index.php">-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/action.js"></script>
</head>

<body onload="myfunction()">

    <form action="storage.php" method="post">
        <div class="mainquizz">
                <?php
                $slit = "";
                if(isset($_GET["page"]))
                {
                    $slit = $_GET["page"];    
                }
                
                if($slit==1||$slit==2||$slit==3){
            ?>
                                   <div class="question">

                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="content" id="Question6">
                                <div class="images">
                                    <div class="image1"><img src="images/img-border.png" alt="border"></div>
                                    <div class="images3"><img src="images/main-logo.png" alt="logo"></div>
                                    <!-- <div class="image212"><img src="images/hmp-feast.png" alt="aeroplane"></div>-->
                                    <div class="contentinfo1">
                                        <?php  
                                        echo $slit;
                                        if($slit==1){ ?>
                                            <div class="correct">
                                        
                                        </div>
                                        <?php } else if($slit==2){?>
                                        <div class="correct">
                                        
                                        </div>
                                        <div class="correct"> </div>
                                        <?php } else if($slit==3){?>
                                         <div class="correct"> </div>
                                        <div class="correct"> </div>
                                        <div class="correct"> </div>
                                        <?php } ?>
                                         <p class="score">YOUR SCORE</p>
                                           
                                             <input type="button" value="TRY AGAIN" onclick="window.location='index.php'" class="last">
                                       
                                    </div>
                                    
                                    <!--<div class="warning">
                                        <p>CLICK ON THE CORRECT ANSWER</p>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                
                
             <?php   } else{?>
                
                <div class="question">

                    <div class="container">

                        <div class="row">
                            <div class="col-xs-12">

                                <div class="content" id="Question1">
                                    <div class="images">
                                        <div class="image1"><img src="images/img-border.png" alt="border"></div>
                                        <div class="images3"><img src="images/main-logo.png" alt="logo"></div>
                                        <div class="image2"><img src="images/ques1-plane.png" alt="aeroplane"></div>
                                        <div class="contentinfo">

                                            <p class="para1">BRUSSELS AIRLINES HAS AN OFFICIAL TOMORROWLAND PLANE. WHICH ONE IS IT?</p>
                                            <p class="paraopt" id="ans1">A.<span class="spant">
                                                    <label for="Spant1" id="q1">AMARE</label>
                                                    <input type="radio" name="city" id="Spant1" value="AMARE" class="radiobt1">
                                                </span></p>
                                            <p class="paraopt" id="ans2">B.<span class="spant">
                                                    <label for="Spant2" id="q2">TRIDENT</label>
                                                    <input type="radio" name="city" id="Spant2" value="TRIDENT" class="radiobt2">
                                                </span></p>

                                        </div>
                                    </div>
                                    <div class="warning">
                                        <p>CLICK ON THE CORRECT ANSWER</p>
                                    </div>
                                    <div class="bton"><button type="button" id="sub1">Next</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            <!--  <div class="mainquizz">
        <div class="main">-->
            <div class="question">

                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="content" id="Question2">
                                <div class="images">
                                    <div class="image1"><img src="images/img-border.png" alt="border"></div>
                                    <div class="images3"><img src="images/main-logo.png" alt="logo"></div>
                                    <div class="image21"><img src="images/ques2-house.png" alt="aeroplane"></div>
                                    <div class="contentinfo1">

                                        <p class="para2">IN WHICH BELGIAN CITY IS TOMORROWLAND TAKING PLACE</p>
                                        <p class="paraopt" id="anspart3">A.<span class="spant">
                                                <label id="q3" for="Spant3">BRUSSELS</label>
                                                <input type="radio" name="flight" id="Spant3" value="BRUSSELS" class="radiobt1">
                                            </span></p>
                                        <p class="paraopt" id="anspart4">B.<span class="spant">
                                                <label id="q4" for="Spant4">BOOM</label>
                                                <input type="radio" name="flight" id="Spant4" value="BOOM" class="radiobt2">
                                            </span></p>

                                    </div>
                                </div>
                                <div class="bton"><button type="button" id="sub2">Next</button></div>
                                <div class="warning">
                                    <p>CLICK ON THE CORRECT ANSWER</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- </div>


    </div>
-->


            <!--    <div class="mainquizz">
        <div class="main">-->
            <div class="question">

                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="content" id="Question3">
                                <div class="images">
                                    <div class="image1"><img src="images/img-border.png" alt="border"></div>
                                    <div class="images3"><img src="images/main-logo.png" alt="logo"></div>
                                    <div class="image2"><img src="images/hmp-feast.png" alt="aeroplane"></div>
                                    <div class="contentinfo">
                                        <p class="para4">WHICH FERRIS WHEEL OFFERS YOU THE MOST MAGNIFICENT VIEWS ON TOMORROWLAND?</p>
                                        <p class="paraopt1" id="ans5">A.<span class="spant1">
                                                <label id="q5" for="Spant5">THE TORNADO</label>
                                                <input type="radio" name="mall" id="Spant5" value="THE TORNADO" class="radiobt1">
                                            </span></p>
                                        <p class="paraopt1" id="ans6">B.<span class="spant1">
                                                <label id="q6" for="Spant6">THE LOOP</label>
                                                <input type="radio" name="mall" id="Spant6" value="THE LOOP" class="radiobt2">
                                            </span></p>
                                    </div>
                                    <div class="bton"><button type="button" id="sub3">Next</button></div>

                                    <div class="warning">
                                        <p>CLICK ON THE CORRECT ANSWER</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- </div>


    </div>-->

            <!--        <div class="mainquizz">
        <div class="main">-->
            <div class="question">

                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="content" id="Question4">
                                <div class="images">
                                    <div class="image1"><img src="images/img-border.png" alt="border"></div>
                                    <div class="images3"><img src="images/main-logo.png" alt="logo"></div>
                                    <div class="image212"><img src="images/hmp-feast.png" alt="aeroplane"></div>
                                    <div class="contentinfo1">

                                        <p class="para5">HOW MANY PEOPLE FROM ALL OVER THE WORLD WILL FLY TO TOMORROWLAND THIS SUMMER WITH BRUSSELS AIRLINES?</p>
                                        <input type="text" name="Answer" id="impanswer">

                                        <div class="bton1"><button type="button" id="sub4">Next</button></div>

                                    </div>
                                    <!--<div class="warning">
                                        <p>CLICK ON THE CORRECT ANSWER</p>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
        </div>
                    

    </div>-->
            <div class="question">

                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="content" id="Question5">
                                <div class="images">
                                    <div class="image1"><img src="images/img-border.png" alt="border"></div>
                                    <div class="images3"><img src="images/main-logo.png" alt="logo"></div>
                                    <!-- <div class="image212"><img src="images/hmp-feast.png" alt="aeroplane"></div>-->
                                    <div class="contentinfo1">

                                        <div class="name">
                                            <label>NAME</label>
                                            <input type="text" name="name" id="Name" class="nam">
                                        </div>
                                        <div class="name1">
                                            <label>SURNAME</label>
                                            <input type="text" name="surname" id="Surname" class="nam">
                                        </div>
                                        <div class="name2">
                                            <label>EMAIL ADDRESS</label>
                                            <input type="text" name="email" id="Email" class="nam">
                                        </div>
                                        <div class="name3">
                                            <div class="partition"><label>NEWSLETTER</label></div>
                                            <div class="partition1">
                                               <input type="checkbox" id="check" class="check"><span class="checkinfo">YES, I WANT TO RECIEVE PROMOTIONS BRUSSELS AIRLINES BY EMAIL</span> 
                                            </div>
                                        </div>
                                        <div class="name4">
                                            <input type="submit" name="submit" id="subbt" class="nam1">
                                        </div>

                                    </div>
                                    <!--<div class="warning">
                                        <p>CLICK ON THE CORRECT ANSWER</p>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                
                
                
              <?php  } ?>
                

        </div>
    </form>
          
        
    <!--    </div>-->
</body>

</html>