<?php

$grouppost = $_REQUEST['grouppost'];

if ($grouppost == null) {
    echo "post not uploaded !!!";
}
else {
   $data = $grouppost."\r\n";
   $file =fopen ('newsfeed.txt','a');
   fwrite($file,$data);
    header('location:newsfeed.php');
  
    
   }

?>