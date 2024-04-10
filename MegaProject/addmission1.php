<html>
  <head>
    <title>Admission Receipt</title>
  </head>
  <style>
    .container {
      width: 700px;
      height: 360px;
      border: 2px solid black;
      padding: 25px;
      margin: 10px;
      
    }

    .gpsakoli {
      position: absolute;
      top: 0;
      left: 200px;
      padding: 20px;
      letter-spacing: 3px;
    }

    .bhandara {
      position: absolute;
      top: 0;
      left: 285px;
      padding: 50px;
      letter-spacing: 3px;
    }
    .hrLine {
      border: 1px solid black;
      width: 700px;
      margin-top: 65px;
    }

    .receipt {
      font-size: 20px;
      font-weight: normal;
      position: absolute;
      top:0;
      left: 200px;
      padding: 90px;
     
    }

    .recNo {
      position: absolute;
      top: 0;
      left: 420px;
      margin: 150px;
      width: 120px;
      
      
    }

    .recNoText {
      position: absolute;
      top: 0;
      left: 340px;
      margin: 140px;
    }

    .date {
      position: absolute;
      top: -20;
      left: 330px;
      /* Set the distance between the image and heading */
      margin: 200px;
      width: 155px;
    }

    .dtText {
      position: absolute;
      top: -20;
      left: 290px;
      /* Set the distance between the image and heading */
      margin: 190px;
    }

    .applicationId {
      position: absolute;
      width: 155px;
      top: 110px;
      left: 245px;
      /* Set the distance between the image and heading */
      margin: 100px;
    }

    .appIdText {
      position: absolute;
      top: 100px;
      left: 140px;
      /* Set the distance between the image and heading */
      margin: 100px;
    }

    input[type="text"] {
      border: none;
      border-bottom: 1px solid black;
    }

    .stuName {
      position: absolute;
      top: 70px;
      left: -80px;
      /* Set the distance between the image and heading */
      margin: 175px;
      width: 590px;
    }

    .stuNameTxt {
      position: absolute;
      top: 71px;
      left: -130px;
      /* Set the distance between the image and heading */
      margin: 163px;
    }

    .deptName {
      position: absolute;
      top: 100px;
      left: -35px;
      /* Set the distance between the image and heading */
      margin: 175px;
      width: 545px;
    }

    
    .deptTxt {
      position: absolute;
      top: 101px;
      left: -130px;
      /* Set the distance between the image and heading */
      margin: 163px;
    }

    .branchName {
      position: absolute;
      top: 130px;
      left: -65px;
      width: 220px;
      /* Set the distance between the image and heading */
      margin: 175px;
    }
    
    .branchTxt {
      position: absolute;
      top: 131px;
      left: -130px;
      /* Set the distance between the image and heading */
      margin: 163px;
    }

    
    .categoryName {
      position: absolute;
      top: 170px;
      left: -55px;
      width: 580px;
      /* Set the distance between the image and heading */
      margin: 163px;
    }


    .catTxt {
      position: absolute;
      top: 150px;
      left: -140px;
      /* Set the distance between the image and heading */
      margin: 175px;
    }

    .fpfTxt {
      position: absolute;
      top: 133px;
      left: 190px;
      /* Set the distance between the image and heading */
      margin: 163px;
      
    }

    .feesPaidForBox {
      position: absolute;
      top: 133px;
      left: 290px;
      /* Set the distance between the image and heading */
      margin: 175px;
      width:220px;
    }

    .fpTxt {
      position: absolute;
      top: 200px;
      left: -130px;
      /* Set the distance between the image and heading */
      margin: 165px;
    }
    .feesPaidBox {
      position: absolute;
      top: 215px;
      left: -60px;
      width: 150px;
      /* Set the distance between the image and heading */
      margin: 165px;
      border: 1px solid black;
    
    }

    .sigTxt {
      position: absolute;
      top: 200px;
      left: 135px;
      /* Set the distance between the image and heading */
      margin: 165px;
    }

    .signatureBox {
      position: absolute;
      top: 210px;
      left: 210px;
      /* Set the distance between the image and heading */
      margin: 165px;
    }

    .stmpTxt {
      position: absolute;
      top: 200px;
      left: 460px;
      /* Set the distance between the image and heading */
      margin: 165px;
    }

    .button {
      position: absolute;
      top: 15px;
      left: 697px;
      width: 4%;
      background-color: rgb(179, 182, 182);
      border-radius: 10px;
    }
  </style>

  <body>
    <div class="container">
      <h2 class="gpsakoli">Government Polytechnic Sakoli,</h2>
      <h2 class="bhandara">Bhandara</h2>
      <hr class="hrLine" />
      <h2 class="receipt">Addmission Receipt</h2>

      <p class="recNoText">Receipt No.</p>
      <input type="text" id="sNo" class="recNo" />

      <p class="dtText">Date:</p>
      <input type="text" id="dt" class="date" />

      <p class="appIdText">Application Id:</p>
      <input type="text" id="atxt" class="applicationId" />

      <p class="stuNameTxt">Name:</p>
      <input type="text" id="nText" class="stuName" />

      <p class="deptTxt">Department:</p>
      <input type="text" id="dText" class="deptName" />

      <p class="branchTxt">Branch:</p>
      <input type="text" id="brText" class="branchName" />

      <p class="catTxt">Category:</p>
      <input type="text" id="ctTxt" class="categoryName" />

      <p class="fpfTxt">Fees Paid For:</p>
      <input type="text" id="fpfText" class="feesPaidForBox" />

      <p class="fpTxt">Amount:</p>
      <input type="number" id="fpText" class="feesPaidBox" />

      <p class="sigTxt">Signature:</p>
      <input type="text" id="sigText" class="signatureBox" />

      <p class="stmpTxt">Stamp:</p>
      
      <button id="printBtn" class="button" >Print</button>
    

  </div>
  </body>
</html>