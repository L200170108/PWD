<html>
<head>
	<title>tugas 2</title>
</head>
<body>
	<form method="POST" action="">
	<p>Nilai =<input type="text" name="A" size="3"></p>
	<p><input type="submit" name="submit" value="cek"></p>
	</form>
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$nilaiA = $_POST['A'];

	$submit = $_POST['submit'];

	if($submit){
        if($nilaiA %2 == 0){
            echo "$nilaiA = bilangan genap</br>";
        }else{
            echo "$nilaiA = bilangan ganjil";}
    }
		
	?>

</body>
</html>
