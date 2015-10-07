<?php    
    $_GLOBALS['database'] = 'books';
    $_GLOBALS['open_close'] = 'open';
    require("../manage_databases.php");
    $connection = $_GLOBALS['db_connection'];
    
    
    
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

       
    $_GLOBALS['database'] = 'books';
    $_GLOBALS['open_close'] = 'close';
    require("..\manage_databases.php");
    
    
?> 