<?php
require_once('db.php');
function signup(){
    $conn=getConnection();
    $sql="insert into register values('','{$register['username']}','{$register['password']}')";
    if(mysqli_query($conn,$sql)){
        return true;

    }
    else{
        return false;
    }
}
?>