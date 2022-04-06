<?php

class M_Profile extends CI_Model{
    public function tampil_data()
    {
            return $this->db->get('tbl_profile');
    }
    function get_data_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_profile');
    }
}
?>