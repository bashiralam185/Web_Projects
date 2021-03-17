<?php include("../header.php");?>

<html>
    <head>
        <style>
            .Main-section{
            width: auto%;
            height: 1800px;
            background-color: white;
        }
        th{
            border: 1px solid black;
            background-color: blanchedalmond;

        }
        table, th{
            height: 70px;
            color: green;
            font-family: 'Courier New', Courier, monospace;
            font-size: 30px;
            /* border: 1px solid black; */
        }
        table, td{
            height: 70;
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 25px;
        }
        .sub-heading{
            color: green;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
            text-decoration-line: underline;
        }
        input{
            height: 40px;
            width: 330px;
            float: left;
            border: 1px solid green;
            border-radius: 10px 10px 10px 10px;

        }
        .submit-button{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: green;
            width: 200px;
            font-size: 30px;
            border: 2px solid green;
        }
        .submit-button:hover{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
            background-color: green;
            width: 200px;
            font-size: 30px;
            border: 2px solid green;
        }
        </style>
    </head>
    <body style="background-color:black;">
        <div class="Main-section">
            <form method="POST" name="resumeData" action="resume1.php">
                <table style="margin-left: 140px; width: 80%;">
                <br><br>
                    <tr>
                        
                        <th colspan="4">  <b >Please fill the required Fields</b> </th>
                    </tr>
                    <tr>
                        <td class="sub-heading" colspan="4">Top Heading Section Info</td>
                    </tr>
                    <tr>
                        <td> Full Name </td>
                        <td> <input type="text" name="first_name" required> </td>
                        <td> Last Name</td>
                        <td> <input style="float: right; " type="text" name="last_name" required> </td>
                    </tr>
                    <tr>
                        <td class="sub-heading" colspan="4">BIO Section</td>
                    </tr>
                    <tr>
                        <td colspan="4"><textarea rows="7" cols="150" name="bio" required> </textarea></td>
                    </tr>
                    <tr>
                        <td class="sub-heading" colspan="4">Contact Info</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email"> </td>
                        <td>Contact</td>
                        <td><input style="float: right;" type="text" name="contact"></td>
                    </tr>
                    <tr>
                        <td>Linked link</td>
                        <td><input style="float: right; margin-right:50px;" type="text" name="linked"></td>
                    
                    </tr>
                    <tr>
                        <td class="sub-heading" colspan="4">SKills</td>
                    </tr>
                    <tr>
                        <td><input class="skills" style="width:100px;" type="text" name="skill1"> </td>
                        <td><input class="skills" style="float: right; width:100px; margin-right:200px;" type="text" name="skill2"></td>
                        <td><input class="skills" style="width:100px; margin-left:100px;" type="text" name="skill3"> </td>
                        <td><input class="skills" style="float: right; width:100px; " type="text" name="skill4"></td>
                    </tr>
                    <tr>
                        <td class="sub-heading" colspan="4">Courses</td>
                    </tr>
                    <tr>
                        <td><input class="skills" style="width:100px;" type="text" name="course1"> </td>
                        <td><input class="skills" style="float: right; width:100px; margin-right:200px;" type="text" name="course2"></td>
                        <td><input class="skills" style="width:100px; margin-left:100px;" type="text" name="course3"> </td>
                        <td><input class="skills" style="float: right; width:100px; " type="text" name="course4"></td>
                    </tr>
                    <tr>
                        <td class="sub-heading" colspan="4">Work Experience</td>
                    </tr>
                    <tr>
                        <td>company Name1:</td>
                        <td><input class="skills" style="float: right;  margin-right:50px;" type="text" name="company1"></td>
                        <td>Your role</td>
                        <td><input class="skills" style="float: right;" type="text" name="position1"></td>
                    </tr>
                    <tr>
                        <td>Starting date:</td>
                        <td><input class="skills" style="float: right;  margin-right:50px;" type="date" name="starting1"></td>
                        <td>Ending date</td>
                        <td><input class="skills" style="float: right;" type="date" name="ending1"></td>
                    </tr>
                    <tr>
                        <td>company Name2:</td>
                        <td><input class="skills" style="float: right;  margin-right:50px;" type="text" name="company2"></td>
                        <td>Your role</td>
                        <td><input class="skills" style="float: right;" type="text" name="position2"></td>
                    </tr>
                    <tr>
                        <td>Starting date:</td>
                        <td><input class="skills" style="float: right;  margin-right:50px;" type="date" name="starting2"></td>
                        <td>Ending date</td>
                        <td><input class="skills" style="float: right;" type="date" name="ending2"></td>
                    </tr> <tr>
                        <td>company Name3:</td>
                        <td><input class="skills" style="float: right;  margin-right:50px;" type="text" name="company3"></td>
                        <td>Your role</td>
                        <td><input class="skills" style="float: right;" type="text" name="position3"></td>
                    </tr>
                    <tr>
                        <td>Starting date:</td>
                        <td><input class="skills" style="float: right;  margin-right:50px;" type="date" name="starting3"></td>
                        <td>Ending date</td>
                        <td><input class="skills" style="float: right;" type="date" name="ending3"></td>
                    </tr>
                    <tr>
                        <td class="sub-heading" colspan="4">Education</td>
                    </tr>
                    <tr>
                        <td> Most recent College/University:</td>
                        <td><input class="skills" style="float: right;  margin-right:50px;" type="text" name="university"></td>
                        
                    </tr>
                    <tr>
                        <td>Starting date:</td>
                        <td><input class="skills" style="float: right;  margin-right:50px;" type="date" name="university_starting"></td>
                        <td>Ending date</td>
                        <td><input class="skills" style="float: right;" type="date" name="university_ending"></td>
                    </tr>
                    <tr>
                        <td>Majoring Subject:</td>
                        <td><input class="skills" style="float: right;  margin-right:50px;" type="text" name="Major"></td>
                        <td>Degree</td>
                        <td><input class="skills" style="float: right;" type="text" name="degree"></td>
                    </tr>
                    

                    <tr>
                        <td>
                            <input class="submit-button" type="submit" name="submit" >
                        </td>
                    </tr>
                </table>
            </form>
        </div>  
    </body>
    <?php 
        include("../footer.php");
    ?>
</html>