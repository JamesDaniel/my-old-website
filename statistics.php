<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Statistics</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
    
    
  </head>
  <body>
            <?php
        //require("passwords/database_credentials.php"); // for remote site
        require("../passwords/database_credentials.php");   // for local testing  
            $connection = new mysqli($server, $username, $password, $database_name);
        if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }    
    
    
    
    echo "Database Connected successfully<br>";
    
    echo "Today is " . date("Y-m-d") . "<br>";
                        
    $sql = "SELECT VisitID, VisitDate, VisitPage, HasJavaScript FROM VisitorLog";
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "VisitID: " . $row["VisitID"]. " - VisitDate: " . $row["VisitDate"]. " - VisitPage: " . $row["VisitPage"]. " - Has JavaScript: " . $row["HasJavaScript"] . "<br>";
    }
    } else {
        echo "0 results";
    }









       $connection->close(); 
                       ?>
   
  </body>
</html>