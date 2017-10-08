
<?php
$link = mysqli_connect('localhost', 'root', 'root','3708083') or die('Could not connect: ' . mysql_error());
$sql = "SELECT * FROM players";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    include("TMA4_AllRecords.html");
    while($row = $result->fetch_assoc()) {
    // Links on form to select recdords
        
        echo"   MemberID: " . $row["memberID"]. " - Name: " . $row["firstName"]. " " . $row["familyName"]. "<br>"; 
    }
} else {
    //On Error redirect back to start of task
    header("refresh:3;url= http://localhost:10/TM4/TMA4_AllRecords.html");
    echo "Sorry, There are no results to show - 0 results found";
} 
?>

