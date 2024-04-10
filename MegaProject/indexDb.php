<?php

include 'establishDb.php';

$sql = "SELECT COUNT(*) as total_rows FROM student";

// Execute query
$result = $connection->query($sql);

if ($result && $result->num_rows > 0) {
    // Fetching row count
    $row = $result->fetch_assoc();
    $total_rows = $row['total_rows'];
    echo "Total rows in the table: " . $total_rows;
} else {
    echo "Error: " . $connection->error;
}

// Close connection



$sql = "SELECT COUNT(*) AS paid_count FROM student WHERE Addfees= 'paid'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $paid_count = $row["paid_count"];
        echo "Number of 'paid': " . $paid_count;
        // Calculate the ratio
        if ($total_rows > 0) {
            $percentage = ($paid_count / $total_rows)*100;
            echo "Percentage of 'paid' to total rows: " . $percentage."%";
        } else {
            echo "Error: Division by zero (total_rows is 0)";
        }
    }
} else {
    echo "0 results";
}

$connection->close();

?>
