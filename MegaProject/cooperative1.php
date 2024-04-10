<html>
<head>
    <title>Co-Operative Store </title>
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

    .co-operative {
        font-size: 20px;
        font-weight: normal;
        position: absolute;
        top: 0;
        left: 230px;
        padding: 100px;
    }

    .recNo {
        position: absolute;
        top: 30px;
        left: 450px;
        margin: 140px;
        width:9%;
    }

    .rectxt {
        position: absolute;
        top:20px;
        left: 360px;
        margin: 140px;
    }

    .date {
        position: absolute;
        top: 10px;
        left: 350px;
        /* Set the distance between the image and heading */
        margin: 190px;
        width:14%;
    }

    .dtText {
        position: absolute;
        top: -2px;
        left: 310px;
        /* Set the distance between the image and heading */
        margin: 190px;
    }

    input[type="text"] {
        border: none;
        border-bottom: 1px solid black;
    }

    .stuNameTxt {
        position: absolute;
        top: 50px;
        left: -130px;
        /* Set the distance between the image and heading */
        margin: 185px;
    }

    .stuName {
        position: absolute;
        top: 65px;
        left: -80px;
        /* Set the distance between the image and heading */
        margin: 185px;
        width: 580px;
    }

    .branchTxt{
        position: absolute;
        top: 80px;
        left: -130px;
        /* Set the distance between the image and heading */
        margin: 185px;
    }

    .branchName{
        position: absolute;
        top: 95px;
        left:-69px;
        width: 570px;
        /* Set the distance between the image and heading */
        margin: 185px;

    }    

    .catTxt{
        position: absolute;
        top: 110px;
        left: -130px;
        /* Set the distance between the image and heading */
        margin: 185px;
    }

    .categoryName{
        position: absolute;
        top: 120px;
        left: -65px;
        width: 565px;
        /* Set the distance between the image and heading */
        margin: 185px;
    }

    .feetxt{

        position: absolute;
        top: 180px;
        left:-130px;
        /* Set the distance between the image and heading */
        margin: 185px;
    }

    .feename{
        position: absolute;
        top: 195px;
        left:-70px;
        width: 130px;
        /* Set the distance between the image and heading */
        margin: 185px;

    }

    .sigTxt{
        position: absolute;
        top: 180px;
        left: 195px;
        /* Set the distance between the image and heading */
        margin: 185px;
    }

    .signatureBox{

        position: absolute;
        top: 192px;
        left: 270px;
        /* Set the distance between the image and heading */
        margin: 185px;
    }

    .button {
      position: absolute;
      top: 25px;
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
        <h2 class="co-operative">Co-Operative Store</h2>

        <p class="rectxt">Receipt No:</p>
        <input type="text" id="sNo" class="recNo">

        <p class="dtText">Date:</p>
        <input type="text" id="dt" class="date">


        <p class="stuNameTxt">Name:</p>
        <input type="text" id="nText" class="stuName">


        <p class="branchTxt">Branch:</p>
        <input type="text" id="brText" class="branchName">

        <p class="catTxt">Category:</p>
        <input type="text" id="ctTxt" class="categoryName">

        <p class="feetxt">Amount:</p>
        <input type="text" id="fpfText" class="feename">

        <p class="sigTxt">Signature:</p>
        <input type="text" id="sigText" class="signatureBox">

        <button id="printBtn" class="button" >Print</button>
     
    </div>

</body>
</html>