<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KaryawanController extends CI_Controller {



	public function index()
	{
		$this->load->model('karyawan');
		$data['query'] = $this->karyawan->view_karyawan();
		$this->load->view('karyawan_list');
	}

	public function pelajaran()
	{
		$this->load->model('pelajaran');
		$data['query'] = $this->db->select('user.*, pelajaran.*')
						->from('user') //uniq table
						->join('pelajaran', 'user.id = pelajaran.user_id', 'inner')
						->get();
		$this->load->view('pelajaran_list', $data);
	}

	public function biodata()
	{
		$this->load->model('biodata');
		$data['query'] = $this->db->select('user.*, biodata.*')
						->from('user') //uniq table
						->join('biodata', 'user.id = biodata.user_id', 'inner')
						->get();
		$this->load->view('biodata_list', $data);
	}
}
