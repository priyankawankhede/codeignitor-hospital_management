<?php 

Class Reports_model extends CI_Model{

    public function view()
    {
        $this->db->select('*');
        $this->db->from('reports');
        $this->db->order_by('id','DESC');
        $query = $this->db->get(); 
        return $query->result_array();
    }

    public function view_reports($patients_id)
    {
        return $query = $this->db->query("select * from reports where patients_id = '$patients_id'")->result_array();
    }

} 

?>