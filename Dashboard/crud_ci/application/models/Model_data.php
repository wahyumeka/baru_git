<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data extends CI_Model{

	public function load_karyawan(){
		$sql = $this->db->query("SELECT * FROM anggota WHERE flag = 1");
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nama = $this->db->escape($post['nama']);
		$pangkat = $this->db->escape($post['pangkat']);
		$jabatan = $this->db->escape($post['jabatan']);
		$nrp = $this->db->escape($post['nrp']);
		$kesatuan = $this->db->escape($post['kesatuan']);
		$matra = $this->db->escape($post['matra']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);

		$sql = $this->db->query("INSERT INTO anggota VALUES (NULL, $nama, $pangkat, $nrp, $jabatan, $kesatuan, $matra, $alamat, $email, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM anggota WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$nama = $this->db->escape($post['nama']);
		$pangkat = $this->db->escape($post['pangkat']);
		$nrp = $this->db->escape($post['nrp']);
		$jabatan = $this->db->escape($post['jabatan']);
		$kesatuan = $this->db->escape($post['kesatuan']);
		$matra = $this->db->escape($post['matra']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);

		$sql = $this->db->query("UPDATE anggota SET name = $nama, pangkat = $pangkat, nrp = $nrp, jabatan = $jabatan, kesatuan = $kesatuan, matra = $matra, alamat = $alamat, email = $email WHERE id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("UPDATE anggota SET flag = 0 WHERE id = ".intval($id));
	}	

}