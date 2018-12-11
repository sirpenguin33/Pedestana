<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller 

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

            
			'data_desa' => $this->model_desa->get_all(),

        );
		$this->load->view('Fasilitator/index',$data);

	}

    public function simpan()
    {
        $data = array(

            'Nama_desa'       => $this->input->post("Nama_desa"),
            'Lokasi'         => $this->input->post("Lokasi"),
            'Kategori'    => $this->input->post("Kategori"),
			);
			

        $this->model_desa->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }
		 public function edit($ID_desa){
        $ID_desa = $this->uri->segment(3);

        $data_edit = array(

            'title'     => 'Edit Data Pegawai',
            'data_desa' => $this->model_desa->edit($ID_desa),

        );

        $this->load->view('Admin/edit_desa.php', $data_edit);
    }
	
	    public function update()
    {
		$id = $this->input->post("id_desa");
		
        $data = array(

            'Nama_desa'           => $this->input->post("Nama_desa"),
            'Lokasi'         => $this->input->post("Lokasi"),
            'Kategori'    => $this->input->post("Kategori"),);
     
	 
	 $save=$this->model_desa->update($data, $id);
	 
			

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }

    public function hapus($id_desa)
    {
        $id['id_desa'] = $this->uri->segment(3);

        $this->model_desa->hapus($id);

        //redirect
        redirect('Admin/');

    }
	
	
}
