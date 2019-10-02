<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Single Upload Form with PHP</title>
  </head>
  <body>
  
	<form method="POST" action="upload.php" enctype="multipart/form-data">
		<label for="file"> Pick a file :  </label>
		<input type="file" name ="file"> 
		<input type="submit" value = "Upload">
	</form>
  
  
    
  </body>
</html>