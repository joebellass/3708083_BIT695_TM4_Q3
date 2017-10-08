
<?php
$memID = ""; 
$memID = $_POST["memberID"];
$link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
$sql = "DELETE FROM players WHERE memberID=$memID";
if (is_null($memID)){
  //Member id has not been entered
  //On Error redirect back to start of task
  header("refresh:3;url= http://localhost:10/TM4/TMA4_delete.html");
  echo "record not deleted - No Member ID has been entered";
}
else{

if(mysqli_query($link,$sql)){
    header("refresh:3;url= http://localhost:10/TM4/TMA4_deleteAssignedGame.html");
    echo "Record Deleted";
}
else{
    header("refresh:3;url= http://localhost:10/TM4/TMA4_delete.html");
    echo "record not deleted";

}
}

?>