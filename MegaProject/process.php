<?php

include 'establishDb.php';

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $motherName = $_POST['momname'];

    $dob = $_POST['dob'];
    $category = $_POST['cat'];
    $email = $_POST['eid'];

    $address = $_POST['add'];
    $gender = $_POST['gen1'];
    $phoneNo = $_POST['pno'];

    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    // Using prepared statements to prevent SQL injection
    $sqlQuery = "INSERT INTO registration(FName, LName, MName, MotherName, dob, Category, EmailId, Address, gender, pno, username, password)
                 VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($connection, $sqlQuery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ssssssssssss', $fname, $lname, $mname, $motherName, $dob, $category, $email, $address, $gender, $phoneNo, $uname, $pwd);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('New Record Inserted')</script>";
        } else {
            echo "Error:" . mysqli_error($connection);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error:" . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>
