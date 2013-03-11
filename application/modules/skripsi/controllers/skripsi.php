<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skripsi extends CI_Controller {


	function index()
	{
 		$this->load->view('skripsi/mhs/page/header');
		$this->load->view('skripsi/mhs/page/content');		
		$this->load->view('skripsi/mhs/homeskripsi/contentspace');
		$this->load->view('skripsi/mhs/page/footer');
	}


	function getskripsi(){
		$this->load->view('skripsi/mhs/page/header');
		$this->load->view('skripsi/mhs/page/content');		
		$this->load->view('skripsi/mhs/homeskripsi/contentspace');		
		$this->load->view('skripsi/mhs/page/footer');	
	}
	
	function getuploadproposal(){
		$this->load->view('skripsi/mhs/page/header');
		$this->load->view('skripsi/mhs/page/content');
		$this->load->view('skripsi/mhs/proposal/uploadproposal');
		$this->load->view('skripsi/mhs/page/footer');
	}
	
	function getbimbingan(){
		$this->load->view('skripsi/mhs/page/header');
		$this->load->view('skripsi/mhs/page/content');
		$this->load->view('skripsi/mhs/bimbingan/proses');
		$this->load->view('skripsi/mhs/page/footer');
	}

	
}
