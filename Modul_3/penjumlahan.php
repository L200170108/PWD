<html>
<head>
	<title>penjumlahan</title>
</head>
<body>
	<form method="POST" action="">
	<p>Nilai A adalah =<input type="text" name="A" size="3"></p>
	<p>Nilai B adalah =<input type="text" name="B" size="3"></p>
	<p><input type="submit" name="submit" value="Jumlahkan"></p>
	</form>
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$nilaiA = $_POST['A'];
	$nilaiB = $_POST['B'];
	$submit = $_POST['submit'];

	if($submit){
		$jumlah = $nilaiA+$nilaiB;
		echo "Nilai A adalah $nilaiA</br>Nilai B adalah $nilaiB</br> jadi nilai A ditambah Nilai B adalah $jumlah";
	}
	?>

</body>
</html>
