<html>
<head>
    <title>Exam Form </title>
</head>
<style>
    .container {
        width: 700px;
        height: 360px;
        border: 2px solid black;
        padding: 20px;
        margin: 20px;

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
    .hrLine{
        border: 1px solid black;
        width: 700px;
        margin-top: 65px;
        
    }

    .receipt {
        font-size: 20px;
        font-weight: normal;
        position: absolute;
        top: 0;
        left: 235px;
        padding: 100px;
    }

    .appname {
        position: absolute;
        top: 0;
        left: 110px;
        margin: 150px;
    }

    .date {
        position: absolute;
        top: -10;
        left: 320px;
        margin: 200px;
    }

    .dtText {
        position: absolute;
        top: -10;
        left: 270px;
        margin: 200px;
    }
    

    input[type="text"] {
        border: none;
        border-bottom: 1px solid black;
    }

    .enrolltxt {
        position: absolute;
        top: 50px;
        left: 100px;
        margin: 150px;
    }

    .enrollId {
        position: absolute;
        width: 150px;
        top: 92px;
        left: 240px;
        margin: 120px;
    }

    .nameTxt {
        position: absolute;
        top: 60px;
        left: -130px;
        margin: 185px;
    }

    .name {
        position: absolute;
        top: 72px;
        left: -75px;
        margin: 185px;
        width: 550px;
    }

    .schemetxt {
        position: absolute;
        top: 95px;
        left: -130px;
        margin: 185px;

    }

    .schemename {

        position: absolute;
        top: 108px;
        left: -65px;
        margin: 185px;
        width: 540px;
    }

    .seText{
        position: absolute;
        top: 130px;
        left: -130px;
        margin: 185px;
    }

    .semester{
        position: absolute;
        top: 142px;
        left: -67px;
        margin: 185px;
        width: 550px;

    }  
    
    .fpfTxt {
      position: absolute;
      top: 185px;
      left: -110px;
      /* Set the distance between the image and heading */
      margin: 163px;
      
    }

    .feesPaidForBox {
      position: absolute;
      top: 185px;
      left:-15px;
      /* Set the distance between the image and heading */
      margin: 175px;
      width:515px;
    }

    .dtText{
        position: absolute;
        top: 190px;
        left: -130px;
        margin: 185px;
    }

    .date{
        position: absolute;
        top: 205px;
        left: -80px;
        margin: 185px;
    }

    

    .sigTxt{
        position: absolute;
        top: 195px;
        left: 320px;
        margin: 185px;
    }

    

    .stmpTxt{
        position: absolute;
        top: 195px;
        left: 430px;
        margin: 185px;
    }

    .button {
      position: absolute;
      top: 20px;
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
        <hr class="hrLine">
        <h2 class="receipt">Exam Form</h2>


        <p class="enrolltxt">Enrollment No.:</p>
        <input type="text" id="atxt" class="enrollId">

        <p class="nameTxt">Name:</p>
        <input type="text" id="nText" class="name">

        <p class="schemetxt">Scheme:</p>
        <input type="text" id="dText" class="schemename">

        <p class="seText">Semester:</p>
        <input type="text" id="brText" class="semester">

                 
      <p class="fpfTxt">Fees Paid For:</p>
      <input type="text" id="fpfText" class="feesPaidForBox" />
    

        <p class="dtText">Date:</p>
        <input type="text" id="ctTxt" class="date">

        <p class="sigTxt">Signature</p>

        <p class="stmpTxt">Stamp</p>
        
        <button id="printBtn" class="button" >Print</button>

    

    </div>


</body>
</html>