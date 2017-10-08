
<?php
$assg = ""; 
$assg = $_POST["scheduleID"];
$link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
$sql = "DELETE FROM gamesschedule WHERE scheduleID=$assg";

if (is_null($assg)){
  //RecordID id has not been entered
  //On Error redirect back to start of task
  header("refresh:3;url= http://localhost:10/TM4/DeleteScheduledGame.html");
  echo "record not deleted - No Schedule ID has been entered";
}
else{

if(mysqli_query($link,$sql)){
    header("refresh:3;url= http://localhost:10/TM4/DeleteScheduledGame.html");
    echo "Record Deleted";
}
else{
    header("refresh:3;url= http://localhost:10/TM4/DeleteScheduledGame.html");
    echo "record not deleted";

}
}

?>