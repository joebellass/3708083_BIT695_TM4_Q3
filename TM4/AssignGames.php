<?php
$fname = $email = $lname = $phone = "";
$errors = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

     $bgID = $_POST["BoardGamesID"];
  
     $memID = $_POST["memberID"];


  //check if Number is inserted
   if (filter_var($bgID, FILTER_VALIDATE_INT)) {
  } else {
   $errors = "$errors Invalid Boardgame ID - Please enter and Integer value <br>";
  }
  //check if Number is inserted
  if (filter_var($memID, FILTER_VALIDATE_INT)) {
  } else {
   $errors = "$errors Invalid Member ID - Please enter and Integer value <br>";
  }

   $link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
  

   $sql = "INSERT INTO `assignedtoPlayers`(`boardGamesID`, `memberID`) VALUES ('$bgID','$memID')";

}

  //mysqli_query($link, $sql);
if (!$errors ==""){
  //The data entered was invalid
 header("refresh:3;url= http://localhost:10/TM4/assignBoardGames.html");
 echo ("The data you entered was not inserted into the database :( <br>");
  echo ($errors);
}
else{

if(mysqli_query($link, $sql))
{
 include("assignBoardGames.html");
}
else
{
  //No ID's found in database
  header("refresh:1;url= http://localhost:10/TM4/assignBoardGames.html");
  echo ("Pleaase check that the Boardgame ID and Member ID is valid");
}
}
mysqli_close($link);

?>
