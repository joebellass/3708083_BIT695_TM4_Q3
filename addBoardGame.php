<?php
$fname = $email = $lname = $phone = "";
$errors = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  
     $bg = $_POST["boardGame"];

     $position = $_POST["position"];
     
        $notes = $_POST["notes"];

        $date = $_POST["date"];
        
           $event = $_POST["event"];
      


 //check if fields are entered


   $link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
  

   $sql = "INSERT INTO `boardgames`(`boardGame`, `position`,`notes`,`date`,`event`) VALUES ('$bg','$position','$notes','$date','$event')";

}

  //mysqli_query($link, $sql);
if (!$errors ==""){
  //The data entered was invalid
 header("refresh:3;url= http://localhost:10/TM4/addBoardGames.html");
 echo ("The data you entered was not inserted into the database :( <br>");
  echo ($errors);
}


  else{

if(mysqli_query($link, $sql))
{
 include("addBoardGames.html");
}
else
{
  //Return to page if no not entered
  header("refresh:1;url= http://localhost:10/TM4/addBoardGames.html");
  echo ("Data Not entered");
}
}


mysqli_close($link);

?>
