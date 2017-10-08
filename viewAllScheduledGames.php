
<?php
$link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
$sql = "SELECT * FROM gamesschedule";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    include("viewAllScheduledGames.html");
    while($row = $result->fetch_assoc()) {
    // Links on form to select recdords
        
        echo"   Schedule ID: " . $row["scheduleID"]. " - Board Game: " . $row["boardGamesID"]. " - Game Venue: " . $row["venue"]. "Date: " . $row["date"]. "<br>"; 
    }
} else {
    //On Error redirect back to start of task
    header("refresh:3;url= http://localhost:10/TM4/viewAllScheduledGames.html");
    echo "Sorry, There are no results to show - 0 results found";
} 
?>

