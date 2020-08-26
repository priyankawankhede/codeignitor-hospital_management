<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index()
    {
        $data['product'] = $this->Product_model->view();
        $data['patient'] = $this->Product_model->patients();

        $this->load->view('includes/header');
        $this->load->view('product',$data);
        $this->load->view('includes/footer');
    }

    public function add()
    {
        echo $patients_id = $this->input->post('patients_id');
        $array = $this->Product_model->get_name_by_id($patients_id);
        $name = $array[0]->name;


        $data = array(
            'patients_id' => $this->input->post('patients_id'),
            'patients_name' => $name,
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'quantity' => $this->input->post('quantity'),
            'daily_fees' => $this->input->post('daily_fees'),
            'date' => $this->input->post('date')
        );

        $this->Common_model->insert('product',$data);
        redirect('products/view');
    }

    public function delete()
    {
        echo $id = $this->uri->segment('3');
        $this->Common_model->delete('product','id',$id);
        redirect('products/view');
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = array(
            'patients_id' => $this->input->post('patients_id'),
            'name' => $this->input->post('name'),
            'quantity' => $this->input->post('quantity'),
            'price' => $this->input->post('price'),
            'daily_fees' => $this->input->post('daily_fees'),
            'date' => $this->input->post('date')
        );

        $this->Common_model->update('product',$data,'id',$id);
        redirect('products/view');
    }

    
}