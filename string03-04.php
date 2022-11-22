<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Membuaut fungsi php</title>
</head>
<body>
	<h4>Program penggunaan fungsi strtolower, strtoupper, ucfirst, ucwords, strrev, dan strlen dalam string
	</h4>
	<form action="" method="post">
		<textarea name="kata" id="" cols="40" rows="10"></textarea><br>
		<button type="submit" name="submit">Submit</button>
	</form>	
</body>
</html>

<?php 

if(isset($_POST['submit'])) {
$str = $_POST['kata'];
echo "<b>String asli</b> : $str";
echo "<br><b>Strtolower</b> : " . strtolower($str);
echo "<br><b>Strtoupper</b> : " . strtoupper($str);
echo "<br><b>Ucfirst</b> : " . ucfirst($str);
echo "<br><b>Ucwords</b> : " . ucwords($str);
echo "<br><b>Strrev</b> : " . strrev($str);
echo "<br><b>Strlent</b> : " . strlen($str);
echo "<br><b>Addslashes</b> : " . addslashes($str);
echo "<br><b>Stripslashes</b> : " . stripslashes($str);
}

 ?>