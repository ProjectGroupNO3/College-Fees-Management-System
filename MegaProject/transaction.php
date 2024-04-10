<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  <!---------------------------------------CSS-------------------------------------------------------->
  <style>
    .btn {
      margin: 20px;
      width: 170px;
      height: 40px;
      background-image: linear-gradient(rgb(239, 241, 242), rgb(255, 253, 254));
    }

    body{
   background-image: linear-gradient( to right, #83a4d4,#b6fbff);
  /* background-image: radial-gradient( circle 993px at 0.5% 50.5%,  rgba(137,171,245,0.37) 0%, rgba(245,247,252,1) 100.2% );*/
   background-color: #5ca0f2;
   background-image: linear-gradient(to left, #4a98f8 10%, #bed7e6 84%);
}

    .btn {
      height: 37px;
      width: 280px;
      background-color: white;
      background-image: linear-gradient(315deg, #ffffff 0%, #ffffff 74%)
      color: black;
    }

    .btn:hover {
      color: black;
    }
    .btn:not(:hover){
      color: black;
    }

    .dropdown {
      left: -15px;
    }


    .dop {
      height: 38px;
      width: 285px;

    }
  </style>
  <!-------------------------------COMPONENTS----------------------------------------------->

  <br>
<form action="process1.php" method="POST">
  <section class="dropdown">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Date Of Payment:</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="date" class="dop" name="dop"></h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Select Fees Type :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">

          <section class="dropdown">
            <div class="container">

              <div class="dropdown">
                <input class="btn btn-secondary dropdown-toggle " type="submit" id="dropdownMenuButton1" value="Select Fees Type" name="sft"
                  data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"  name="sft">
                  <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('store fees')">Store Fees</a></li>
                  <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('Exam Fees')">Exam Fees</a></li>
                  <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('Admission Fess')">Admission Fess</a></li>

                </ul>
              </div>
            </div>
        </div>
  </section>
  <script>
    function updateSelectedItem(item) {
      document.getElementById('dropdownMenuButton1').innerText = item;
    }
      function updateSelectedItem1(item1) {
        document.getElementById('dropdownMenuButton').innerText = item1;
      }
    
  </script>
  </div>
  </div>
  </div>
  </section>

  <BR>
  <section class="dropdown">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Transaction Id :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="number" name="tid"></h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Reference Number :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="number" name="refno"></h4>
        </div>
      </div>
    </div>
  </section>

  <BR>
  <section class="dropdown">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Enrollment No :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="number" name="enrollment"></h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Time :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="number" name="time"></h4>
        </div>
      </div>
    </div>
  </section>

  <BR>
    <section class="dropdown">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
            <h4>Amount :</h4>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
            <h4><input type="number" class="dop" name="amount"></h4>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
            <h4>Select Payment Type :</h4>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
  
            <section class="dropdown">
              <div class="container">
  
                <div class="dropdown">
                  <input class="btn btn-secondary dropdown-toggle " type="submit" id="dropdownMenuButton" name="spt" value="Select Payment Type"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    
                 
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('UPI')">UPI</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('Debit')">Debit</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('Netbanking')">Netbanking</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('To Phone Number')">To Phone Number</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem1('Credit')">Credit</a></li>
                  </ul>
                </div>
              </div>
          
    </section>
  
    </div>
    </div>
    </div>
    </section>
  
  <br>
  <br>
  <div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
    <br>
    <br>

    <br>
    <br>
    <br>
    <div>
      <input class="btn btn-primary" type="submit" value="Verify Payment" name="submit">
    </div>
  </div>
    </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>