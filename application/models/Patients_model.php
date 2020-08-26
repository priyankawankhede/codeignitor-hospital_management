<?php  
 class Patients_model extends CI_Model  
 { 
    public function view()
    {
        $this->db->select('*');
        $this->db->from('patients');
        $this->db->order_by('id','DESC');
        $query = $this->db->get(); 
        return $query->result_array();
    }

    public function daily_patient()
    {
        $date = date('Y-m-d');
        return $query = $this->db->query("select count(id) as id from patients where date = '$date' ")->result_array();
    }

    public function monthly_patient()
    {
         $query_date = date('Y-m-d');      
         $start_date = date('Y-m-01', strtotime($query_date));      
         $end_date = date('Y-m-t', strtotime($query_date));

        return $query = $this->db->query("select count(id) as id from patients where date between '$start_date' and '$end_date' ")->result_array();
    }

    public function total_patient()
    {
    
        return $query = $this->db->query("select count(id) as id from patients")->result_array();
    }

    public function monthly_patient_fees()
    {
         $query_date = date('Y-m-d');      
         $start_date = date('Y-m-01', strtotime($query_date));      
         $end_date = date('Y-m-t', strtotime($query_date));

        return $query = $this->db->query("select SUM(fees) as fees from patients where date between '$start_date' and '$end_date' ")->result_array();
    }

    public function daily_follow_up()
    {
        $date = date('Y-m-d');
        return $query = $this->db->query("select count(id) as id from follow_up where date = '$date' ")->result_array();
    }

    public function monthly_follow_up()
    {
         $query_date = date('Y-m-d');      
         $start_date = date('Y-m-01', strtotime($query_date));      
         $end_date = date('Y-m-t', strtotime($query_date));

         return $query = $this->db->query("select count(id) as id from follow_up where date between '$start_date' and '$end_date' ")->result_array();
    }

    public function total_follow_up()
    {
        
         return $query = $this->db->query("select count(id) as id from follow_up ")->result_array();
    }
 }
 ?>