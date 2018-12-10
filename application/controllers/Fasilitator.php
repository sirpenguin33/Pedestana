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

    }
	
	public function Index()
	{
		$this->load->view('Layout/Header');
		$this->load->view('Fasilitator/Fasilitator1');
		$this->load->view('Layout/Footer');
		$this->load->model('model_fasilitator'); 
		$this->load->helper('url');
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

        $this->model_fasilitator->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }
		 public function edit($ID_fasilitator){
        $ID_fasilitator = $this->uri->segment(3);

        $data_edit = array(

            'title'     => 'Edit Data Pegawai',
            'data_pegawai' => $this->model_fasilitator->edit($ID_fasilitator),

        );

        $this->load->view('Admin/index.php', $data_edit);
    }
	
	    public function update()
    {
        $this->load->model("model_pegawai");
		$id = $this->input->post("id_pegawai");
		
        $data = array(

            'nama_depan'           => $this->input->post("nama_depan"),
            'nama_belakang'         => $this->input->post("nama_belakang"),
            'tanggal_lahir'    => $this->input->post("tanggal_lahir"),
            'jenis_kelamin'         => $this->input->post("jenis_kelamin"),
			'alamat'         => $this->input->post("alamat"),
            'gaji'    => $this->input->post("gaji"),
            'supervisor'         => $this->input->post("supervisor"),
			'departemen' => $this->input->post("departemen"));

     $save=$this->model_pegawai->update($data, $id);
	 if($save){
		 
		 $this->session->set_flashdata('msg_success',"berhasil");
	 }
	 else{
		 $this->session->set_flashdata('msg_error',"gagal");
	 }
			

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('pegawai/');

    }

    public function hapus($id_fasilitator)
    {
        $id['id_fasilitator'] = $this->uri->segment(3);

        $this->model_fasilitator->hapus($id);

        //redirect
        redirect('Admin/');

    }
	
	
}
