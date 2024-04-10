<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
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
<!---------------------------------------CSS-------------------------------------------------------->
<style >
  
  .dob{
    height: 38px;
    width: 285px;
  
  }
  .btn{
    margin: 20px;
    width: 170px;
    height: 40px;
    background-image: linear-gradient(rgb(51, 154, 183),rgb(58, 177, 227));   
}

body{
  background-image: linear-gradient( to right, #83a4d4,#b6fbff);
  /* background-image: radial-gradient( circle 993px at 0.5% 50.5%,  rgba(137,171,245,0.37) 0%, rgba(245,247,252,1) 100.2% );*/
   background-color: #5ca0f2;
   background-image: linear-gradient(to left, #4a98f8 10%, #bed7e6 84%);
}
.nav-link{
    background-image: linear-gradient(rgb(94, 91, 91),rgb(202, 194, 194));   
    
}

.btn {
  height: 37px;
  width: 280px;
  background-color: white;
  background-image: linear-gradient(315deg, #ffffff 0%, #ffffff 74%);
  color: black;
}
.btn:hover{
  color: black;
}

.dropdown{
  left: -15px;
}
.but:hover{
  color: black;
}


  </style>
  <!-------------------------------COMPONENTS----------------------------------------------->

<br>
<form action="process.php" method="POST">
<section class="dropdown">
  <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>First Name :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4><input type="text" name="fname"></h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4>Middle Name :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4><input type="text" name="mname"></h4>
      </div>
</div>
  </div>
</section>




<section class="dropdown">
  <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Last Name :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4><input type="text" name="lname"></h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4>Mother Name :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4><input type="text" name="momname"></h4>
      </div>
</div>
  </div>
</section>
  

<section class="dropdown">
  <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>DOB :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h2><input type="date" class="dob" name="dob"></h2>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4>Gender :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" name="gen1">
          <h4><label class="form-check-label" for="inlineRadio1">Male</label></h4>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" name="gen1">
          <h4><label class="form-check-label" for="inlineRadio2">Female</label></h4>
        </div>
      </div>
      </div>
  </div>
</section>


<section class="dropdown">
  <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Category :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4><input type="text" name="cat"></h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4>Branch :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        
        <section class="dropdown" >
          <div class="container">
              
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"  aria-expanded="false" >
                    Select Branch
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('CM')">CM</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('ME')">ME</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('CE')">CE</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('EE')">EE</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateSelectedItem('EJ')">EJ</a></li>
                  </ul>
                </div>
              </div>
          </div>
        </section>
        
        <script>
          function updateSelectedItem(item) {
            document.getElementById('dropdownMenuButton1').innerText = item;
          }
        </script>
      </div>
</div>
  </div>
</section>



<section class="dropdown">
  <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Email Id :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4><input type="text" name="eid"></h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4>Phone No :</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4><input type="text" name="pno"></h4>
      </div>
</div>
  </div>
</section>




<section class="dropdown">
  <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
          <h4>Username:</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4><input type="text" name="username"></h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4>Password:</h4>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
        <h4><input type="password" name="password"></h4>
      </div>
      
</div>
  </div>
</section>
<br>

<section class="dropdown">
  <div class="container">
      <div class="row">
      
         <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
          
      </div>
         <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
      </div>
          <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
            <h4>Address :</h4>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
          <h4><input type="textarea" name="add"></h4>
      </div>
        <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
          
      </div>
        <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
  
      </div>

      
</div>
  </div>
</section>



<div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div>
  <input type="submit" class="btn btn-primary" name="submit" value="Register" >
  </div>
</div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>