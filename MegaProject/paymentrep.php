<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Report</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
<br>
<!-----------------------------------------------------------------payment report---------------------------------------------------->
  
<div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
    <h3>Payment Report</h3>
</div>
<br>

<!-----------------------------------------------------------------css---------------------------------------------------->
<style>
        #table1 {
            border: 2px solid black;
        }

        #table1 th,
        #table1 td {
            border: 1px solid black;
        }
        .btn11{
         height: 40px;
         width: 80px 
        }
    </style>
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
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('CM')">CM</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('ME')">ME</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('CE')">CE</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('EE')">EE</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('EJ')">EJ</a></li>
                  </ul>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 col-12 m-auto text-center">
           <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton1"data-bs-toggle="dropdown" aria-expanded="false">
                  Semester
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('Semester1')">Semester1</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('Semester2')">Semester2</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('Semester3')">Semester3</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('Semester4')">Semester4</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('Semester5')">Semester5</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('Semester6')">Semester6</a></li>
                  </ul>
        </div>
        <script>
    function updateSelectedItem(item) {
      document.getElementById('dropdownMenuButton2').innerText = item;
    }
      function updateSelectedItem1(item1) {
        document.getElementById('dropdownMenuButton1').innerText = item1;
      }
    
  </script>
</div>
    </div>
    
</section>
      
  
<!-------------------------------------------------------Table--------------------------------------------------------------->

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 m-auto text-center">
            <h5>Transaction Report</h5>
        </div>
    </div>
    
    <div class="container-fluid">
    <div class="row">
        <div class="col-12 m-auto text-center">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Transaction Tables
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#" onclick="showTable('cotransaction')">Cooperative Transaction Table</a></li>
                <li><a class="dropdown-item" href="#" onclick="showTable('admissiontransaction')">Admission Transaction Table</a></li>
                <li><a class="dropdown-item" href="#" onclick="showTable('examtransaction')">Exam Transaction Table</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-12" id="cotransactionTableContainer" style="display: none;">
            <!-- PHP code to fetch and display the cotransaction table -->
            <?php
            include 'establishDb.php';

            $query = "SELECT * FROM cotransaction";
            $result = $connection->query($query);

            if ($result) {
                echo '<table class="table table-bordered table-sm" id="cotransactionTable">
                        <thead>
                            <tr>
                                <th>Name No.</th>
                                <th>Date</th>
                                <th>Branch</th>
                                <th>Category </th>
                                <th>Co-operative Fees</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>';

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['Name'] . "</td>
                            <td>" . $row['Date'] . "</td>
                            <td>" . $row['Branch'] . "</td>
                            <td>" . $row['Category'] . "</td>
                            <td>500<br><button class='btn1 btn-primary' type='button'>Verify</button></td>
                            <td></td>
                        </tr>";
                }
                echo '</tbody>
                </table>';
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12" id="admissiontransactionTableContainer" style="display: none;">
            <!-- PHP code to fetch and display the admissiontransaction table -->
            <?php
            include 'establishDb.php';

            $query = "SELECT * FROM admissiontransaction";
            $result = $connection->query($query);

            if ($result) {
                echo '<table class="table table-bordered table-sm" id="admissiontransactionTable">
                        <thead>
                            <tr>
                                <th>Name No.</th>
                                <th>Date</th>
                                <th>Branch</th>
                                <th>Category </th>
                                <th>Admission Fees</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>';

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['Name1'] . "</td>
                            <td>" . $row['Date'] . "</td>
                            <td>" . $row['Branch'] . "</td>
                            <td>" . $row['Category'] . "</td>
                            <td>500<br><button class='btn1 btn-primary' type='button'>Verify</button></td>
                            <td></td>
                        </tr>";
                }
                echo '</tbody>
                </table>';
            }
            ?>
        </div>
    </div>
</div>


<div class="row">
        <div class="col-12" id="examtransactionTableContainer" style="display: none;">
            <!-- PHP code to fetch and display the admissiontransaction table -->
            <?php
            include 'establishDb.php';

            $query = "SELECT * FROM examtransaction";
            $result = $connection->query($query);

            if ($result) {
                echo '<table class="table table-bordered table-sm" id="admissiontransactionTable">
                        <thead>
                            <tr>
                                <th>Name No.</th>
                                <th>enrollment</th>
                                <th>semester </th>
                                <th>date</th>
                                <th>exam Fees</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>';

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['Name'] . "</td>
                            <td>" . $row['Enrollment'] . "</td>
                            <td>" . $row['Semester'] . "</td>
                            <td>" . $row['Date'] . "</td>
                            <td>500<br><button class='btn1 btn-primary' type='button'>Verify</button></td>
                            <td></td>
                        </tr>";
                }
                echo '</tbody>
                </table>';
            }
            ?>
        </div>
    </div>
</div>

<script>
   
    function showTable(tableName) {
        // Hide all table containers
        document.getElementById('cotransactionTableContainer').style.display = 'none';
        document.getElementById('admissiontransactionTableContainer').style.display = 'none';
        document.getElementById('examtransactionTableContainer').style.display = 'none'; 

        // Show the selected table container
        var selectedTableContainer = document.getElementById(tableName + 'TableContainer');
        selectedTableContainer.style.display = 'block';

        // Update the verification message based on the selected table container
        var verificationMessage = (tableName === 'cotransaction') ? 'Cooperative Fees is verified' : 
                                   (tableName === 'admissiontransaction') ? 'Admission Fees is verified' : 
                                   'Exam Fees is verified';

        // Get all buttons with the class 'btn1' in the selected table container
        var buttons = selectedTableContainer.querySelectorAll('.btn1');

        // Loop through each button
        buttons.forEach(function(button) {
            // Add click event listener to each button
            button.addEventListener('click', function() {
                // Get the parent row of the button
                var row = button.closest('tr');

                // Find the Remark cell of the same row
                var remarkCell = row.querySelector('td:nth-child(6)');

                // Append the text only if it's not already present
                if (!remarkCell.textContent.includes(verificationMessage)) {
                    // Construct the new text to be appended
                    var newText = verificationMessage;

                    // Append the new text
                    if (remarkCell.textContent.trim() !== "") {
                        newText = remarkCell.textContent + "<br>" + newText;
                    }

                    // Update the content of the Remark cell by appending the new text
                    remarkCell.innerHTML = newText;
                }
            });
        });

        // Show the remark column text on all three tables
        var allRemarkCells = document.querySelectorAll('#cotransactionTableContainer td:nth-child(6), #admissiontransactionTableContainer td:nth-child(6), #examtransactionTableContainer td:nth-child(6)');
        allRemarkCells.forEach(function(cell) {
            var text = cell.textContent.trim();
            if (text !== "") {
                cell.innerHTML = text + "<br>Paid";
            }
        });
    }

</script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>