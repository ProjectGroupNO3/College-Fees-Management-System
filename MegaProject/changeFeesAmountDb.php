<?php
include 'establishDb.php';

if(isset($_POST['examFees'])){ // Changed to match the form input name
    $exFees=mysqli_real_escape_string($connection, $_POST['examFees']); // Sanitize input
    $sqlId='78';
    $sqlQuery = "UPDATE fees_table SET ExamFees = '$exFees' WHERE Id=$sqlId";
    
    
    if(mysqli_query($connection,$sqlQuery)){
        echo "<script>alert('Fees Updated Successfully!')</script>";
    } else{
        echo "Error:".mysqli_error($connection);
    }
}

if(isset($_POST['addmissionfees'])){ // Changed to match the form input name
    $addfees=mysqli_real_escape_string($connection, $_POST['addmissionfees']); // Sanitize input

    $sqlId='78';
    $sqlQuery = "UPDATE fees_table SET AdmissionFees = '$addfees' WHERE Id=$sqlId";
    
    
    if(mysqli_query($connection,$sqlQuery)){
        echo "<script>alert('Fees Updated Successfully!')</script>";
    } else{
        echo "Error:".mysqli_error($connection);
    }
}

if(isset($_POST['cofees'])){ // Changed to match the form input name
    $coFees=mysqli_real_escape_string($connection, $_POST['cofees']); // Sanitize input

    $sqlId='78';
    $sqlQuery = "UPDATE fees_table SET CoFees = '$coFees' WHERE Id=$sqlId";
    
    
    if(mysqli_query($connection,$sqlQuery)){
        echo "<script>alert('Fees Updated Successfully!')</script>";
    } else{
        echo "Error:".mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
