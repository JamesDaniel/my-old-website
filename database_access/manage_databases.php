<?php             

    $database = $_GLOBALS['database'];
    $open_close = $_GLOBALS['open_close'];
    
    
    
    
    if ($database == 'books') {
        if ($open_close == 'open') {               
            //require("passwords/database_credentials.php"); // for remote site
            require("../passwords/database_credentials.php");   // for local testing  
            $book_conn = new mysqli($server, $username, $password, $database_name);
            $_GLOBALS['db_connection'] = $book_conn;
          
            
            if ($book_conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        }
        else {
            $book_conn->close();
        }
    }
    
    elseif ($database == 'stats') {
        if ($open_close == 'open') {
            require("passwords/database_credentials.php");   
            $stats_conn = new mysqli($server, $username, $password, $database_name);
            $_GLOBALS['db_connection'] = $stats_conn;
            
            if ($stats_conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        }
        else {
            $stats_conn->close();
        }
    }

             
    
                         
?>