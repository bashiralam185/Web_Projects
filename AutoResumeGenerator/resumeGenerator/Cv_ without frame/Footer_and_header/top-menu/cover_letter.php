<?php
include_once("../../header.php");
?>

<html>
    <head>
        <style>
            .main-div{
                width: 99%;
                margin-left: 8px;
                background-color: white;
                height: 700px;
                margin-top: 10px;
            }
            .left-item{
                width: 25%;
                height: 400px;
                float: left;
                margin-left: 200px;
                margin-top: 100px;
                /* background-color: green; */
                text-align: center;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            .right-item{
                width: 25%;
                height: 400px;
                float: right;
                margin-top: 100px;
                margin-right: 200px;
                /* background-color: green; */
                text-align: center;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            .main-pictures{
                width: 100%;
                height: 300px;
                
            }
            .right-item:hover{
                border: 2px solid green;
                color: green;
                border-radius: 10px 10px 10px 10px;
            }
            .left-item:hover{
                border: 2px solid green;
                color: green;
                border-radius: 10px 10px 10px 10px;
            }
        </style>
    </head>
    <body style="background-color: black;">
        <div class="main-div">
            <div class="left-item">
                <a style="text-decoration: none; color: black;" href="cover_letter_templates.html">
                <img class="main-pictures"src="pictures/cover_letter_template.png"></a>
                <h2 style="color:black;">COVER LETTER TEMPLATES</h2>
            </div>
            <div class="right-item">
                <a style="text-decoration: none; color: black;" href="cover_tips.php">
                <img class="main-pictures" src="pictures/cover_letter_tips.png"></a>
                <h2 style="color:black;"> COVER LETTER TIPS</h2>
            </div>
        </div>
    </body>
    <?php include("../../footer.php");?>
</html>