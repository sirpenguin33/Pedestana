<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_laporan extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*",'bnpb.Nama_bnpb','fasilitator.Nama_fasilitator','desa.Nama_desa')
                 ->from('laporan')
                 ->order_by('ID', 'DESC')
				 ->join('bnpb','bnpb.ID_bnpb=laporan.ID_BNPB')
				 ->join('fasilitator','fasilitator.ID_fasilitator=laporan.ID_FASILITATOR')
				 ->join('desa','desa.ID_desa=laporan.ID_DESA') 
                 ->get();
        return $query->result();
    }
	public function get_indikator(){
		$query=$this->db->select("*")
				->from('indikator')
				->get();
		return $query->result();
		
	}

    public function simpan($data)
    {

        $query = $this->db->insert("laporan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
	public function get_new(){
		$query=$this->db->select('COUNT(Status) AS jumlah')
					->from('laporan')
					->where('Status','Waiting')
					->get();
		return $query->row();
		
	}

    public function edit($ID)
    {

        $query = $this->db->where("ID", $ID)
                ->get("laporan");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('ID',$ID)->update("laporan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($ID)
    {

        $query = $this->db->delete("laporan", $ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}