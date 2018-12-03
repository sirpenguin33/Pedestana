<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitator extends CI_Controller 

{
	function Index()
	{
		$this->load->view('Layout/Header');
		$this->load->view('Fasilitator/Fasilitator1');
		$this->load->view('Layout/Footer');
	}

	function Fasilitator2()
	{
		$this->load->view('Layout/Header');
		$this->load->view('Fasilitator/Fasilitator2');
		$this->load->view('Layout/Footer');
	}

}
