<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_fasilitator extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('fasilitator')
                 ->order_by('ID_fasilitator', 'ASCD')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("fasilitator", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
	
	public function search($keyword){
		$query=$this->db->select('*')
			    ->from('Fasilitator')
				->like('Nama',$keyword)
				->or_like('No_HP')
				->or_like('Umur')
				->or_like('Pendidikan')
				->get();
		return $query->result();
		
	}

    public function edit($ID)
    {

        $query = $this->db->where("ID_fasilitator", $ID)
                ->get("fasilitator");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('ID',$ID)->update("fasilitator", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($ID)
    {

        $query = $this->db->delete("fasilitator", $ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}