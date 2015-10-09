<?php    
                          
                 
        //require("passwords/database_credentials.php"); // for remote site
        require("../passwords/database_credentials.php");   // for local testing  
            $connection = new mysqli($server, $username, $password, $database_name);
        if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }    
                     
                     
                     
                     
                        
        $VisitID = $_REQUEST["VisitID"];  
        $sql = "UPDATE VisitorLog 
                SET HasJavaScript ='Y'
                WHERE VisitID = " . $VisitID;
        $connection->query($sql);
           
           
           
           
        $connection->close();  
    
    
?> 