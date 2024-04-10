



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<!------------------------------------------------------------heading------------------------------------------------------------------->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-12 m-auto text-center">
        <img src="gpslogo.png" width="120px" height="120px">
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
        <h1>Government Polytechnic Sakoli,Bhandara</h1>
    </div>
</div>
<hr>
<!----------------------------------------------------------page name---------------------------------------------------->

<div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
    <h3>Student Dashboard</h3>
</div>
<br>



<div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">


<h3>Hello Student</h3>
    
</div>

<br>
<!------------------------------------------------------------Dropdown------------------------------------------------>
<section class="dropdown">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-12 m-auto text-center">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Admission Fees
              </a>
            
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="admissiontransaction.php"><h6>OPEN</h6></a></li>
                <li><a class="dropdown-item" href="admissiontransaction.php"><h6>OBC</h6></a></li>
                <li><a class="dropdown-item" href="admissiontransaction.php"><h6>SC/ST</h6></a></li>
              </ul>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-12 m-auto text-center">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Exam Fees
              </a>
            
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="examtransaction.php"><h6>Semester 1</h6></a></li>
                <li><a class="dropdown-item" href="examtransaction.php"><h6>Semester 2</h6></a></li>
                <li><a class="dropdown-item" href="examtransaction.php"><h6>Semester 3</h6></a></li>
                <li><a class="dropdown-item" href="examtransaction.php"><h6>Semester 4</h6></a></li>
                <li><a class="dropdown-item" href="examtransaction.php"><h6>Semester 5</h6></a></li>
                <li><a class="dropdown-item" href="examtransaction.php"><h6>Semester 6</h6></a></li>
              </ul>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-12 m-auto text-center">
           <a href="cooperativetransaction.php"> <button type="button" class="btn btn-secondary">Co-Operative Fees</button></a>
        </div>
</div>
    </div>
</section>
<!-----------------------------------------------------------Table--------------------------------------------------->

<table class="table table-bordered table-sm" id="table1">
    <thead>
        <tr>
            <th>Fees Name</th>
            <th>Status</th>
            
        </tr>
    </thead>
    

    <tbody>
    <?php
include 'establishDb.php';
$query = "SELECT * FROM studash";
$result = $connection->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['feesname'] . "</td>
                <td>";

        // Check if the status is 'paid'
        if ($row['stat'] == 'paid') {
            echo '<img src="right3.png" alt="Paid" width="30" height="30">';
        } else {
          echo '<img src="wrong.png" alt="Paid" width="30" height="30">';
        }

        echo "</td>
            </tr>";
    }
}
?>

<!------------------------------------------------------------logout------------------------------------------------>
<br>
<br><br>

<div class="col-sm-12 col-md-12 col-lg-12 col-12 m-auto text-center">


<div class="col-sm-12 col-md-12 col-lg-12 col-12 m-auto text-center">
<form method="post">
<a href="login.php"><button type="button" class="btn btn-secondary"><h6>Logout</h6></button></a>
</form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>