<?php

require_once('DBClass.php');
require_once('m_siswa.php');
$id=$_GET['id'];

if (!is_numeric($id)){
	Exit('Akses Ditolak');
}

$siswa = new Siswa();
$data = $siswa->readSiswa($id);

if(empty($data)){
	Exit('Data Tidak Tersedia');
}

//print '<pre>';
//print_r($data);
//print '</pre>';
$dt=$data[0];

?>

<table border="1">
	<tr>
		<td>ID Siswa</td>
		<td><?php echo $dt['id_siswa']?></td>
	</tr>
	<tr>
		<td>Full Name</td>
		<td><?php echo $dt['full_name']?></td>
	</tr>
	<tr>
		<td>Nationality</td>
		<td><?php echo $dt['nationality']?></td>
	</tr>
</table>
<br>
		<td><a href="siswa.php">Kembali</a></td>

</br>
