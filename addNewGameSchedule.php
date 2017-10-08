<?php
$fname = $email = $lname = $phone = "";
$errors = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  
     $bg = $_POST["boardGamesID"];

     $venue = $_POST["venue"];
     
        $date = $_POST["date"];

      
      


 //check if fields are entered


   $link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
  

   $sql = "INSERT INTO `gamesschedule`(`boardGamesID`, `venue`,`date`) VALUES ('$bg','$venue','$date')";

}

  //mysqli_query($link, $sql);
if (!$errors ==""){
  //The data entered was invalid
 header("refresh:3;url= http://localhost:10/TM4/addNewGameSchedule.html");
 echo ("The data you entered was not inserted into the database :( <br>");
  echo ($errors);
}


  else{

if(mysqli_query($link, $sql))
{
 include("addNewGameSchedule.html");
}
else
{
  //Return to page if no not entered
  header("refresh:1;url= http://localhost:10/TM4/addNewGameSchedule.html");
  echo ("Data Not entered");
}
}


mysqli_close($link);

?>
