<?php  
 class Product_model extends CI_Model  
 { 
    public function view()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('id','DESC');
        $query = $this->db->get(); 
        return $query->result_array();
    }

    public function patients()
    {
        $this->db->select('*');
        $this->db->from('patients');        
        $query = $this->db->get(); 
        return $query->result();
    }

    public function get_name_by_id($patients_id)
    {
        $this->db->select('*');
        $this->db->from('patients');
        $this->db->where('id',$patients_id);        
        $query = $this->db->get(); 
        return $query->result();
    }

    public function daily_product()
    {
        $date = date('Y-m-d');
        return $query = $this->db->query("select count(id) as id from product where date = '$date' ")->result_array();
    }

    public function monthly_product()
    {
         $query_date = date('Y-m-d');      
         $start_date = date('Y-m-01', strtotime($query_date));      
         $end_date = date('Y-m-t', strtotime($query_date));

        return $query = $this->db->query("select count(id) as id from product where date between '$start_date' and '$end_date' ")->result_array();
    }

    public function total_product()
    {
    
        return $query = $this->db->query("select count(id) as id from product")->result_array();
    }

    public function daily_amount_product()
    {
        $date = date('Y-m-d');
        return $query = $this->db->query("select Sum(total) as total from product where date = '$date' ")->result_array();
    }

    public function total_product_amount()
    {
    
        return $query = $this->db->query("select SUM(total) as total from product")->result_array();
    }

    public function daily_patient_fees()
    {
        $date = date('Y-m-d');
        return $query = $this->db->query("select Sum(fees) as fees from patients where date = '$date' ")->result_array();
    }

    public function total_patient_fees()
    {
    
        return $query = $this->db->query("select SUM(fees) as fees from patients")->result_array();
    }

    public function monthly_product_amount()
    {
         $query_date = date('Y-m-d');      
         $start_date = date('Y-m-01', strtotime($query_date));      
         $end_date = date('Y-m-t', strtotime($query_date));

        return $query = $this->db->query("select SUM(total) as total from product where date between '$start_date' and '$end_date' ")->result_array();
    }
 }
 ?>