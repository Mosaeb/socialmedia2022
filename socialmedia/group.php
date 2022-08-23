<?php

$groupname = $_REQUEST['groupname'];
$date = $_REQUEST['date'];

if ($groupname == null || $date == null) {
    echo "Not create group !!!";
}
else {
   $data = $groupname."|".$date."\r\n";
   $file =fopen ('group.txt','a');
   fwrite($file,$data);
    header('location:groupsearch.html');
  
    
   }


?>