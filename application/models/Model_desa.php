<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_desa extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('desa')
                 ->order_by('ID_desa', 'ASCD')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("desa", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($ID)
    {

        $query = $this->db->where("ID_desa", $ID)
                ->get("desa");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('ID_desa',$ID)->update("desa", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($ID)
    {

        $query = $this->db->delete("desa", $ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}