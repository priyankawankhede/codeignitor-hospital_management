<?php  
 class Login_model extends CI_Model  
 {  
      function user_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('admin');  
           
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
 }  

 ?>

 
<!-- designed and developed by priyanka wankhede -->