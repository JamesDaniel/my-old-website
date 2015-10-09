<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Web Tutorials</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    
    
  </head>
  <body>
   <!--<script type="text/javascript">alert("still constructing this website. Sorry!");</script>-->
   
                                
   <?php require("database_access/log_visit.php"); ?>        
   <script>
       var xhttp = new XMLHttpRequest();
       xhttp.open("GET", "database_access/update_statistics.php?VisitID=<?php echo $VisitID; ?>", true);
       xhttp.send();
   </script>
   <?php require("static_content/header.html"); ?>
   <?php require("static_content/nav.html"); ?>
   <?php require("dynamic_content/web_tutorials_body.php"); ?>
   
    
   
  </body>
</html>