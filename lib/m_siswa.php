<?php
class Siswa{
	private $db;
	public function Siswa(){
		$this->db = new DBClass();
						   }
	
	public function  readAllSiswa(){
			$query = "Select * from siswa s join nationality n on s.id_nationality = n.id_nationality";
			return $this->db->getRows($query);
								  }
	public function readSiswa($id){
			$query = "Select* from siswa s join nationality n on s.id_nationality = n.id_nationality where id_siswa=".$id;
			return $this->db->getRows($query);
			                      
		}
	
	public function createSiswa($id_nationality, $nis, $full_name, $email, $date_ob, $foto){
		$query = "INSERT INTO siswa (id_nationality, nis, full_name, email, date_ob, foto)
				VALUES('$id_nationality', '$nis', '$full_name', '$email', '$date_ob', 'ff')";
		$this->db->putRows($query);
	}
	
	public function updateSiswa($id, $data){
		$name = $data['input_name'];
		$email = $data['input_email'];
		$nation = $data['input_nationality'];
		$foto = $data['foto'];
		
		$query = "update siswa set full_name='$name', email='$email', foto='$foto'";
		if ($nation > 0) $query.=", id_nationality='$nation'";
		$query.= "WHERE id_siswa=$id";
		$this->db->putRows($query);		
	}
	
	public function deleteSiswa($id) {
		$query = "DELETE FROM siswa WHERE id_siswa=$id";
		$this->db->putRows($query);
	}
}

?>