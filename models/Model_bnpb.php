<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_bnpb extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('bnpb')
                 ->order_by('ID_bnpb', 'ASCD')
                 ->get();
        return $query->result();
    }
	public function get_user($id){
		$query=$this->db->select("*")
				->from('bnpb')
				->where('ID_bnpb',$id)
				->get();
		return $query->row();
		
	}

    public function simpan($data)
    {

        $query = $this->db->insert("bnpb", $data);
		$id_bnpb=$this->db->insert_id();
        
            return $id_bnpb;

    }

    public function edit($ID)
    {

        $query = $this->db->where("ID_bnpb", $ID)
                ->get("bnpb");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('ID_bnpb',$ID)->update("bnpb", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($ID)
    {

        $query = $this->db->delete("bnpb", $ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}