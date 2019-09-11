<!DOCTYPE html>
<html>
<head>
	<title>Tugas Bintang</title>
</head>
<body>
	<center><h3>LOOP STAR<h2></h3></center><hr><br>
     <form action="" method="GET" name="input">
     	<pre>
     		Masukkan Bilangan : <input type="number" name="bintang"><br>
     		<input type="submit" name="input" value="submit">
     	</pre>
     </form>
</body>
</html>

<?php
if (isset($_GET['input'])) {
	$tgs = $_GET['bintang'];

	for ($a=0; $a <= $tgs; $a++) { 
		for ($b=1; $b <= $tgs-$a; $b++) { 
			echo "&nbsp;&nbsp;";
		}
		for ($i=1; $i <=$a; $i++) { 
			echo "*&nbsp;&nbsp;";
		}
		echo "</br>";
	}
	echo "<br>";
	echo "Total Bintang = ".$tgs. "<br>";
	echo "<hr>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Pengolahan Form</title>
</head>
<body>
     <form action="" method="POST" name="input">
     	Masukkan Bilangan : <input type="text" name="bilangan">
     	<input type="submit" name="Input" value="input">
     </form>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
	$bilangan = $_POST['bilangan'];
	echo "<br>";
	for ($i=0; $i<$bilangan; $i++) { 
		echo "*";
	}
	echo "<br>Total Bintang = $bilangan";
	echo "<hr>";
}
?>