<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitator extends CI_Controller 

{
	
	   public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->model('model_fasilitator');
		$this->load->model('model_bnpb');
		$this->load->model('model_laporan');
		$this->load->model('model_desa');
		$this->load->model('model_login');
		$this->load->helper('form');

    }
	
	public function Index()
	{
				 $data = array(

            
            'data_fasilitator' => $this->model_fasilitator->get_all(),
			'data_desa' => $this->model_desa->get_all(),

        );
		$this->load->view('Fasilitator/index',$data);

	}

	public function Fasilitator2()
	{
		$this->load->view('Layout/Header');
		$this->load->view('Fasilitator/Fasilitator2');
		$this->load->view('Layout/Footer');
	}
    public function simpan()
    {
        $data = array(

            'Nama_fasilitator'       => $this->input->post("Nama_fasilitator"),
            'Tanggal_Lahir'         => $this->input->post("Tanggal_Lahir"),
            'Umur'    => $this->input->post("Umur"),
            'Pendidikan'         => $this->input->post("Pendidikan"),
			'No_Hp' => $this->input->post("No_Hp"),
			);
			
		$id_fasilitator=$this->model_fasilitator->simpan($data);
		$data2=array(
		'username' => $data['Nama_fasilitator']."@"."fasilitator",
		'password' => md5("fasilitator"),
		'job' => "fasilitator",
		'ID_fasilitator' => $id_fasilitator,
		);

        
		$this->model_login->simpan($data2);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }
		 public function edit($ID_fasilitator){
        $ID_fasilitator = $this->uri->segment(3);

        $data_edit = array(

            'title'     => 'Edit Data Pegawai',
            'data_fasilitator' => $this->model_fasilitator->edit($ID_fasilitator),

        );

        $this->load->view('Admin/edit_fasilitator.php', $data_edit);
    }
	
	    public function update()
    {
		$id = $this->input->post("id_fasilitator");
		
        $data = array(

            'Nama_fasilitator'       => $this->input->post("Nama_fasilitator"),
            'Tanggal_Lahir'         => $this->input->post("Tanggal_Lahir"),
            'Umur'    => $this->input->post("Umur"),
            'Pendidikan'         => $this->input->post("Pendidikan"),
			'No_Hp' => $this->input->post("No_Hp"),);

     $save=$this->model_fasilitator->update($data, $id);

			

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }

    public function hapus($id_fasilitator)
    {
        $id['id_fasilitator'] = $this->uri->segment(3);

        $this->model_fasilitator->hapus($id);

        //redirect
        redirect('Admin/');

    }
	
	
}
