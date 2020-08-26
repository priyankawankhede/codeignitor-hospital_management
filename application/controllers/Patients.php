<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller
{
    public function index()
    {
        $data['patient'] = $this->Patients_model->view();

        $this->load->view('includes/header');
        $this->load->view('patients',$data);
        $this->load->view('includes/footer');
    }

    public function add()
    {
        if(!empty($_FILES['photo']['name']))
        {          
            $image_path = "./images/";
            $config['upload_path'] = $image_path;
            $config['allowed_types'] = '*';
            $config['file_name'] = $_FILES['photo']['name'];            
            
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('photo'))
            {           
                $uploadData = $this->upload->data();
                $photo = $uploadData['file_name'];

            }else
            {
               
                $photo = '';
            }
        }
        else
        {           
            $photo = '';
        }

        $data = array(
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'sex' => $this->input->post('sex'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'weight' => $this->input->post('weight'),
            'date' => $this->input->post('date'),
            'diagnosis' => $this->input->post('diagnosis'),
            'prescription' => $this->input->post('prescription'),
            'district' => $this->input->post('district'),
            'occupation' => $this->input->post('occupation'),
            'present_co' => $this->input->post('present_co'),
            'mental' => $this->input->post('mental'),
            'apetite' => $this->input->post('apetite'),
            'thirst' => $this->input->post('thirst'),
            'bowel' => $this->input->post('bowel'),
            'urine' => $this->input->post('urine'),
            'sleep' => $this->input->post('sleep'),
            'menses' => $this->input->post('menses'),
            'habits' => $this->input->post('habits'),
            'bp' => $this->input->post('bp'),
            'pulse' => $this->input->post('pulse'),
            'temperature' => $this->input->post('temperature'),            
            'tongue' => $this->input->post('tongue'),
            'dreams' => $this->input->post('dreams')   ,
            'past_ho' => $this->input->post('past_ho'),
            // 'family_ho' => $this->input->post('family_ho'),
            'father' => $this->input->post('father'),
            'mother' => $this->input->post('mother'),
            'grandfather' => $this->input->post('grandfather'),
            'grandmother' => $this->input->post('grandmother'),
            'grandfather1' => $this->input->post('grandfather1'),
            'grandmother1' => $this->input->post('grandmother1'),
            // 'type' => $this->input->post('type')
            'photo' => $photo
        );

        $this->Common_model->insert('patients',$data);

        redirect('patients/view');
    }

    public function update()
    {
        $id = $this->input->post('id');

        if($_FILES['photo']['name']!="")
            {
                $config['upload_path'] = './images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('photo'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $upload_data=$this->upload->data();
                    $photo=$upload_data['file_name'];
                }
            }
        else{
                    $photo=$this->input->post('photo');
            }


        $data = array(
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'sex' => $this->input->post('sex'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'weight' => $this->input->post('weight'),
            'date' => $this->input->post('date'),
            'diagnosis' => $this->input->post('diagnosis'),
            'prescription' => $this->input->post('prescription'),
            'district' => $this->input->post('district'),
            'occupation' => $this->input->post('occupation'),
            'present_co' => $this->input->post('present_co'),
            'mental' => $this->input->post('mental'),
            'apetite' => $this->input->post('apetite'),
            'thirst' => $this->input->post('thirst'),
            'bowel' => $this->input->post('bowel'),
            'urine' => $this->input->post('urine'),
            'sleep' => $this->input->post('sleep'),
            'menses' => $this->input->post('menses'),
            'habits' => $this->input->post('habits'),
            'bp' => $this->input->post('bp'),
            'pulse' => $this->input->post('pulse'),
            'temperature' => $this->input->post('temperature'),            
            'tongue' => $this->input->post('tongue'),
            'dreams' => $this->input->post('dreams'),
            'past_ho' => $this->input->post('past_ho'),
            // 'family_ho' => $this->input->post('family_ho'),
            'father' => $this->input->post('father'),
            'mother' => $this->input->post('mother'),
            'grandfather' => $this->input->post('grandfather'),
            'grandmother' => $this->input->post('grandmother'),
            'grandfather1' => $this->input->post('grandfather1'),
            'grandmother1' => $this->input->post('grandmother1'),
            'photo' => $photo
            // 'type' => $this->input->post('type')   
        );

        $this->Common_model->update('patients',$data,'id',$id);

        $data1 = array(
            'patients_id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'sex' => $this->input->post('sex'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'weight' => $this->input->post('weight'),
            'date' => $this->input->post('date'),
            'diagnosis' => $this->input->post('diagnosis'),
            'prescription' => $this->input->post('prescription'),
            'district' => $this->input->post('district'),
            'occupation' => $this->input->post('occupation'),
            'present_co' => $this->input->post('present_co'),
            'mental' => $this->input->post('mental'),
            'apetite' => $this->input->post('apetite'),
            'thirst' => $this->input->post('thirst'),
            'bowel' => $this->input->post('bowel'),
            'urine' => $this->input->post('urine'),
            'sleep' => $this->input->post('sleep'),
            'menses' => $this->input->post('menses'),
            'habits' => $this->input->post('habits'),
            'bp' => $this->input->post('bp'),
            'pulse' => $this->input->post('pulse'),
            'temperature' => $this->input->post('temperature'),            
            'tongue' => $this->input->post('tongue'),
            'dreams' => $this->input->post('dreams'),
            'past_ho' => $this->input->post('past_ho'),
            'family_ho' => $this->input->post('family_ho'),
            'father' => $this->input->post('father'),
            'mother' => $this->input->post('mother'),
            'grandfather' => $this->input->post('grandfather'),
            'grandmother' => $this->input->post('grandmother'),
            'grandfather1' => $this->input->post('grandfather1'),
            'grandmother1' => $this->input->post('grandmother1'),
            // 'type' => $this->input->post('type')   
        );
        
        $this->Common_model->insert('follow_up',$data1);
        redirect('patients/view');
    }

    public function delete()
    {
        echo $id = $this->uri->segment('3');
        $this->Common_model->delete('patients','id',$id);
        $this->Common_model->delete('follow_up','patients_id',$id);
        $this->Common_model->delete('reports','patients_id',$id);
        redirect('patients/view');
    }

    public function profile()
    {
        $id = $this->uri->segment('3');
        $data['patients'] = $this->Common_model->get_data_by_id('patients',$id,'id');
        $data['follow_up'] = $this->Common_model->get_data_by_id('follow_up',$id,'patients_id');
        $data['view'] = $this->Reports_model->view_reports($id);
        
        $this->load->view('includes/header');
        $this->load->view('profile',$data);
        $this->load->view('includes/footer');
    }
}
?>