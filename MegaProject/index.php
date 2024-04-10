<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
       
       
        .btn-container .btn .text-field {
       
            display: none;
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #f9f9f9;
            
        }
        .btn-container .btn:hover .text-field {
            display: block;
    
                  
        }
    </style>
</head>
<body>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-12 m-auto text-center">
        <img src="gpslogo.png" width="120px" height="120px">
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
        <h1>Government Polytechnic Sakoli, Bhandara</h1>
    </div>
</div>
<hr>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                    <a class="nav-link active fst-italic fw-bold" aria-current="page" href="index.php"><h5><b>Dashboard</b></h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fst-italic fw-bold" href="studentInfo.php" ><h5><b>Students</h5></b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fst-italic fw-bold" href="changeFeesAmount.php"><h5><b>Fees Amount</b></h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fst-italic fw-bold" href="paymentrep.php"><h5><b>Payment Report</b></h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fst-italic fw-bold" href="login.php"><h5><b>Logout</b></h5></b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br>


<div class="abc">  
    <div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
        <h3>Dashboard</h3>
    </div>
    
</div>

<div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">


    
</div>

<div class="but btn-container">
    <div class="col-sm-12 col-md-12 col-lg-12 col-12 m-auto text-center">

    <?php
      include 'establishDb.php';

      $sql = "SELECT COUNT(*) as total_rows FROM student";

// Execute query
$result = $connection->query($sql);

if ($result && $result->num_rows > 0) {
    // Fetching row count
    $row = $result->fetch_assoc();
    $total_rows = $row['total_rows'];

} else {
    echo "Error: " . $connection->error;
}
?>

<?php 

$sql = "SELECT COUNT(*) AS paid_count FROM student WHERE Semester= '1'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $paid_count = $row["paid_count"];
        
      }
    }
       
        // Calculate the ratio
  

$connection->close();
?>

        <button type="button" class="btn btn-lg btn-primary fst-italic" ><span>Total Students</span><div class="text-field"><input type="text" value=" <?php echo $total_rows;?>" size="1"></div></button>
        <button type="button" class="btn btn-lg btn-primary fst-italic" ><span>New Admission</span><div class="text-field"><input type="text" value=" <?php echo $paid_count;?>" size="1"></div></button>
   </div>
    <br><br>
    <div class="col-sm-12 col-md-12 col-lg-12 col-12 m-auto text-center">

      <?php
      include 'establishDb.php';

      $sql = "SELECT COUNT(*) as total_rows FROM student";

// Execute query
$result = $connection->query($sql);

if ($result && $result->num_rows > 0) {
    // Fetching row count
    $row = $result->fetch_assoc();
    $total_rows = $row['total_rows'];

} else {
    echo "Error: " . $connection->error;
}


    $sql = "SELECT COUNT(*) AS paid_count FROM student WHERE Addfees= 'paid'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $paid_count = $row["paid_count"];
       
        // Calculate the ratio
        if ($total_rows > 0) {
            $percentage = ($paid_count / $total_rows)*100;
        } else {
            echo "Error: Division by zero (total_rows is 0)";
        }
    }
} else {
    echo "0 results";
}

$connection->close();
?>

<?php
      include 'establishDb.php';

      $sql = "SELECT COUNT(*) as total_rows FROM student";

// Execute query
$result = $connection->query($sql);

if ($result && $result->num_rows > 0) {
    // Fetching row count
    $row = $result->fetch_assoc();
    $total_rows = $row['total_rows'];

} else {
    echo "Error: " . $connection->error;
}


    $sql = "SELECT COUNT(*) AS paid_count FROM student WHERE ExamFees= 'paid'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $paid_count = $row["paid_count"];
       
        // Calculate the ratio
        if ($total_rows > 0) {
            $percent = ($paid_count / $total_rows)*100;
        } else {
            echo "Error: Division by zero (total_rows is 0)";
        }
    }
} else {
    echo "0 results";
}

$connection->close();
?>


<?php
      include 'establishDb.php';

      $sql = "SELECT COUNT(*) as total_rows FROM student";

// Execute query
$result = $connection->query($sql);

if ($result && $result->num_rows > 0) {
    // Fetching row count
    $row = $result->fetch_assoc();
    $total_rows = $row['total_rows'];

} else {
    echo "Error: " . $connection->error;
}


    $sql = "SELECT COUNT(*) AS paid_count FROM student WHERE CoFees= 'paid'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $paid_count = $row["paid_count"];
       
        // Calculate the ratio
        if ($total_rows > 0) {
            $per = ($paid_count / $total_rows)*100;
        } else {
            echo "Error: Division by zero (total_rows is 0)";
        }
    }
} else {
    echo "0 results";
}

$connection->close();
?>







        <button type="button" class="btn btn-lg btn-primary fst-italic"><span>Admission Fees</span><div class="text-field"><input type="text" value="<?php echo $percentage."%"; ?>" size="1"></div></button>
        <button type="button" class="btn btn-lg btn-primary fst-italic" ><span>Co-Operative Store Fees</span><div class="text-field"><input type="text" value="<?php echo $percent."%"; ?>" size="1" ></div></button>
        <button type="button" class="btn btn-lg btn-primary fst-italic"><span>Exam Fees</span><div class="text-field"><input type="text" value="<?php echo $per."%"; ?>" size="1" ></div></button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>