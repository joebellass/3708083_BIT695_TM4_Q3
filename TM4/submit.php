<?php
$fname = $email = $lname = $phone = "";
$errors = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

     $fname = $_POST["FirstName"];
  
     $lname = $_POST["LastName"];

     $email = $_POST["email"];

     $phone = $_POST["phone"];
  
  //check Names are alpha
   if (ctype_alpha($fname)) {
   }else{
     $errors = "$errors First name is not valid <br>";
   }
  //check Names are alpha
  if (ctype_alpha($lname)) {
  }else{
    $errors = "$errors Last name is not valid <br>";
  }
  //check if valid email is entered
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   } else {
    $errors = "$errors Email error <br>";
   }
  //check if Number is inserted
   if (filter_var($phone, FILTER_VALIDATE_INT)) {
  } else {
   $errors = "$errors Invalid Phone Number <br>";
  }


   $link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
  

   $sql = "INSERT INTO `players`(`firstName`, `familyName`, `email`, `phone`) VALUES ('$fname','$lname','$email','$phone')";

}

  //mysqli_query($link, $sql);
if (!$errors ==""){
  //The data entered was invalid
  header("refresh:3;url= http://localhost:10/TM4/TMA2_Q1.html");
  echo ("The data you entered was not inserted into the database :( <br>");
  echo ($errors);
}
else{

if(mysqli_query($link, $sql))
{
 include("TMA2_Q1.html");
}
else
{
  //Data was not entered
  header("refresh:3;url= http://localhost:10/TM4/TMA2_Q1.html");
  echo ("The data you entered was not inserted into the database :(");
}
}
mysqli_close($link);

?>
