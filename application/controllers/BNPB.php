<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BNPB extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->model('model_bnpb');
    }
	public function index()
	{
		$this->load->view('BNPB/index');
		 
	}
	
	    public function simpan()
    {
        $data = array(

            'Nama_bnpb'       => $this->input->post("Nama_bnpb"),
            'Tanggal_Lahir'         => $this->input->post("Tanggal_Lahir"),
            'Umur'    => $this->input->post("Umur"),
            'Pendidikan'         => $this->input->post("Pendidikan"),
			'No_Hp' => $this->input->post("No_Hp"),
			);

        $this->model_bnpb->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }
}
