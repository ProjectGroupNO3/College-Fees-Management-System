<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
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

<!-------------------------------------------------------username pass---------------------------------------------------->

<br><br>
<form action="LoginValidate.php" method="POST">

<section class="dropdown">
  <div class="container">
      <div class="row">
      
      
          <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
            
      </div>

      <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
        
  </div>

  <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
    <h5>Username:</h5>
</div>
      

      <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
        <input type="text" name="uname" id="username">
</div>

<div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
  
</div>
<div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
  
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
    <h5>Password:</h5>
</div>
      

      <div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
        <input type="password" name="pwd" id="password">
</div>

<div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
  
</div>
<div class="col-sm-12 col-md-2 col-lg-2 col-12 m-auto text-center">
  
</div>

  </div>
</section>

<br><br>

<!---------------------------------------------------------button-------------------------------------------->



<section class="dropdown">
      <div class="row">
<div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
  
</div>
<div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
  <a href="index.php">
  <input type="submit" class="btn btn-secondary" name="adminbtn" value="Admin Login">
  </a>
</div>

<div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
  <a href="studash.php">
  <button type="button" class="btn btn-secondary" name="stubtn">Student Login</button>
</a>
</div>
<div class="col-sm-12 col-md-3 col-lg-3 col-12 m-auto text-center">
  
</div>
  </div>
</section>

<br><br><br>
<section class="dropdown">
  <div class="row">

<div class="col-sm-12 col-md-12 col-lg-12 col-12 m-auto text-center">
<a href="register.php">
  <button type="button" class="btn btn-secondary">Sign In</button>
</div>
</a>
</div>
</section>

</form>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>