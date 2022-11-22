<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tanggal</title>
</head>
<body>
	<form action="" method="post">
		<input type="date" name="tanggal">
		<button type="submit" name="submit">Submit</button>
	</form>
	
</body>
</html>

<?php 

if(isset($_POST['submit'])) {
	$tgl = $_POST['tanggal'];

	$tanggal = explode('-', $tgl);

	echo "Tanggal : " . $tanggal[2];
	echo "<br>bulan : $tanggal[1]";
	echo "<br>Tahun : $tanggal[0]";
}
 ?>
