<?php
include 'db_connect.php';

$sql = "SELECT blood_type, quantity FROM BloodInventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["blood_type"] . "</td><td>" . $row["quantity"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>No data available</td></tr>";
}

$conn->close();
?>
