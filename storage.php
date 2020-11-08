<?php

$answerone = $_POST["city"];
$answertwo = $_POST["flight"];
$answertin = $_POST["mall"];
$answerfour = $_POST["Answer"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$score=0;

if($answerone=="AMARE"){
    $score++;
}
if($answertwo=="BOOM"){
    $score++;
}
if($answertin=="THE LOOP"){
    $score++;
}
$mysql = mysqli_connect("localhost","root","","qizzdatabase");
 $sam ="INSERT INTO userinfo (username, usersurname, useremail,answer1,answer2,answer3,textanswer,DT,Score) VALUES ('$name', '$surname', '$email','$answerone','$answertwo','$answertin','$answerfour',now(),'$score')";
        $abc = mysqli_query($mysql, $sam);

 echo $sam;
   if($abc==true){
       echo "values inserted ";
      header("Location: index.php?page=".$score);
       exit();
   }else{
       echo "false";
   }
?>