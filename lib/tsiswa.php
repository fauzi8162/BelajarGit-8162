<?php

require_once('DBClass.php');
require_once('m_siswa.php');
require_once('m_nationality.php');

$siswa = new siswa();
$nation = new nationality();

$data_nation = $nation->readAllNationality();

if (isset($_POST['kirim'])) {
	$tambah = $siswa->createSiswa($_POST['in_nation'], $_POST['in_nis'], $_POST['in_name'], $_POST['in_mail'], $POST['in_tgl']);
	echo "data siswa berhasil ditambahkan <br /> <br />";
}
?>


<h1> Tambah Data Siswa</h1>
<form action="tsiswa.php" method="POST">
	NIS:<br>
	<input type="text" name="in_nis"><br>
	Nama Lengkap:<br>
	<input type="text" name="in_name"><br>
	Email:<br>
	<input type="text" name="in_mail"><br>
	Tanggal Lahir: 1996-12-25 (YYYY-MM-DD) 	<br>
	<input type="text" name="in_tgl"><br>
	Kewarganegaraan:<br>
	<select name="in_nation"><br>
		<option value=""> --pilih negara-- </option>
		<?php foreach($data_nation as $n): ?>
		<option value="<?php echo $n['id_nationality']?>">
			<?php echo $n['nationality']?>
			</option>
			<?php  endforeach  ?>
			</select>
	<br><br>
	<input type="submit" name="kirim" value="Simpan">
 	</form>
	