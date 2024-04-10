<?php include 'establishDb1.php'; 


if(isset($_POST['submit'])){  //check whether the variable submit is set or not. If set then execute all the code contain in the block..

    $dateofpayment=$_POST['dop'];
    $transactionid=$_POST['tid'];
    $refferenceno=$_POST['refno'];


    $Enrollment=$_POST['enrollment'];
    $Time=$_POST['time'];
    $Amount=$_POST['amount'];

    $selectpaymenttype=$_POST['spt'];
    $selectfeestype=$_POST['sft'];

   
    
    

    $sqlQuery="insert into transactionform(dop,tid,refno,enrollment,time,amount,spt,sft)
            values('$dateofpayment','$transactionid','$refferenceno','$Enrollment',' $Time','$Amount','$selectpaymenttype','$selectfeestype')";

    if(mysqli_query($connection,$sqlQuery)){  //Syntax: mysqli_query(connectionVariable, query , resultMode)
        echo "<script>alert('New Record Inserted')</script>";
    }

    else{
        echo "Error:".mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>