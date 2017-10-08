<?php
$memberID = "";
$email = "";
$errors = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
     $email = $_POST["email"];
     $memberID = $_POST["memberID"];
}
  //check if valid email is entered
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   } else {
    $errors = "$errors Email error <br>";
   }
   $link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
  
   $sql = "UPDATE `players` SET `email`='$email' WHERE `memberID` = 75 ";

  //mysqli_query($link, $sql);
if (!$errors ==""){
  header("refresh:3;url= http://localhost:10/TM4/TMA4_Q1update.html");
  echo ("The data you entered was not updated <br>");
  include("TMA4_Q1update.html");
}
else{
mysqli_query($link, $sql);
header("refresh:3;url= http://localhost:10/TM4/TMA4_Q1update.html");
include("TMA4_Q1update.html");
echo ("Email address updated to $email");
 }

mysqli_close($link);

?>
