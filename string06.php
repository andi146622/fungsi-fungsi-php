<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>String 06</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="text">
		<button type="submit" name="submit">Submit</button>
	</form>
	
</body>
</html>

<?php 

if(isset($_POST['submit'])) {
	$text = $_POST['text'];

	echo "String Asli : $text <br>";
	echo "Strip_tags : ".strip_tags($text);
	echo "<br>Strip_tags : ".strip_tags($text, "<u>");
	echo "<br>Htmlentities : ".htmlentities($text);
	echo "<br>Htmlspecialchars :".htmlspecialchars($text);
}

 ?>