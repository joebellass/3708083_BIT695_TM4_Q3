
<?php
$link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
$sql = "SELECT * FROM boardGames";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    include("viewAllBoardGames.html");
    while($row = $result->fetch_assoc()) {
    // Links on form to select recdords
        
        echo"   Boardgame ID: " . $row["boardGamesID"]. " - Description: " . $row["boardGame"]. " - Game Notes: " . $row["notes"]. "<br>"; 
    }
} else {
    //On Error redirect back to start of task
    header("refresh:3;url= http://localhost:10/TM4/viewAllBoardGames.html");
    echo "Sorry, There are no results to show - 0 results found";
} 
?>

