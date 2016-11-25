<?php
$kueri = 'SELECT * FROM siswa';
$hasil = MySQL query ($kueri);
if (mysql num rows ($hasil) > 0) {
 while ($data = mysql fetch array($hasil)) {
 echo "<tr>";
 echo "<td>";
width=20>".$data['NO']."</td>";
	echo "<td
width=300>".$data['NAMA']."</td>";
echo "</td
width=300>".$data['NAMA']."</td>";
echo "</tr>";
	}
 } else {
 	echo "<tr>";
 	echo "<td> DATA MASIH KOSONG</td>";
 	echo "</tr>";
 }
?>