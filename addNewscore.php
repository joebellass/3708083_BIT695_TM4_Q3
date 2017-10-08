<?php
$fname = $email = $lname = $phone = "";
$errors = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  
     $date = $_POST["date"];

     $bgID = $_POST["boardGameID"];
     
        $memID = $_POST["memberID"];

        $ts = $_POST["totalScore"];
      


   $link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
  

   $sql = "INSERT INTO `score`(`totalScore`, `date`,`boardGamesID`,`memberID`) VALUES ('$ts','$date','$bgID','$memID')";

}

  //mysqli_query($link, $sql);
if (!$errors ==""){
  //The data entered was invalid
 header("refresh:3;url= http://localhost:10/TM4/addNewScore.html");
 echo ("The data you entered was not inserted into the database :( <br>");
  echo ($errors);
}


  else{

if(mysqli_query($link, $sql))
{
 include("addNewScore.html");
}
else
{
  //Return to page if no not entered
  header("refresh:1;url= http://localhost:10/TM4/addNewScore.html");
  echo ("Data Not entered");
}
}


mysqli_close($link);

?>
