<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KaryawanController extends CI_Controller {

	public function index()
	{
		$this->load->view('karyawan_list');
	}
}
