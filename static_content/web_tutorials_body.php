<!-- START OF BODY -->
   <div class="container-fluid">
   
    
    
    <?php
        
        $_GLOBALS['database'] = 'books';
        $_GLOBALS['open_close'] = 'open';
        require("manage_databases.php");
        $connection = $_GLOBALS['db_connection'];
        
      
        $sql = "SELECT   WT.WebTutorialName, WT.WebTutorialAddress,
                         LL.percentageComplete, LL.dateLastRead
                FROM     WebTutorials WT, WebLearningList LL
                WHERE    WT.WebTutorialID = LL.WebTutorialID AND
                         LL.percentageComplete < 100
                ORDER BY LL.dateLastRead ASC,
                         LL.percentageComplete DESC";
        $result = $connection->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $percentNum = $row["percentageComplete"];
            $WebTutorialAddress = $row["WebTutorialAddress"];
            $WebTutorialName = $row["WebTutorialName"];
            date_default_timezone_set("Europe/Dublin");
            $dateLastRead = time() - strtotime($row["dateLastRead"]);
            $lastUpdated = abs(floor($dateLastRead/60/60/24));  //in days
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
      <a style="text-decoration:none;" href="' . $WebTutorialAddress . '" target="_blank">
       <h3 style="color:#000000;">' . $WebTutorialName . '</h3>
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
        
        $sql = "SELECT   WT.WebTutorialName, WT.WebTutorialAddress,
                         LL.percentageComplete, LL.dateLastRead
                FROM     WebTutorials WT, WebLearningList LL
                WHERE    WT.WebTutorialID = LL.WebTutorialID AND
                         LL.percentageComplete = 100
                ORDER BY LL.dateLastRead ASC";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $percentNum = $row["percentageComplete"];
            $WebTutorialAddress = $row["WebTutorialAddress"];
            $WebTutorialName = $row["WebTutorialName"];
            date_default_timezone_set("Europe/Dublin");
            $dateLastRead = time() - strtotime($row["dateLastRead"]);
            $lastUpdated = abs(floor($dateLastRead/60/60/24));  //in days
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
      <a style="text-decoration:none;" href="' . $WebTutorialAddress . '" target="_blank">
       <h3 style="color:#000000;">' . $WebTutorialName . '</h3>
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
        
        
        $_GLOBALS['database'] = 'books';
        $_GLOBALS['open_close'] = 'close';
        require("manage_databases.php");                                                 
    ?>
    
    
    
    
    
   </div>
<!-- END OF BODY -->            