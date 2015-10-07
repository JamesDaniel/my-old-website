<?php    
                          
        
        $_GLOBALS['database'] = 'books';
        $_GLOBALS['open_close'] = 'open';
        require("manage_databases.php");
        $connection = $_GLOBALS['db_connection'];
               
               
        
        $sql = "SELECT MAX(VisitID) AS MaxVisitID
                FROM VisitorLog";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();
        
        if ($result->num_rows > 0)
        {
            $VisitID = $row["MaxVisitID"] + 1;
        }
        else
        {
            $VisitID = 1;
        }                     
                         
                         
        $sql = "INSERT INTO VisitorLog (VisitDate, VisitPage)
                VALUES ('" . date("Y-m-d") . "', '". $_SERVER['PHP_SELF'] ."')";
        $connection->query($sql);
           
           
           
           
        $_GLOBALS['database'] = 'books';
        $_GLOBALS['open_close'] = 'close';
        require("manage_databases.php");   
    
    
?> 