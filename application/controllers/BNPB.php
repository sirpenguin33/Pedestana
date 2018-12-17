<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BNPB extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->model('model_bnpb');
		$this->load->model('model_desa');
		$this->load->model('model_login');
		$this->load->model('model_laporan');
		$this->load->helper('form');
    }
	public function index()
	{
		$jumlah_laporan=$this->model_laporan->get_new()->jumlah;
		$data=array(
		'data_laporan' => $this->model_laporan->get_all(),
		'jumlah_laporan' => $jumlah_laporan,
		);
		$data['data_Kaltim']=$this->model_desa->get_Daerah("Kalimantan Timur");
			$data['data_Kalbar']=$this->model_desa->get_Daerah("Kalimantan Barat");
			$data['data_Kalteng']=$this->model_desa->get_Daerah("Kalimantan Tengah");
			$data['data_Kalsel']=$this->model_desa->get_Daerah("Kalimantan Selatan");
			$data['data_Aceh']=$this->model_desa->get_Daerah("Aceh");
			$data['data_Sumut']=$this->model_desa->get_Daerah("Sumatera Utara");
			$data['data_Riau']=$this->model_desa->get_Daerah("Riau");
			$data['data_Sumbar']=$this->model_desa->get_Daerah("Sumatera Barat");
			$data['data_Jambi']=$this->model_desa->get_Daerah("Jambi");
			$data['data_Bengkulu']=$this->model_desa->get_Daerah("Bengkulu");
			$data['data_Sumsel']=$this->model_desa->get_Daerah("Sumatera Selatan");
			$data['data_Lampung']=$this->model_desa->get_Daerah("Lampung");
			$data['data_Babel']=$this->model_desa->get_Daerah("Bangka Belitung");
			$data['data_Jabar']=$this->model_desa->get_Daerah("Jawa Barat");
			$data['data_Jateng']=$this->model_desa->get_Daerah("Jawa Tengah");
			$data['data_Semarang']=$this->model_desa->get_Daerah("Semarang");
			$data['data_Yogyakarta']=$this->model_desa->get_Daerah("Yogyakarta");
			$data['data_Jatim']=$this->model_desa->get_Daerah("Kalimantan Timur");
			$data['data_Bali']=$this->model_desa->get_Daerah("Bali");
			$data['data_NTB']=$this->model_desa->get_Daerah("Nusa Tenggara Barat");
			$data['data_Banten']=$this->model_desa->get_Daerah("Banten");
			$data['data_NTT']=$this->model_desa->get_Daerah("Nusa Tenggara Timur");
			$data['data_Maluku']=$this->model_desa->get_Daerah("Maluku");
			$data['data_Papua']=$this->model_desa->get_Daerah("Papua");
			$data['data_IrianJayaBarat']=$this->model_desa->get_Daerah("Irian Jaya Barat");
			$data['data_MalukuUtara']=$this->model_desa->get_Daerah("Maluku Utara");
			$data['data_Sulut']=$this->model_desa->get_Daerah("Sulawesi Utara");
			$data['data_Gorontalo']=$this->model_desa->get_Daerah("Gorontalo");
			$data['data_Sulteng']=$this->model_desa->get_Daerah("Sulawesi Tengah");
			$data['data_Sulsel']=$this->model_desa->get_Daerah("Sulawesi Selatan");
			$data['data_Sulbar']=$this->model_desa->get_Daerah("Sulawesi Barat");
			$data['data_Kaltim']=$this->model_desa->get_Daerah("Kalimantan Timur");
			$data['data_Kalsel']=$this->model_desa->get_Daerah("Kalimantan Selatan");
			$data['data_Kalteng']=$this->model_desa->get_Daerah("Kalimantan Tengah");
		$this->load->view('BNPB/index',$data);
		 
	}
	public function verif(){
		$ID_desa = $this->uri->segment(5);
		$ID_bnpb = $this->uri->segment(4);
		$ID_laporan=$this->uri->segment(3);
		$data=array(
		'data_laporan' =>$this->model_laporan->edit($ID_laporan), 
		'ID_bnpb' => $ID_bnpb,
		'ID_desa' => $ID_desa,
		);
		
		
		
		$this->load->view('BNPB/verif',$data);
		
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
		$id_bnpb=$this->model_bnpb->simpan($data);
		$data2=array(
		'username' => $data['Nama_bnpb']."@"."bnpb",
		'password' => md5("bnpb"),
		'job' => "bnpb",
		'ID_bnpb'=>$id_bnpb,
		);

        
		$this->model_login->simpan($data2);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }
	 public function edit($ID_bnpb){
        $ID_bnpb = $this->uri->segment(3);

        $data_edit = array(

            'title'     => 'Edit Data Pegawai',
            'data_bnpb' => $this->model_bnpb->edit($ID_bnpb),

        );

        $this->load->view('Admin/edit_bnpb.php', $data_edit);
    }
	
	    public function update()
    {
		$id = $this->input->post("id_bnpb");
		
        $data = array(

            'Nama_bnpb'       => $this->input->post("Nama_bnpb"),
            'Tanggal_Lahir'         => $this->input->post("Tanggal_Lahir"),
            'Umur'    => $this->input->post("Umur"),
            'Pendidikan'         => $this->input->post("Pendidikan"),
			'No_Hp' => $this->input->post("No_Hp"),);

     $save=$this->model_bnpb->update($data, $id);

			

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }

    public function hapus($id_bnpb)
    {
        $id['id_bnpb'] = $this->uri->segment(3);

        $this->model_bnpb->hapus($id);

        //redirect
        redirect('Admin/');

    }
}
