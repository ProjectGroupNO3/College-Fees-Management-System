<?php

include 'establishDb.php';

if(isset($_POST['submit'])){  //check whether the variable submit is set or not. If set then execute all the code contain in the block..

        $Name=$_POST['name'];
        $Department=$_POST['department'];
        $Category=$_POST['category'];
        $Branch=$_POST['branch'];
        $Date=$_POST['date'];
    

    $sqlQuery="insert into admissiontransaction(Name1,Department,Category,Branch,Date)
            values('$Name','$Department','$Category','$Branch','$Date')";

    if(mysqli_query($connection,$sqlQuery)){  //Syntax: mysqli_query(connectionVariable, query , resultMode)
        echo "<script>alert('New Record Inserted')</script>";
    }

    else{
        echo "Error:".mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>