<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mcustomer extends CI_Model {

	// buat method untuk tampil data
	function get_data($token)
	{
		$this->db->select("id AS id_ctr, 
							kodepesanan AS kodepesanan_ctr, 
							nama AS nama_ctr, 
							telepon AS telepon_ctr, 
							konsumen AS konsumen_ctr");

		$this->db->from("tb_customer");

		// jika token terisi
        if(!empty($token))
        {
            $this->db->where("TO_BASE64(kodepesanan) = '$token' OR TO_BASE64(nama) = '$token' OR TO_BASE64(konsumen) = '$token'");
        }

		$this->db->order_by("kodepesanan","DESC");

		$query = $this->db->get()->result();
		return $query;
	}

	//buat method untuk hapus data
	function delete_data($token)
	{
		// cek apakah kodepesanan tersedia/tidak
		$this->db->select("kodepesanan");
		$this->db->from("tb_customer");
		$this->db->where("TO_BASE64(kodepesanan) = '$token'");

		$query = $this->db->get()->result();

		//jika kodepesanan ditemukan
		if(count($query) == 1)
		{
			// hapus data
			$this->db->where("TO_BASE64(kodepesanan) = '$token'");
			$this->db->delete("tb_customer");

			$hasil = 1;
		}

		// jika tidak ditemukan
		else
		{
			$hasil = 0;
		}

		//kirim nilai $hasil ke "controller" Customer
		return $hasil;
	}

	// buat method untuk simpan data
	function save_data($kodepesanan,$nama,$telepon,$konsumen,$token)
	{
		// cek apakah kodepesanan tersedia/tidak
		$this->db->select("kodepesanan");
		$this->db->from("tb_customer");
		$this->db->where("TO_BASE64(kodepesanan) = '$token'");

		$query = $this->db->get()->result();

		//jika kodepesanan ditemukan
		if(count($query) == 0)
		{
			//isi nilai untuk disimpan
			$data = array (
				"kodepesanan" => $kodepesanan,
				"nama" => $nama,
				"telepon" => $telepon,
				"konsumen" => $konsumen,
			);

			// simpan data
			$this->db->insert("tb_customer", $data);

			$hasil = 0;
		}

		else
		{
			$hasil = 1;
		}
		
		//kirim nilai $hasil ke "controller" Customer
		return $hasil;
	}

	function update_data($kodepesanan,$nama,$telepon,$konsumen,$token)
	{
		// cek apakah kodepesanan tersedia/tidak
		$this->db->select("kodepesanan");
		$this->db->from("tb_customer");
		$this->db->where("TO_BASE64(kodepesanan) != '$token' AND kodepesanan = '$kodepesanan'");

		$query = $this->db->get()->result();

		//jika kodepesanan ditemukan
		if(count($query) == 0)
		{
			//isi nilai untuk disimpan
			$data = array (
				"kodepesanan" => $kodepesanan,
				"nama" => $nama,
				"telepon" => $telepon,
				"konsumen" => $konsumen,
			);

			// pilih data yang di ubah
			$this->db->where("TO_BASE64(kodepesanan) = '$token'");
			// update data
			$this->db->update("tb_customer", $data);

			$hasil = 0;
		}

		else
		{
			$hasil = 1;
		}
		
		//kirim nilai $hasil ke "controller" Customer
		return $hasil;
	}
}
