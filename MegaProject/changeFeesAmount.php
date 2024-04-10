<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Change Fees Amount</title>
</head>

<body>


    <!------------------------------------------------------------Heading---------------------------------------------------------------------->

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-12 m-auto text-center">
            <img src="gpslogo.png" width="120px" height="120px">
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
            <h1 class="heading">Government Polytechnic Sakoli,Bhandara</h1>
        </div>
    </div>
    <hr>
    <!----------------------------------------------------------navigation bar----------------------------------------------------------------------------->
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
                        <a class="nav-link fst-italic fw-bold" href="studentInfo.php"><h5><b>Students</h5></b></a>
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



    <!-----------------------------------------------------------------Change fees amount---------------------------------------------------->

    <div class="col-sm-12 col-md-12 col-lg-12 col-12 col-12 m-auto text-center">
        <h3>Change Fees Amount</h3>
    </div>
    <br>
 
                <!------------------------------------------------------------Dropdown Buttons---------------------------------------------------------------------->
                <section class="buttons py-5 ">


                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-12 m-auto text-center">
                                <form action="changeFeesAmountDb.php" method="POST">
                                <input type="submit" name="examfees" class="drop btn btn-primary" value="Exam Fees">
                                <input type="text" name="examFees" placeholder="Enter amount">
                            </div>
                            </form>
                            <div class="col-sm-12 col-md-4 col-lg-4 col-12 m-auto text-center">

                                <div class="dropdown">
                                <form action="changeFeesAmountDb.php" method="POST">
                                <input type="submit" name="addFees" class="drop btn btn-primary" value="Admission Fees">

                                    <input type="text" name="addmissionfees" placeholder="Enter amount">

                                </div>
                                </form>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 col-12 m-auto text-center">
                            <form action="changeFeesAmountDb.php" method="POST">
                            <input type="submit" name="coFees" class="drop btn btn-primary" value="Co-Operative Store Fees">
                                <input type="text" name="cofees" placeholder="Enter amount">
                            </div>
                            </form>
                        </div>

                </section>



                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></script>
</body>

</html>