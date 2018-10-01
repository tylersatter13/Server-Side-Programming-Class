<?php
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

  /*  echo $name;
    echo $subject;
    echo $message;*/

    $servername = "localhost";
    $username = "tylersat_admin";
    $password = "Betheduck13!";
    $dbname = "tylersat_test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Messages (SenderName,Subject,Messages )
VALUES ('$name','$subject' , '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    ?>