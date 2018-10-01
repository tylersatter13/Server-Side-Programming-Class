<?php include('single.php'); ?>

<?php
$servername = "localhost";
$username = "tylersat_admin";
$password = "Betheduck13!";
$dbname = "tylersat_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT SenderName, Subject, Messages FROM Messages";
$countSubmissions = $conn->query($sql);

if ($countSubmissions->num_rows > 0) {
    // output data of each row
    while($row = $countSubmissions->fetch_assoc()) {
        echo "Name: " . $row["SenderName"]. " <br> Subject: " . $row["Subject"]. "<br> Message " . $row["Messages"]. "<br>";
    }
}else {
    echo "0 results";
}