<?php 

	$des = "upload/".$_FILES["myfile"]["name"];
    
    $src = $_FILES["myfile"]["tmp_name"];

	if(move_uploaded_file($src, $des)){
		echo "file uploaded";
	}else{
		echo "Not uploaded file";
	}
?>
<br><br>
<a href="logout.html">Logout</a><br />
<a href="Login.html">Login</a><br />
<a href="register.html">Sign Up</a><br />