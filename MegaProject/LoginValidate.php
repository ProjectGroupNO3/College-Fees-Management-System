<?php

session_start();
include 'establishDb.php';


if(isset($_POST['adminbtn'])){

$username=$_POST['uname'];
$password=$_POST['pwd'];

$query="SELECT * from adminlogin where username='$username' and password='$password'";
$result=mysqli_query($connection,$query);

$count=mysqli_num_rows($result);

if($count>0){
    echo "<script>window.location.href='index.php'</script>";
}

else{
    
    echo "Username and Passwrod is wrong!";
}
}

if(isset($_POST['stubtn'])){
    // Logic for student login
    $stuUsername = $_POST['uname'];
    $stuPassword = $_POST['pwd'];

    $query = "SELECT * FROM student_login WHERE Username='$stuUsername' AND Password='$stuPassword'";
    $result = mysqli_query($connection, $query);

    $count = mysqli_num_rows($result);

    if($count > 0){
        // If credentials are correct, redirect to the student dashboard
        echo "<script>window.location.href='studash.php'</script>";
    } else {
        // If credentials are incorrect, display an error message
        echo "Username and Password are wrong!";
    }
}


?>