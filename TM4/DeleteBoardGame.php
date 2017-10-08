
<?php
$assg = ""; 

//Left the names from Delete Assigned Games PHP. This can be changed but was testing to see if they all work still :)
$assg = $_POST["assignedGames"];
$link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
$sql = "DELETE FROM boardGames WHERE boardGamesID=$assg";

if (is_null($assg)){
  //RecordID id has not been entered
  //On Error redirect back to start of task
  header("refresh:3;url= http://localhost:10/TM4/deleteBoardGame.html");
  echo "record not deleted - No Game ID has been entered";
}
else{

if(mysqli_query($link,$sql)){
    header("refresh:3;url= http://localhost:10/TM4/deleteBoardGame.html");
    echo "Record Deleted";
}
else{
    header("refresh:3;url= http://localhost:10/TM4/deleteBoardGame.html");
    echo "record not deleted";

}
}

?>