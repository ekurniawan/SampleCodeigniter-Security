<?php 
class Mahasiswa_model extends CI_Model {
    public function get_all_mahasiswa(){
        $query = $this->db->get("mahasiswa");
        return $query->result();
    }

    public function insert_mahasiswa($data){
        $this->db->insert('mahasiswa',$data);
    }
}
?>

