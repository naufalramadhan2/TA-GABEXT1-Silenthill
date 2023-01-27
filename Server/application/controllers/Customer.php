<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'controllers/Token.php';

class Customer extends Token 
{
	// buat construct
	public function __construct()
        {
			parent::__construct();
			
            // panggil model "Mcustomer"
			$this->load->model("Mcustomer","model",TRUE);
        }
	// buat fungsi "GET"
		function service_get()
		{
			if ($this->authtoken() == 0) {
				return $this->response(array("result" => 0, "error" => "Kode Signature Tidak Sesuai !"), 200);
			} else {
				// ambil paramater token "(kodepesanan)"
				$token = $this->get("kodepesanan");

				// panggil fungsi "get_data"
				$hasil = $this->model->get_data(base64_encode($token));

				$this->response(array("customer" => $hasil, "result" => 1, "error" => ""), 200);
			}
		}

		function service_post()
		{
			if ($this->authtoken() == 0) {
				return $this->response(array("result" => 0, "error" => "Kode Signature Tidak Sesuai !"), 200);
			} else {

				// ambil parameter data
				$data = array (
					"kodepesanan" => $this->post("kodepesanan"),
					"nama" => $this->post("nama"),
					"telepon" => $this->post("telepon"),
					"konsumen" => $this->post("konsumen"),
					"token" => base64_encode($this->post("kodepesanan")),
				);

				// $data["kodepesanan"] = $this->post("kodepesanan");
				// $data["nama"] = $this->post("nama");

				// $kodepesanan = $this->post("kodepesanan");
				// $nama = $this->post("nama");
				
				// panggil fungsi "save_data"
				$hasil = $this->model->save_data($data["kodepesanan"], $data["nama"], $data["telepon"], $data["konsumen"], $data["token"]);

				// jika proses post berhasil
				if ($hasil == 0)
				{
					$this->response(array("status" => "Data Customer Berhasil Disimpan . . .","result" => 1, "error" => ""), 200);
				}
				
				// jika proses post gagal
				else
				{
					$this->response(array("status" => "Data Customer Gagal Disimpan !","result" => 1, "error" => ""), 200);
				}
			}
		}
		function service_put()
		{
			if ($this->authtoken() == 0) {
				return $this->response(array("result" => 0, "error" => "Kode Signature Tidak Sesuai !"), 200);
			} else {
				// ambil parameter data
				$data = array (
					"kodepesanan" => $this->put("kodepesanan"),
					"nama" => $this->put("nama"),
					"telepon" => $this->put("telepon"),
					"konsumen" => $this->put("konsumen"),
					"token" => base64_encode($this->put("token")),
				);

				// panggil fungsi "update_data"
				$hasil = $this->model->update_data($data["kodepesanan"], $data["nama"], $data["telepon"], $data["konsumen"], $data["token"]);
				// jika hasil = 0
				if ($hasil == 0) {
					$this->response(array("status" => "Data Customer Berhasil Diubah", "result" => 1, "error" => ""), 200);
				}
				// jika hasil != 0
				else {
					$this->response(array("status" => "Data Customer Gagal Diubah !", "result" => 1, "error" => ""), 200);
				}
			}
		}
		function service_delete()
		{
			if ($this->authtoken() == 0) {
				return $this->response(array("result" => 0, "error" => "Kode Signature Tidak Sesuai !"), 200);
			} else {
			// ambil parameter token "(kodepesanan)"
			$token = $this->delete("kodepesanan");
			// panggil fungsi "delete_data"
			$hasil = $this->model->delete_data(base64_encode($token));
			// jika proses delete berhasil
			if ($hasil == 1) {
				$this->response(array("status" => "Data Customer Berhasil Dihapus", "result" => 1, "error" => ""), 200);
			}
			// jika proses delete gagal
			else {
				$this->response(array("status" => "Data Customer Gagal Dihapus !", "result" => 1, "error" => ""), 200);
			}
		}
	}
}
