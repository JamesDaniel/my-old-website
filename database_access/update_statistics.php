<?php    
                          
        
        $_GLOBALS['database'] = 'books';
        $_GLOBALS['open_close'] = 'open';
        require("manage_databases.php");
        $connection = $_GLOBALS['db_connection'];
        echo '<script>alert("hello script"); </script>';       
                                
        $VisitID = $_REQUEST["VisitID"];                 
                         
        $sql = "UPDATE VisitorLog 
                SET HasJavaScript ='Y'
                WHERE VisitID = " . $VisitID;
        $connection->query($sql);
           
           
           
           
        $_GLOBALS['database'] = 'books';
        $_GLOBALS['open_close'] = 'close';
        require("manage_databases.php");   
    
    
?> 