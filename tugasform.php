<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
     <FORM ACTION="" METHOD="POST" NAME="input">
            Nama   : <input type="text" name="nama"><br>
            Kelas  : <input type="text" name="kelas"><br>
            Alamat : <input type="text" name="alamat"><br>
            Hobi   : <input type="text" name="hobi"><br><br>
            <input type="submit" name="simpan" value="simpan">
        </FORM>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];
	$hobi = $_POST['hobi'];

	echo "<br><hr>";
	echo "Nama : $nama";
	echo "<br>Kelas : $kelas";
	echo "<br>Alamat : $alamat";
	echo "<br>Hobi : $hobi";
}
?>