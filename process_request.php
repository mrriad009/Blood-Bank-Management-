<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood_type = $_POST['blood_type'];
    $requester_contact = $_POST['requester_contact'];

    $sql = "INSERT INTO Requests (blood_type, requester_contact) 
            VALUES ('$blood_type', '$requester_contact')";

    if ($conn->query($sql) === TRUE) {
        echo "Blood request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
