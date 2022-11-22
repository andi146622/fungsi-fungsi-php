<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label for="harga">Harga</label>
		<input type="text" name="harga" id="harga">
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>

<?php 

if(isset($_POST['submit'])) {
	$harga = $_POST['harga'];

	$english = number_format($harga);
	$indonesia = number_format($harga,'2', ',', '.');
	$france = number_format($harga, '2', ',', ' ');
	$english2 = number_format($harga, '2', ',', '');

	echo "number_format_english : $english";
	echo "<br>number_format_indonesia : $indonesia";
	echo "<br>number_format_france : $france";
	echo "<br>number_format_english : $english2";
}
 ?>
