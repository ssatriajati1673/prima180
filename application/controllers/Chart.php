<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function chart_data() {
		$data = $this->Rekap_model->chart_database();
		echo json_encode($data);
	}
}