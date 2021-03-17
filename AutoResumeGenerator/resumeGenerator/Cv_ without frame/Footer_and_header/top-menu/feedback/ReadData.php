<html>
<head>
  <title> User feedbacks </title>
  <style>
   body{
     background-color: black;
     color: White;
   }
   p, h1{
     color: White;
     text-align: center;
   }
   tr{
     color: White;
     emphasis: bold;
   }
   th{
     color: black;
     font-family: cursive;
   }
   table{
     border: 1px solid seagreen;
     border-collapse: collapse;
     background-color: black;
     font-family: cursive;
     width: 80%;
     height:60%;
   }

   

   </style>
</head>
<body>
<?php
  $con = mysql_connect("localhost","root","");
  if (!$con){
    die('Could not connect to localhost'. mysql_error());
  }
  mysql_select_db("Usercomments_DB", $con);
  $result = mysql_query("SELECT * FROM Feedbacks");
  mysql_close($con);
?>

<center>
<hr color="green"> 
  <h1>User Feedbacks:</h1>
<hr color="green">

      <table border = 1>
	<tr bgcolor="seagreen"> 
	   
        <th> UserName </th> <th> Gender </th> <th> Email </th> <th> Rating </th> <th> feedbacks </th> 
          
	</tr>

         <?php
            // fetch each record in result set
            for ( $counter = 0; $row = mysql_fetch_row( $result );$counter++ ) {
	        print( "<tr>" );
	        foreach ( $row as $key => $value ) 
	            print( "<td>$value</td>" );
	        print( "</tr>" );
	    } // end for
	 ?>
         <!-- end PHP script -->
       </table>
       <hr color="green">
   <br />Ther are already
   <strong>
       <?php print( "$counter" ) ?> feedbacks.<br />
   </strong>
   <hr color="green">
<a href="feedbackform.php"> Back </a>
</center>
</body>
</html>
