<?php
include 'establishDb.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $department=$_POST['department'];
    $branch=$_POST['branch'];


    $category=$_POST['category'];
    $date=$_POST['date'];
    
    
    $sqlQuery="insert into admissiontransaction(Name1,Department,Branch,Category,Date)
            values('$name',' $department','$branch','$category','$date')";

    if(mysqli_query($connection,$sqlQuery)){  //Syntax: mysqli_query(connectionVariable, query , resultMode)
        echo "<script>alert('New Record Inserted')</script>";
    }

    else{
        echo "Error:".mysqli_error($connection);
    }
    mysqli_close($connection);
}

?>


