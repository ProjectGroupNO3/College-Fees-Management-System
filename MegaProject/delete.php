<?php
include 'establishDb.php';

if (isset($_POST['delete']) && isset($_POST['enrollment'])) {
    $enrollment = $_POST['enrollment'];

    // Perform the deletion query
    $deleteQuery = "DELETE FROM student WHERE Enrollment = '$enrollment'";
    $deleteResult = $connection->query($deleteQuery);

    if ($deleteResult) {

        echo "<script>alert('Student with Enrollment:.$enrollment is removed successfully!')</script>";
    } else {
        echo "Error: Unable to remove the student.";
    }
}

$connection->close();
?>
