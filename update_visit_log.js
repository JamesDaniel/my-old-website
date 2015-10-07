
       var xhttp = new XMLHttpRequest();
       xhttp.open("GET", "update_statistics.php?VisitID=<?php echo $VisitID; ?>", true);
       xhttp.send();