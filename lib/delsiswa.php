<?php

require_once('DBClass.php');
require_once('m_siswa.php');
$id=$_GET['id'];

if (!is_numeric($id)){
	Exit('Akses Ditolak');
}

$siswa = new Siswa();
$data = $siswa->deleteSiswa($id);

if(empty($data)){
	Echo "Data Berhasil Dihapus";
}

?>

<br>
<a href="siswa.php">Kembali</a>