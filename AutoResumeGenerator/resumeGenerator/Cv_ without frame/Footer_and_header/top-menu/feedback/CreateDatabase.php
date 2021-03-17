<html> 
  <head> 
   <title> Record Insertion </title> 
   <style>
   body{
     background-color: black;
     color: White;
     text-align: center;
   }
   p{
     color: White;
     text-align: center;
   }
   td{
    border: 1px solid Green;
     border-collapse: collapse;
   }
   table{
     border: 1px solid green;
     border-collapse: collapse;
     width:60%;
     margin-left: 20% ;
   }

   </style>
  </head> 
  <body>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect to localhost');
  }
print("<br> The server connection is successful. <br />");

// If database is not already existing, then create one

if (!mysql_select_db("UserComments_DB", $con)){
   // Create database
   if (mysql_query("CREATE DATABASE UserComments_DB",$con)){
      print(" <br> Your precious feedback has been saved. <br />");
   }
   else {
     print("Error creating database");
   }

   // Create table
   mysql_select_db("UserComments_DB", $con);
      $sql = "CREATE TABLE Feedbacks(UserName varchar(15),Gender varchar(10), Email varchar(50), Rating varchar(15), Feedbacks varchar(200))";
   // Execute query
   mysql_query($sql,$con);
}
else {
   mysql_select_db('UserComments_DB', $con);
   $sql="INSERT INTO Feedbacks (UserName, Gender, Email, Rating, Feedbacks ) VALUES ('$_POST[name]','$_POST[gender]','$_POST[email]','$_POST[rate]', '$_POST[comments]')";

   if (!mysql_query($sql,$con)){
     die('Error executing the query');
   }
   print("<br> Your feedback with the following details has been successfully saved to our database. <br />");
   print("<table> <tr> <td> $_POST[name] </td> <td> $_POST[gender] </td> <td> $_POST[email] </td> <td> $_POST[rate] </td> <td>$_POST[comments]</td></tr> </table>");
}
mysql_close($con);
?> 
<br>
<hr color="green">
   <p>Click <a href = "feedbackform.php">here</a> to submit the another feedback.</p>
   <hr color="green">
   <p>Click <a href = "ReadData.php">here</a> to read the other feedback.</p>
   <hr color="green">
 </body> 
</html>
