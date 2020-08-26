<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {        
        $this->load->view('login');          
    }

    public function user_login()
    {
           $username = $this->input->post('username');
           $password = $this->input->post('password'); 
           
           $result = $this->Login_model->user_login($username,$password);

           if($result == 0)
           {
                $data = array(
                     'errors' => 'Username and Password is invalid'
                );

                $this->session->set_flashdata($data);

                redirect($_SERVER['HTTP_REFERER']);
           }
           else
           {
                if($result)
                {
                     $user_data = array(
                          'username' => $result[0]->$username
                     );

                     $this->session->set_userdata($user_data);
                     $this->session->set_flashdata('login','success');

                     redirect('dashboard');

                }
                else
                {
                     $this->session->set_flashdata('logout','error');
                }
           }
        
    }

    public function logout()
    {        
          $this->session->unset_userdata('username');   
		$this->session->sess_destroy();
		echo "<script>alert('Logout Successfull !');document.location='".base_url('Login')."'</script>";
     }

}
?>



<!-- designed and developed by priyanka wankhede -->
