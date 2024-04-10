<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Report</title>
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
<!----------------------------------------------------------navigation bar----------------------------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid" >
      
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
          
      </div>
    </div>
  </nav>
<br>
<!-----------------------------------------------------------------payment report---------------------------------------------------->
  
<div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
    <h3 class="mt-4">Student Information Page</h3>
</div>
<br>
<!-------------------------------------------------------------------Dropdown-------------------------------------------------->

<section class="dropdown">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-12 m-auto text-center">
                <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Branch
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <li><a class="dropdown-item" href="?branch=all"><h6>All</h6></a></li>
                    <li><a class="dropdown-item" href="?branch=CM" onclick="updateSelectedItem('CM')">CM</a></li>
                    <li><a class="dropdown-item" href="?branch=ME" onclick="updateSelectedItem('ME')">ME</a></li>
                    <li><a class="dropdown-item" href="?branch=CE" onclick="updateSelectedItem('CE')">CE</a></li>
                    <li><a class="dropdown-item" href="?branch=EE" onclick="updateSelectedItem('EE')">EE</a></li>
                    <li><a class="dropdown-item" href="?branch=EJ" onclick="updateSelectedItem('EJ')">EJ</a></li>
                  </ul>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 col-12 m-auto text-center">
           <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton1"data-bs-toggle="dropdown" aria-expanded="false">
                  Semester
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="?semester=all"><h6>All</h6></a></li>
                    <li><a class="dropdown-item" href="?semester=1" onclick="updateSelectedItem1('Semester1')">Semester1</a></li>
                    <li><a class="dropdown-item" href="?semester=2" onclick="updateSelectedItem1('Semester2')">Semester2</a></li>
                    <li><a class="dropdown-item" href="?semester=3" onclick="updateSelectedItem1('Semester3')">Semester3</a></li>
                    <li><a class="dropdown-item" href="?semester=4" onclick="updateSelectedItem1('Semester4')">Semester4</a></li>
                    <li><a class="dropdown-item" href="?semester=5" onclick="updateSelectedItem1('Semester5')">Semester5</a></li>
                    <li><a class="dropdown-item" href="?semester=6" onclick="updateSelectedItem1('Semester6')">Semester6</a></li>
                  </ul>
        </div>
        <script>
  // Function to update the selected branch dropdown text
  function updateSelectedItem(item) {
    document.getElementById('dropdownMenuButton2').innerText = item;
  }
  
  // Function to update the selected semester dropdown text
  function updateSelectedItem1(item1) {
    document.getElementById('dropdownMenuButton1').innerText = item1;
  }

  // Add an event listener to each dropdown item to update the selected item
  document.addEventListener("DOMContentLoaded", function() {
    var dropdownItems1 = document.querySelectorAll('.dropdown-menu li a');
    dropdownItems1.forEach(function(item) {
      item.addEventListener('click', function() {
        updateSelectedItem(this.textContent);
      });
    });

    var dropdownItems2 = document.querySelectorAll('.dropdown-menu li a');
    dropdownItems2.forEach(function(item) {
      item.addEventListener('click', function() {
        updateSelectedItem1(this.textContent);
      });
    });
  });
</script>

</div>
    </div>
    
</section>

<!-------------------------------------------------------Table--------------------------------------------------------------->
<br><br><br><br>
<br><br>

<div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
    <h5>Total Student Report</h5>
</div>
<br>




<table class="table table-bordered table-sm" id="table1">
    <thead>
        <tr>
            <th>Enrollment No.</th>
            <th>Name</th>
            <th>Branch</th>
            <th>Semester</th>
            <th >Authorized</th>
            <th>Unauthorized</th>
            
        </tr>
    </thead>
    

    <tbody>
    <?php
    include 'establishDb.php';

    //----------------------Branch Filter--------------------------------------------------------

    if (isset($_GET['branch'])) {
        $selectedBranch = $_GET['branch'];
    
        if ($selectedBranch == 'all') {
            // Query for fetching overall information
            $branchFilter = ""; // No branch filter
        } else {
            // Use prepared statement to prevent SQL injection
            $branchFilter = " AND Branch = ?";
        }
    } else {
        // Default query without branch filter
        $branchFilter = "";
    }

    //-------------------Semester filter code------------------------------------------------------------

    if (isset($_GET['semester'])) {
        $selectedSemester = $_GET['semester'];
    
        if ($selectedSemester == 'all') {
            // Query for fetching overall information
            $semesterFilter = ""; // No semester filter
        } else {
            // Use prepared statement to prevent SQL injection
            $semesterFilter = " AND Semester = ?";
        }
    } else {
        // Default query without semester filter
        $semesterFilter = "";
    } 

    //----------------------------------------Data Fetching Code------------------------------------------------------------
    $query = "SELECT * FROM student WHERE 1=1" . $branchFilter . $semesterFilter;

    if ($branchFilter) {
        $stmt = $connection->prepare($query);
        $stmt->bind_param('s', $selectedBranch);
    } elseif ($semesterFilter) {
        $stmt = $connection->prepare($query);
        $stmt->bind_param('s', $selectedSemester);
    }
    
    if (isset($stmt)) {
        $stmt->execute();
        $result = $stmt->get_result();
    } else {
        $result = $connection->query($query);
    }
    


    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['Enrollment'] . "</td>
                    <td>" . $row['FirstName'] . "</td>
                    <td>" . $row['Branch'] . "</td>
                    <td>" . $row['Semester'] . "<br></td>
                    <td><br>
                        <button class='btn1 btn-primary btn-authorize' type='submit'>Authorized</button>
                        <img class='authorization-image' src='wrong.png' width='30' height='25'><br>
                    </td>
                    <td><br>
                        <form action='delete.php' method='POST'>
                            <input type='hidden' name='enrollment' value='" . $row['Enrollment'] . "'>
                            <input type='submit' name='delete' class='btn1 btn-primary' value='Remove Student'>
                        </form>
                        <br>
                    </td>
                </tr>";
        }
    }
    ?>
   
<script>
    //---------------------------Authorize Button logic-----------------------------------------------------------

        document.addEventListener("DOMContentLoaded", function() {
            // Add event listeners to all buttons with the class "btn-authorize"
            var authorizeButtons = document.querySelectorAll('.btn-authorize');
            
            authorizeButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Find the corresponding image element and change its source
                    var imageElement = this.closest('tr').querySelector('.authorization-image');
                    imageElement.src = 'right3.png';
                });
            });
        });

       
    

    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>