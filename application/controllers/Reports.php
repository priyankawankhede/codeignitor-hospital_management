<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller
{
    public function index()
    {
        $data['patients'] = $this->Product_model->patients();
        $data['reports'] = $this->Reports_model->view();

        $this->load->view('includes/header');
        $this->load->view('reports',$data);
        $this->load->view('includes/footer');
    }

    public function view_report()
    {
        $patients_id = $this->uri->segment('3');
        $data['view'] = $this->Reports_model->view_reports($patients_id);

        $this->load->view('includes/header');
        $this->load->view('view_reports',$data);
        $this->load->view('includes/footer');
    }

    public function add()
    {
        if(!empty($_FILES['image1']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image1']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image1'))
            {           
                $uploadData = $this->upload->data();
                $image1 = $uploadData['file_name'];

            }else
            {
               
                $image1 = '';
            }
        }
        else
        {           
            $image1 = '';
        }

        if(!empty($_FILES['image2']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image2']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image2'))
            {           
                $uploadData = $this->upload->data();
                $image2 = $uploadData['file_name'];

            }else
            {
               
                $image2 = '';
            }
        }
        else
        {           
            $image2 = '';
        }


        if(!empty($_FILES['image3']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image3']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image3'))
            {           
                $uploadData = $this->upload->data();
                $image3 = $uploadData['file_name'];

            }else
            {
               
                $image3 = '';
            }
        }
        else
        {           
            $image3 = '';
        }

        if(!empty($_FILES['image4']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image4']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image4'))
            {           
                $uploadData = $this->upload->data();
                $image4 = $uploadData['file_name'];

            }else
            {
               
                $image4 = '';
            }
        }
        else
        {           
            $image4 = '';
        }

        if(!empty($_FILES['image5']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image5']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image5'))
            {           
                $uploadData = $this->upload->data();
                $image5 = $uploadData['file_name'];

            }else
            {
               
                $image5 = '';
            }
        }
        else
        {           
            $image5 = '';
        }

        if(!empty($_FILES['image6']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image6']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image6'))
            {           
                $uploadData = $this->upload->data();
                $image6 = $uploadData['file_name'];

            }else
            {
               
                $image6 = '';
            }
        }
        else
        {           
            $image6 = '';
        }

        if(!empty($_FILES['image7']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image7']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image7'))
            {           
                $uploadData = $this->upload->data();
                $image7 = $uploadData['file_name'];

            }else
            {
               
                $image7 = '';
            }
        }
        else
        {           
            $image7 = '';
        }

        if(!empty($_FILES['image8']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image8']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image8'))
            {           
                $uploadData = $this->upload->data();
                $image8 = $uploadData['file_name'];

            }else
            {
               
                $image8 = '';
            }
        }
        else
        {           
            $image8 = '';
        }

        if(!empty($_FILES['image9']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image9']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image9'))
            {           
                $uploadData = $this->upload->data();
                $image9 = $uploadData['file_name'];

            }else
            {
               
                $image9 = '';
            }
        }
        else
        {           
            $image9 = '';
        }

        if(!empty($_FILES['image10']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image10']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image10'))
            {           
                $uploadData = $this->upload->data();
                $image10 = $uploadData['file_name'];

            }else
            {
               
                $image10 = '';
            }
        }
        else
        {           
            $image10 = '';
        }

        if(!empty($_FILES['image11']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image11']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image11'))
            {           
                $uploadData = $this->upload->data();
                $image1 = $uploadData['file_name'];

            }else
            {
               
                $image11 = '';
            }
        }
        else
        {           
            $image11 = '';
        }

        if(!empty($_FILES['image12']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image12']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image12'))
            {           
                $uploadData = $this->upload->data();
                $image12 = $uploadData['file_name'];

            }else
            {
               
                $image12 = '';
            }
        }
        else
        {           
            $image12 = '';
        }

        if(!empty($_FILES['image13']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image13']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image1'))
            {           
                $uploadData = $this->upload->data();
                $image13 = $uploadData['file_name'];

            }else
            {
               
                $image13 = '';
            }
        }
        else
        {           
            $image13 = '';
        }

        if(!empty($_FILES['image14']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image14']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image14'))
            {           
                $uploadData = $this->upload->data();
                $image14 = $uploadData['file_name'];

            }else
            {
               
                $image14 = '';
            }
        }
        else
        {           
            $image14 = '';
        }

        if(!empty($_FILES['image15']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['image15']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image15'))
            {           
                $uploadData = $this->upload->data();
                $image15 = $uploadData['file_name'];

            }else
            {
               
                $image15 = '';
            }
        }
        else
        {           
            $image15 = '';
        }

        echo $patients_id = $this->input->post('patients_id');
        $array = $this->Product_model->get_name_by_id($patients_id);
        $name = $array[0]->name;

        $data = array(
            'patients_id' => $patients_id,
            'patient_name' => $name,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'image5' => $image5,
            'image6' => $image6,
            'image7' => $image7,
            'image8' => $image8,
            'image9' => $image9,
            'image10' => $image10,
            'image11' => $image11,
            'image12' => $image12,
            'image13' => $image13,
            'image14' => $image14,
            'image15' => $image15
           
        );

        $this->Common_model->insert('reports',$data);
        redirect('reports/view');
    }

    public function update_image1()
    {
        $id = $this->input->post('id');

        if($_FILES['image1']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image1'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image1=$upload_data['file_name'];
                }
            }
        else{
                    $image1=$this->input->post('image1');
            }

        $data = array(
            'image1' => $image1
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image2()
    {
        $id = $this->input->post('id');

        if($_FILES['image2']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image2'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image2=$upload_data['file_name'];
                }
            }
        else{
                    $image2=$this->input->post('image2');
            }

        $data = array(
            'image2' => $image2
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image3()
    {
        $id = $this->input->post('id');

        if($_FILES['image3']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image3'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image3=$upload_data['file_name'];
                }
            }
        else{
                    $image3=$this->input->post('image3');
            }

        $data = array(
            'image3' => $image3
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image4()
    {
        $id = $this->input->post('id');

        if($_FILES['image4']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image4'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image4=$upload_data['file_name'];
                }
            }
        else{
                    $image3=$this->input->post('image3');
            }

        $data = array(
            'image4' => $image4
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }


    public function update_image5()
    {
        $id = $this->input->post('id');

        if($_FILES['image5']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image5'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image5=$upload_data['file_name'];
                }
            }
        else{
                    $image5=$this->input->post('image5');
            }

        $data = array(
            'image5' => $image5
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image6()
    {
        $id = $this->input->post('id');

        if($_FILES['image6']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image6'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image6=$upload_data['file_name'];
                }
            }
        else{
                    $image6=$this->input->post('image6');
            }

        $data = array(
            'image6' => $image6
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }


    public function update_image7()
    {
        $id = $this->input->post('id');

        if($_FILES['image7']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image7'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image7=$upload_data['file_name'];
                }
            }
        else{
                    $image7=$this->input->post('image7');
            }

        $data = array(
            'image7' => $image7
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }


    public function update_image8()
    {
        $id = $this->input->post('id');

        if($_FILES['image8']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image8'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image8=$upload_data['file_name'];
                }
            }
        else{
                    $image8=$this->input->post('image8');
            }

        $data = array(
            'image8' => $image8
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image9()
    {
        $id = $this->input->post('id');

        if($_FILES['image9']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image9'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image9=$upload_data['file_name'];
                }
            }
        else{
                    $image9=$this->input->post('image9');
            }

        $data = array(
            'image9' => $image9
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image10()
    {
        $id = $this->input->post('id');

        if($_FILES['image10']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image10'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image10=$upload_data['file_name'];
                }
            }
        else{
                    $image10=$this->input->post('image10');
            }

        $data = array(
            'image10' => $image10
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image11()
    {
        $id = $this->input->post('id');

        if($_FILES['image11']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image11'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image11=$upload_data['file_name'];
                }
            }
        else{
                    $image11=$this->input->post('image11');
            }

        $data = array(
            'image11' => $image11
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image12()
    {
        $id = $this->input->post('id');

        if($_FILES['image12']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image12'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image12=$upload_data['file_name'];
                }
            }
        else{
                    $image12=$this->input->post('image12');
            }

        $data = array(
            'image12' => $image12
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }


    public function update_image13()
    {
        $id = $this->input->post('id');

        if($_FILES['image13']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image13'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image13=$upload_data['file_name'];
                }
            }
        else{
                    $image13=$this->input->post('image13');
            }

        $data = array(
            'image13' => $image13
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image14()
    {
        $id = $this->input->post('id');

        if($_FILES['image14']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image14'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image14=$upload_data['file_name'];
                }
            }
        else{
                    $image14=$this->input->post('image14');
            }

        $data = array(
            'image14' => $image14
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }

    public function update_image15()
    {
        $id = $this->input->post('id');

        if($_FILES['image15']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('image15'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $image15=$upload_data['file_name'];
                }
            }
        else{
                    $image15=$this->input->post('image15');
            }

        $data = array(
            'image15' => $image15
        );

        $this->Common_model->update('reports',$data,'id',$id);
        redirect('reports/view');
    }
}