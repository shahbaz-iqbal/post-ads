<?php
Class Posts extends CI_Model {
    
    private $table = "post";
    
    function insert_user($data) {
        $result = $this->db->insert($this->table, $data);
        return $result;
    }
    
    function get_All_users() {
        $this->db->order_by('id','DESC');
        $query = $this->db->get($this->table);
        $result = $query->result();
        return $result;
    }
    
    function get_user_by_id($id) {
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        $result = $query->row();
        return $result;
    }
    
    function update_user($id,$data) {
        $this->db->where('id', $id);
        $result = $this->db->update($this->table, $data);
        return $result;
    }
    
    function delete_user($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete($this->table);
        return $result;
    }

}
