<?php
require_once('DBClass.php');
require_once('m_siswa.php');
require_once('m_nationality.php');

if (!isset($_POST['kirim'])){
	Exit('Akses Ditolak');
}
$siswa = new Siswa();

$data['input_name'] = addslashes($_POST['in_name']);
$data['input_email'] = $_POST['in_mail'];
$data['input_nationality'] = $_POST['in_nation'];
$data['foto'] = '../img/'.$_POST['in_nis'].'.png';

$siswa->updateSiswa($_POST['in_nis'], $data);

//print_r($_FILES);

if(!copy($_FILES['in_foto']['tmp_name'], '../img/'.$_POST['in_nis'].'.png')){
	exit('Error Upload File');
}



echo "data berhasil diupdate <br />";
echo "<a href='usiswa.php?id=".$_POST['in_nis']."'>Detail Siswa</a>";


?>