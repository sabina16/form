<?php
    if (isset($_POST ['Input'])) {
        $nama = $_POST['nama'];
        $m1 = $_POST['mapel1'];
        $m2 = $_POST['mapel2'];

         echo "Nama :$nama<br>";
         echo "<br>Mapel1 : $m1<br>";
         echo "<br>Mapel2 : $m2<br>";
         $rata = ($m1+$m2) /2;
         echo "<br>Rata Rata :$rata<br>";

         if ($rata > 75) {
             echo "<br>Status : <b>Lulus</b>";
         }
         elseif ($rata < 75) {
             echo "<br>Status : <b>Tidak Lulus</b>";
         }
    }
    ?>