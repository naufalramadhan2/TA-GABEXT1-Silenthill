<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	
	var $key_name = 'KEY-API';
	var $key_value = 'RESTAPI';
	var $key_bearer = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE2NzQ4NTE5MzF9.E3E_JsWLmfA5LVrUyy_Tzfh9fT18qkDhbGRnN1oSvC0';
	
	public function index()
	{
		$this->client->http_header($this->key_bearer);

		$data["tampil"] = json_decode($this->client->simple_get(APICUSTOMER, [$this->key_name => $this->key_value]));

		if ($data["tampil"]->result == 0) {
			echo"<script>location.href='https://google.com'</script>";
		} else {
			$this->load->view('vw_customer', $data);
		}
	}

	function setDelete()
	{
		$this->client->http_header($this->key_bearer);

		// buat variabel json
		$json = file_get_contents("php://input");
		$hasil = json_decode($json);


		$delete = json_decode($this->client->simple_delete(APICUSTOMER, array("kodepesanan" => $hasil->kodepesanannya, $this->key_name => $this->key_value)));

		if ($delete->result == 0) {
			echo json_encode(array("statusnya" => $delete->error));
		} else {
			echo json_encode(array("statusnya" => $delete->status));
		}
	}

	function dashboard()
	{
		$data['meta'] = [
			'title' => 'Dashboard',
		];

		$this->load->view('vw_dashboard');
	}

	
	function produk()
	{
		$data['meta'] = [
			'title' => 'Produk',
		];

		$this->load->view('vw_produk');
	}
	
	function sablon()
	{
		$data['meta'] = [
			'title' => 'Sablon',
		];

		$this->load->view('vw_sablon');
	}
	
	function pemesanan()
	{
		$this->client->http_header($this->key_bearer);

		$data["tampil"] = json_decode($this->client->simple_get(APICUSTOMER, [$this->key_name => $this->key_value]));

		if ($data["tampil"]->result == 0) {
			echo"<script>location.href='https://google.com'</script>";
		} else {
			$this->load->view('vw_pemesanan', $data);
		}
	}

	function addCustomer()
	{
		$this->load->view('en_customer');
	}

	function setSave()
	{
		$this->client->http_header($this->key_bearer);
		// baca nilai dari fetch
		$data = array (
			"kodepesanan" => $this->input->post("kodepesanannya"),
			"nama" => $this->input->post("namanya"),
			"telepon" => $this->input->post("teleponnya"),
			"konsumen" => $this->input->post("konsumennya"),
			"token" => $this->input->post("kodepesanannya"),
			$this->key_name => $this->key_value
		);

		$save = json_decode($this->client->simple_post(APICUSTOMER, $data));

		// kirim hasil ke "en_customer"
		if ($save->result == 0) {
			echo json_encode(array("statusnya" => $save->error));
		} else {
			echo json_encode(array("statusnya" => $save->status));
		}
	}
	function updateCustomer()
	{
		$this->client->http_header($this->key_bearer);

		// ambil nilai kode pesananan 
		$token = $this->uri->segment(3);

		$tampil = json_decode($this->client->simple_get(APICUSTOMER, array("kodepesanan" => $token, $this->key_name => $this->key_value)));

		if ($tampil->result == 0) {
			echo $tampil->error;
		} else {

			foreach ($tampil->customer as $result) {
				// echo $result->nama_ctr."<br>";
				$data = array(
					"kodepesanan" => $result->kodepesanan_ctr,
					"nama" => $result->nama_ctr,
					"telepon" => $result->telepon_ctr,
					"konsumen" => $result->konsumen_ctr,
					"token" => $token,
				);
			}
			$this->load->view('up_customer', $data);
		}
	}


// buat fungsi untuk ubah data customer
	function setUpdate()
	{
		$this->client->http_header($this->key_bearer);

		// baca nilai dari fetch
		$data = array(
			"kodepesanan" => $this->input->post("kodepesanannya"),
			"nama" => $this->input->post("namanya"),
			"telepon" => $this->input->post("teleponnya"),
			"konsumen" => $this->input->post("konsumennya"),
			"token" => $this->input->post("tokennya"),
			$this->key_name => $this->key_value
		);

		$update = json_decode($this->client->simple_put(APICUSTOMER, $data));

		// kirim hasil ke "up_customer"
		if ($update->result == 0) {
			echo json_encode(array("statusnya" => $update->error));
		} else {
			echo json_encode(array("statusnya" => $update->status));
		}
	}
}

