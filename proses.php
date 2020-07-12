<?php
$file ="form.txt";
$fp =fopen($file, "a+");
$NAMA = $_POST['nama'];
$NIK = $_POST['nik'];
$TEMPAT_LAHIR = $_POST['Tempat'];
$TANGGAL_LAHIR = $_POST['Tgl_lahir'];
$KEWARGANEGARAAN = $_POST['Kewarganegaraan'];
$ALAMAT = $_POST['alamat'];
$PENDIDIKAN  = $_POST['Pendidikan'];
$EMAIL = $_POST['Email'];
$NOHP= $_POST['Nohp'];
$STATUS = $_POST['status'];

fputs($fp,"$NAMA|$NIK|$TEMPAT_LAHIR|$TANGGAL_LAHIR|$KEWARGANEGARAAN|$ALAMAT|$PENDIDIKAN|$EMAIL|$NOHP|$STATUS\n");

fclose($fp);
echo "<center><br>";
echo '<h1 class="h1">Terima Kasih Anda sudah mendaftar</h1><br>';
echo "&nbsp";
echo '<a class="tombol" href=tampilandata.php>Lihat data</a><br><br></br>';
echo '<a class="tombol" href=form.php>Kembali ke form</a>';
echo "</center>";


?>
