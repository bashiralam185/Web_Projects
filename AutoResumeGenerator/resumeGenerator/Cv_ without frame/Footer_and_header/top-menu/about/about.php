<?php include("../../../header.php");?>

<html>
    <head>
        <style>
            body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            }
            *, *:before, *:after {
            box-sizing: inherit;
            }

            .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
            }

            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
            }

            .About-section {
            padding: 50px;
            text-align: center;
            background-color: black;
            height:200px;
            color: white;
            }

            .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            }

            .button:hover {
            background-color: green;
            }
            .row{
                height:600px;
            }

        </style>
    </head>
    <body>
        <div class="About-section">
            <h1>About Us Page</h1>
            <p>We are team of three people.</p>
            <p>WE have created this site for our final web-technologies project. we hope you will like our idea</p>
        </div>
          
        <h2 style="text-align:center" >Our Team</h2>
        <div class="row">
            <div class="column" style="width:400px; margin-left:40px;text-align:center;">
              <div class="card">
                <img src="bashir.jpg" alt="bashir" style="width:53%; ">
                <div class="container">
                  <h2>Bashir Alam</h2>
                  <p class="title">Student at the UCA</p>
                  <p>Major subject: Computer Science</p>
                  <p>bashir.alam_2023@ucentralasia.org</p>
                  <p><button class="button">Contact</button></p>
                </div>
              </div>
            </div>
            <div class="column" style="width:400px; margin-left:40px;text-align:center;">
              <div class="card">
                <img src="aqeel.jpg" alt="Aqeel" style="width:60%; ">
                <div class="container">
                  <h2>Aqeel Ahmad</h2>
                  <p class="title">Student at UCA</p>
                  <p>Major Subject: Computer Science</p>
                  <p>aqeel.ahmad_2023@ucentralasia.org</p>
                  <p><button class="button">Contact</button></p>
                </div>
              </div>
            </div>
          
            <div class="column" style="width:400px; margin-left:40px; text-align:center;'>
              <div class="card">
                <img src="arfan.jpg" alt="Arfan" style="width:70%; margin-left: 40px;">
                <div class="container">
                  <h2>Arfan shah</h2>
                  <p class="title">Student at UCA</p>
                  <p>Major subjet: Computer Science.</p>
                  <p>Arfan.shah_2023@ucentralasia.org</p>
                  <p><button class="button">Contact</button></p>
                </div>
              </div>
            </div>
          </div>
    </body>
    <?php include("../../../footer.php");?>
</html>