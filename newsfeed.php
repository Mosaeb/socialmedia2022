<html>
  <head>
    <title>Newsfeed</title>
  </head>

  <body>
    <h1>Welcome to the Newsfeed</h1>

			<?php 
				$file = fopen('newsfeed.txt', 'r');
				while(!feof($file)){
					$post = fgets($file);
					$post = ($post);
					
			?>
			<table>
    		<tr>
			<td><?=$post	?></td><br>
			</tr>
			<form action="commentcheck.php" method="post" enctype="">
			<tr>
			<td>
			<textarea placeholder="Comment" name="comment" id="" cols="30" rows="1"></textarea>
			<input type="submit" name="Post" value="Post" id="">
			</td></tr>
			</form>
			<?php
					
				}
				
			?>

			<tr>
				
			</tr>
</table>
    <a href="about.html">About Us</a><br />
    <a href="logout.html">Logout</a><br /><br><br>

  </body>
</html>