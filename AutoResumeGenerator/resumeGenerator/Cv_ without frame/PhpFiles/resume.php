<?php
include("../header.php");

?>

<html>
    <head>
        <title>My Resume</title>
        <style>
            .top-head{
                margin-top: 30px;
                width: 90%;
                height: 120px;
                margin-left:5%;
                background-color: cadetblue;
            }
            .blue-tag{
                width: 90%;
                margin-left:5%;
                height: 40px;
                background-color: chocolate;
            }
           
            .info-div{
                width: 65%;
                height: 120px;
                float: right;
            }
            .info-div h1, h5{
                color: white;
                margin-left: 50px;
            }
            .main-body{
                width: 90%;
                height: 1000px;
                margin-left:5%;
                background:white;

            }
            .side-info{
                width: 35%;
                height: 1000px;
                border-right: 3px solid black;
                float: left;
            }
            .main-info{
                width: 63%;
                height: 1000px;
                float: right;
            }
            .side-info h1{
                text-align: center;
                color: rgb(73, 73, 148);
                margin-top: 20px;
               
            }
            .side-info li{
                margin-left: 40px;
                margin-top: 10px;
            }
            .main-info h1{
                color: rgb(73, 73, 148);
           
                margin-left:200px;

            }
            .main-info h5{
              
                margin-right:100px;
                color: black;
                margin-left:100px;

            }
            .main-info h3, h4{
              
                margin-left:100px;

            }
            .main-info p{
               
                margin-left:100px;

            }
        </style>
    </head>
    <body style="background:black;" id="body">
        <div class="top-head">
            <div class="info-div">
                <h1 style="letter-spacing: 3px;"><?php echo $_POST["first_name"]; ?> <?php echo $_POST['last_name'];?></h1>
                <h5 style="letter-spacing: 2px;"> <?php echo $_POST["sub_heading"]; ?></h5>
            </div>
        </div>
        <div class="blue-tag">
        </div>
        <div class="main-body">
            <div class="side-info">
                <h1>Bio</h1>
                <h5 style="color: black; margin-right: 20px;"> <?php echo $_POST["bio"];?> </h5>
                <h1>Contact Info</h1>
                <ul>
                    <li>Email: <?php echo $_POST["email"]; ?></li>
                    <li> Cell No: <?php echo $_POST["contact"]; ?></li>
                    <li> Linked: <a href="<?php echo $_POST["linked"];?> " style="color: black;"><?php echo $_POST["first_name"]; ?> <?php echo $_POST['last_name'];?></a></li>
                    <li> Facebook <a href="<?php echo $_POST["facebook"];?>" style="color: black;"><?php echo $_POST["first_name"]; ?> <?php echo $_POST['last_name'];?></a></li>
                </ul>
                <h1> Skills</h1>
                <div style="float: left; width: 50%;text-align: center; height: 50px;"><h4><?php echo $_POST["skill1"];?></h4>
                </div>
                <div style="float: right; width: 50%; height: 50px;">
                    <div style="width: 150px; height: 10px; background-color: blue;float: left; margin-top: 25px;"></div>
                    <div style="width: 50px; height: 10px; background-color: chocolate; float: left;margin-top: 25px;"></div>
                </div>
                <div style="float: left; width: 50%;text-align: center; height: 50px;"><h4><?php echo $_POST["skill2"];?></h4>
                </div>
                <div style="float: right; width: 50%; height: 50px;">
                    <div style="width: 150px; height: 10px; background-color: blue;float: left; margin-top: 25px;"></div>
                    <div style="width: 50px; height: 10px; background-color: chocolate; float: left;margin-top: 25px;"></div>
                </div>
                <div style="float: left; width: 50%;text-align: center; height: 50px;"><h4><?php echo $_POST["skill3"];?></h4>
                </div>
                <div style="float: right; width: 50%; height: 50px;">
                    <div style="width: 120px; height: 10px; background-color: blue;float: left; margin-top: 25px;"></div>
                    <div style="width: 80px; height: 10px; background-color: chocolate; float: left;margin-top: 25px;"></div>
                </div>
                <div style="float: left; width: 50%;text-align: center; height: 50px;"><h4><?php echo $_POST["skill4"];?>/h4>
                </div>
                <div style="float: right; width: 50%; height: 50px;">
                    <div style="width: 180px; height: 10px; background-color: blue;float: left; margin-top: 25px;"></div>
                    <div style="width: 20px; height: 10px; background-color: chocolate; float: left;margin-top: 25px;"></div>
                </div>
                <h1>Courses</h1>
                <div style="width: 50%; float: left;">
                    <ul>
                        <li><?php echo $_POST["course1"];?></li>
                        <li><?php echo $_POST["course1"];?></li>
                    </ul>
                </div>
                <div style="width: 50%;float: right;">
                    <ul>
                        <li><?php echo $_POST["course1"];?></li>
                        <li><?php echo $_POST["course1"];?></li>

                    </ul>
                </div>
            </div>
            <div class="main-info">
                
                <h1><u>Work Experience</u></h1>
                <h3>ORGANIZATION: &nbsp;&nbsp; <?php echo $_POST["company1"];?></h3>
                <h4>Position:<?php echo $_POST["position1"];?></h4>
                <p><b><?php echo $_POST["starting1"];?> to <?php echo $_POST["ending1"];?></b></p>
               
                <h3>ORGANIZATION: &nbsp;&nbsp; <?php echo $_POST["company2"];?></h3>
                <h4>Position: <?php echo $_POST["position2"];?></h4>
                <p><b><?php echo $_POST["starting2"];?>to <?php echo $_POST["ending2"];?></b></p>
             
                <h3>ORGANIZATION: &nbsp;&nbsp; <?php echo $_POST["company3"];?></h3>
                <h4>Position: <?php echo $_POST["position3"];?></h4>
                <p><b><?php echo $_POST["starting3"];?> to <?php echo $_POST["ending3"];?></b></p>
                <h1><u>Education </u></h1>
                <h3><?php echo $_POST["university"];?></h3>
                <pre><h4><?php echo $_POST["Major"];?>                                 <?php echo $_POST["degree"];?></h4></pre>
                <pre><p><b>starting date: <?php echo $_POST["university_starting"];?>to <?php echo $_POST["university_ending"];?>  </pre>
            </div>
        </div>
    </body>
    <?php include("../footer.php");?>
</html>