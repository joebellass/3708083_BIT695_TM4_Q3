
<?php
$link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
$sql = "SELECT * FROM score";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    include("viewAllGameScores.html");
    while($row = $result->fetch_assoc()) {
    // Links on form to select recdords
        
        echo"   Score ID: " . $row["scoreID"]. " - Date: " . $row["date"]. " - Board Game: " . $row["boardGamesID"]. "    -   Member ID: " . $row["memberID"]. "   - Total Score: " . $row["totalScore"]. "<br>"; 
    }
} else {
    //On Error redirect back to start of task
    header("refresh:3;url= http://localhost:10/TM4/viewAllGameScores.html");
    echo "Sorry, There are no results to show - 0 results found";
} 
?>

