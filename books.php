<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Books</title>
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
   
           <?php
   /* dynamic body content  */
   
   
      
        $sql = "SELECT Books.bookname, Books.bookaddress, ReadingList.percentageComplete, ReadingList.dateLastRead FROM Books, ReadingList WHERE Books.BookID = ReadingList.BookID AND ReadingList.percentageComplete < 100 ORDER BY ReadingList.dateLastRead ASC, percentageComplete DESC";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $percentNum = $row["percentageComplete"];
            $bookaddress = $row["bookaddress"];
            $bookname = $row["bookname"];
            date_default_timezone_set("Europe/Dublin");
            $timeLastRead = time() - strtotime($row["dateLastRead"]);
            $lastUpdated = abs(floor($timeLastRead/60/60/24));  //in days
            if ($lastUpdated == 0) {
                $lastUpdated = "today";
            }
            else {
                $lastUpdated = $lastUpdated . " days ago";
            }
                echo '        
    
    <div class="row" style="margin-top:20px;">
     <div class="col-xs-1">
     </div>
     <div class="col-xs-10">
      <a style="text-decoration:none;" href="' . $bookaddress . '" target="_blank">
       <h3 style="color:#000000;">' . $bookname . '</h3>
      </a>
     </div>
     <div class="col-xs-1">
     </div>
    </div>
    
    <div class="row" style="margin-top:20px;">
     <div class="col-xs-1">
     </div>
     <div class="col-xs-10">
      
      
     <div class="progress" style="margin-bottom:0px;">
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="'.$percentNum.'%" aria-valuemin="0" aria-valuemax="100" style="width:'.$percentNum.'%">
      '.$percentNum.'% Complete
      </div>
     </div>
     <div><span>Last updated: '.$lastUpdated.'</span></div>
      
      
     </div>
     <div class="col-xs-1">
     </div>
    </div>        
                        
            
            ';  
        }    
        }
        $sql = "SELECT Books.bookname, Books.bookaddress, ReadingList.percentageComplete, ReadingList.dateLastRead FROM Books, ReadingList WHERE Books.BookID = ReadingList.BookID AND ReadingList.percentageComplete = 100 ORDER BY ReadingList.dateLastRead ASC";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $percentNum = $row["percentageComplete"];
            $bookaddress = $row["bookaddress"];
            $bookname = $row["bookname"];
            date_default_timezone_set("Europe/Dublin");
            $timeLastRead = time() - strtotime($row["dateLastRead"]);
            $lastUpdated = abs(floor($timeLastRead/60/60/24));  //in days
            if ($lastUpdated == 0) {
                $lastUpdated = "today";
            }
            else {
                $lastUpdated = $lastUpdated . " days ago";
            }
                echo '        
    
    <div class="row" style="margin-top:20px;">
     <div class="col-xs-1">
     </div>
     <div class="col-xs-10">
      <a style="text-decoration:none;" href="' . $bookaddress . '" target="_blank">
       <h3 style="color:#000000;">' . $bookname . '</h3>
      </a>
     </div>
     <div class="col-xs-1">
     </div>
    </div>
    
    <div class="row" style="margin-top:20px;">
     <div class="col-xs-1">
     </div>
     <div class="col-xs-10">
      
      
     <div class="progress" style="margin-bottom:0px;">
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="'.$percentNum.'%" aria-valuemin="0" aria-valuemax="100" style="width:'.$percentNum.'%">
      '.$percentNum.'% Complete
      </div>
     </div>
     <div><span>Last updated: '.$lastUpdated.'</span></div>
      
      
     </div>
     <div class="col-xs-1">
     </div>
    </div>        
                        
            
            ';
            }
        }
        
        /* end of dynamic body content */
        ?>
   
   
   
    
   
    
      <?php  
      /*  close database connection */
          $connection->close(); 
      ?>
  </body>
</html>