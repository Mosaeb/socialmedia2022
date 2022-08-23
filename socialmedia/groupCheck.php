<?php

session_start();

$groupname= $_REQUEST['groupname'];

if ($groupname == null) {
    echo "Invalid group name";
}
else {
    $file = fopen('group.txt','r');
    while (!feof($file)) {
        $line = fgets($file);
        $user = explode('|', $line);
        echo "<br>";

        if ($username == trim($user[0])) {
            setcookie('status', 'true', time()+3600,'/');
            header('location:groupPage.html');
        }
    }

    echo "Invalid group name!!!";
}

?>