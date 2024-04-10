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
  <div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
    <h4>Please Fill The Details.</h4>
  </div>
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
<form action="examprocess.php" method="post">
  <section class="dropdown">
    <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Name :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="Text" class="dop" name="name"></h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        
      </div>
    </div>
  </section> <section class="dropdown">
    <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Enrollment :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="number" class="dop" name="enrollment"></h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        
      </div>
    </div>
  </section>
  <section class="dropdown">
    <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>scheme :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="text" class="dop" name="scheme"></h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        
      </div>
    </div>
  </section>
  <section class="dropdown">
    <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Semester :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="text" class="dop" name="semester"></h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        
      </div>
    </div>
  </section>
  <section class="dropdown">
    <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Date :</h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4><input type="date" class="dop" name="date"></h4>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        </div>
        
      </div>
    </div>
  </section>

 
  
  <br>
  <br>
  <div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
    <br>
    
    <div>
      <input class="btn btn-primary" type="submit" value="Submit Detail" name="submit">
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