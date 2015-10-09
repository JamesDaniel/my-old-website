<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Home Page</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
    
    
  </head>
  <body> 
  
        <?php
        /*  Open database connection  */              
        //require("passwords/database_credentials.php"); // for remote site
        require("../passwords/database_credentials.php");   // for local testing  
            $connection = new mysqli($server, $username, $password, $database_name);
        if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }    
            
            
        /*  get user visit ID */    
        $sql = "SELECT MAX(VisitID) AS MaxVisitID
                FROM VisitorLog";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();
        
        $VisitID = 1;
        if ($result->num_rows > 0)
        {
            $VisitID = $row["MaxVisitID"] + 1;
        }  
        
        
        /*  create visit record  */
        $sql = "INSERT INTO VisitorLog (VisitDate, VisitPage)
                VALUES ('" . date("Y-m-d") . "', '". $_SERVER['PHP_SELF'] ."')";
        $connection->query($sql);       
        
        ?>
        
   <script>
       var xhttp = new XMLHttpRequest();   
       xhttp.open("GET", "update_statistics.php?VisitID=<?php echo $VisitID; ?>", true);
       xhttp.send();
   </script>
   <?php require("static_content/header.html"); ?>  
   <?php require("static_content/nav.html"); ?>      
   <?php require("static_content/home_body.html"); ?>  
   
    
      <?php  
      /*  close database connection */
          $connection->close(); 
      ?>
  </body>
</html>