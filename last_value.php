<?php

require_once 'db_config.php';


$sql = "SELECT value FROM robot controller ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastValue = $row["value"];
    echo "Last Value: " . $lastValue;
} else {
    echo "No records found";
}

$conn->close();
?>
