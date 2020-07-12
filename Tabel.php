	<html>
<head>
<link rel="stylesheet" type="text/css" href="pweb.css"></head>
<body>
<?php
        $file="form.txt";
		$fp=fopen($file, "a+");

		echo "<div id='table'><h2>Tabel Data Pendaftar</h2>";
		while($data = fgets($fp, 600)){
			$pisah = explode("|", $data);
			
			echo "<table class width='50%' border='5' cellpadding='5' cellspacing='5'>";
			echo"<tr>
					<td>NAMA LENGKAP</td>
					<td> $pisah[0]</td>
				</tr>";

			echo"<tr>
					<td>NIK</td>
					<td> $pisah[1]</td>
				</tr>";

            echo"<tr>
					<td>TEMPAT LAHIR</td>
					<td> $pisah[2]</td>
				</tr>";

			echo"<tr>
					<td>TANGGAL LAHIR</td>
					<td> $pisah[3]</td>
				</tr>";

			echo"<tr>
					<td>KEWARGANEGARAAN</td>
					<td> $pisah[4]</td>
				</tr>";

			echo"<tr>
					<td>ALAMAT</td>
					<td> $pisah[5]</td>
				</tr>";

			echo"<tr>
					<td>PENDIDIKAN TERAKHIR</td>
					<td> $pisah[6]</td>
				</tr>";

			echo"<tr>
					<td>EMAIL</td>
					<td> $pisah[7]</td>
				</tr>";

			echo"<tr>
					<td>NO HP</td>
					<td> $pisah[8]</td>
				</tr>";

			echo"<tr>
					<td>STATUS</td>
					<td> $pisah[9]</td>
				</tr>";

            echo "</table><br></div>";
        }

        ?>
</body>
</html>
