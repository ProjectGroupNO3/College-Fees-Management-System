<?php

include 'establishDb.php';

if(isset($_POST['submit'])){  //check whether the variable submit is set or not. If set then execute all the code contain in the block..

        $Name=$_POST['name'];
        $Category=$_POST['category'];
        $Branch=$_POST['branch'];
        $Date=$_POST['date'];
       
    

    $sqlQuery="insert into cotransaction(Name,Category,Branch,Date)
            values('$Name','$Category','$Branch','$Date')";

    if(mysqli_query($connection,$sqlQuery)){  //Syntax: mysqli_query(connectionVariable, query , resultMode)
        echo "<script>alert('New Record Inserted')</script>";
        
    }

    else{
        echo "Error:".mysqli_error($connection);
    }
   
    mysqli_close($connection);
}
?>