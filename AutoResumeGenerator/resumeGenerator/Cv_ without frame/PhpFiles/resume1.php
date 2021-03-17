<?php include("../header.php");?>


<html>
    <head>
        <title>My resume</title>
        <style>
            .top-head{
    width: auto;
    height: 157px;
    margin-top: 30px;
    /* background-color: hotpink; */
}
.side-items{
    width: 35%;
    height: 170px;
    float: left;
    /* background-color: indigo; */
}
.main-items{
    width: 65%;
    height: 170px;
    float: right;
    background-color: rgb(30, 102, 145);
}
.simple-div{
    width: auto;
    height: 30px;
    background-color: rgb(30, 102, 145);
}
.main-items h1{
    margin-left: 30px;
    color: white;
    padding-top: 10px;
}
.main-items h4{
    margin-left: 30px;
    font-family: 'Times New Roman', Times, serif;
    color: white;
}
.info-section{
    width: auto;
    height: 940px;
    /* background-color: lightgreen; */
    margin-top: 80px;
}
.side-info{
    width: 35%;
    height: 940px;
    float: left;
    /* background-color: lightpink; */
    border-right: 4px solid black;
}
.side-info h1{
    text-align: center;
    padding-top: 10px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: rgb(30, 102, 145);
}
.side-info h5{
    font-family: 'Times New Roman', Times, serif;
    margin-left: 40px;
    line-height: 20px;
    margin-right: 40px;
}
.main-info{
    width: 63%;
    height: 940px;
    /* background-color: lime; */
    float: right;
}
.left-side{
    width: 160px;
    height: 50px;
    background-color: rgb(30, 102, 145);
    margin-left: 10px;
    border-radius: 50px 50px 50px 50px;
    float: left;
    color: white;
    margin-top: 20px;
}
.right-side{
    width: 160px;
    height: 50px;
    border-radius: 50px 50px 50px 50px;
    float: right;
    background-color: rgb(30, 102, 145);
    margin-right: 10px;
    color: white;
    margin-top: 20px;
}
.side-info li{
    font-size: 30px;
    text-align: left;
    margin-left: 50px;
    line-height: 40px;
}
.main-info h1{
    margin-left: 30px;
    color: rgb(30, 102, 145);
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    
}
.main-info h2{
    margin-left: 30px;
    color:rgb(34, 124, 102);
}
.main-info h4{
    margin-left: 30px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.main-info h5{
    margin-left: 30px;
}
.phpbody{
    width:80%;
    height:1200px;
    margin-left:160px;
    background:white;
}
        </style>
    </head>
    <body style="background:black;">
        <div class="phpbody">
            <div class="top-head">
                <div class="side-items">
                    <div class="simple-div">
                    </div>

                </div>
                <div class="main-items">
                    <div style="width: auto; height: 140px; background-color: rgb(34, 124, 102);margin-left: 10px;">
                        <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><?php echo $_POST["first_name"];?> <?php echo $_POST["last_name"];?> </h1>
                        <pre><h4 style="font-family: 'Times New Roman', Times, serif;"><?php echo $_POST["email"]; ?>                             Contact: <?php echo $_POST["contact"];?></h4></pre>                                                                 
                        <a href="<?php echo $_POST["linked"];?> " style=" color:white;">Linked: <?php echo $_POST["first_name"]; ?> <?php echo $_POST['last_name'];?></a></h4></pre>
                    </div>
                </div>
            </div>
            <div class="info-section"> 
                <div class="side-info">
                    <h1>Bio</h1>
                    <h5><?php echo $_POST["bio"];?> </h5>
                    <h1>Skills</h1>
                    <div class="left-side">
                        <h4 style="margin-left: 60px;"><?php echo $_POST["skill1"];?></h4>
                    </div>
                    <div class="right-side">
                        <h4 style="margin-left: 30px;"><?php echo $_POST["skill2"];?></h4>

                    </div>
                    <div class="left-side">
                        <h4 style="margin-left: 35px;"><?php echo $_POST["skill3"];?></h4>
                    </div>
                    <div class="right-side">
                        <h4 style="margin-left: 50px;"><?php echo $_POST["skill4"];?></h4>
                        
                    </div>
                    <div style="height: 230px; width: auto;"></div>

                    <h1>Courses</h1>
                    <ul>
                        <li><?php echo $_POST["course1"];?></li>
                        <li><?php echo $_POST["course2"];?></li>
                        <li><?php echo $_POST["course3"];?></li>
                        <li><?php echo $_POST["course4"];?></li>
                    </ul>
                </div>
                <div class="main-info">
                    <h1>Experience</h1>
                    <h2><?php echo $_POST["company1"];?></h2>
                    <pre><h4>Position: <?php echo $_POST["position1"];?>                                                   From <?php echo $_POST["starting1"];?> to <?php echo $_POST["ending1"];?></h4></pre>
                    <!-- <h5>It was more likely learnig new techniques and skills. I Learned HTML, CSS, PHP, java scripts and WordPress and build website using PHP and wordpress.<hr></h5> -->
                    <h2><?php echo $_POST["company2"];?></h2>
                    <pre><h4>Position: <?php echo $_POST["position2"];?>                                                   From <?php echo $_POST["starting2"];?> to <?php echo $_POST["ending2"];?></h4></pre>
                    <!-- <h5>HeySuccess is one of the biggest platform for students to search internships, scholarships and summer schools. Working with HeySuccess was a great experiences. It improves a lot of my skills and helped me to gain new skills. The online sessions helped me a lot to know how to work online with a company. This internship improved my time management skills, public speaking abilities and digital marketing abilities<hr></h5> -->
                    <h2><?php echo $_POST["company3"];?></h2>
                    <pre><h4>Postition: <?php echo $_POST["position3"];?>                           From <?php echo $_POST["starting3"];?> to <?php echo $_POST["ending3"];?></h4></pre>
                    <!-- <h5>This was my first ever practical work experince. I gain many skills including communication, team working and time managament skills.<hr><hr></h5> -->
                    <h1>Education</h1>
                    <h2><?php echo $_POST["university"];?></h2>
                    <pre><h4>Major subject: <?php echo $_POST["Major"];?>                   Degree: <?php echo $_POST["degree"];?></h4></pre>
                    <pre><h4>From <?php echo $_POST["university_starting"];?> to <?php echo $_POST["university_ending"];?>                                   </h4></pre>
                    <!-- <h2>Aga Khan Higher Secondary School Gahkuch</h2>
                    <pre><h4>Major: Pre-engineering                                      Degree: FSc/HSSC</h4></pre>
                    <pre><h4>From 04-04-2017 to 05-05-2019</h4></pre> -->
                </div>

            </div>
        </div>
    </body>
    <?php include("../footer.php");?>
</html>