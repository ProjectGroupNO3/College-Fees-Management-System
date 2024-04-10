<?php

include 'establishDb.php';

if(isset($_POST['submit'])){  //check whether the variable submit is set or not. If set then execute all the code contain in the block..

        $Name=$_POST['name'];
        $Enrollment=$_POST['enrollment'];
        $Scheme=$_POST['scheme'];

        $Semester=$_POST['semester'];
        $Date=$_POST['date'];
    

    $sqlQuery="insert into examtransaction(Name,Enrollment,Scheme,Semester,Date)
            values('$Name','$Enrollment','$Scheme','$Semester', '$Date')";

    if(mysqli_query($connection,$sqlQuery)){  //Syntax: mysqli_query(connectionVariable, query , resultMode)
        echo "<script>alert('New Record Inserted')</script>";
    }

    else{
        echo "Error:".mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>