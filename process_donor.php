<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $blood_type = $_POST['blood_type'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO Donors (name, blood_type, contact, email, address) 
            VALUES ('$name', '$blood_type', '$contact', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Donor registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
