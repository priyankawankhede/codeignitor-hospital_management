<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['daily_patients'] = $this->Patients_model->daily_patient();
        $data['monthly_patients'] = $this->Patients_model->monthly_patient();
        $data['total_patients'] = $this->Patients_model->total_patient();

        $data['daily_product'] = $this->Product_model->daily_product();
        $data['monthly_product'] = $this->Product_model->monthly_product();
        $data['total_product'] = $this->Product_model->total_product();

        $data['daily_amount'] = $this->Product_model->daily_amount_product();
        $data['total_amount'] = $this->Product_model->total_product_amount();
        $data['monthly_product_amount'] = $this->Product_model->monthly_product_amount();

        $data['daily_patient_amount'] = $this->Product_model->daily_patient_fees();
        $data['total_patient_fees'] = $this->Product_model->total_patient_fees();
        $data['monthly_patient_fees'] = $this->Patients_model->monthly_patient_fees();

        $data['follow_up_daily'] = $this->Patients_model->daily_follow_up();
        $data['follow_up_monthly'] = $this->Patients_model->monthly_follow_up();
        $data['follow_up_total'] = $this->Patients_model->total_follow_up();

        $this->load->view('includes/header');
        $this->load->view('dashboard',$data);
        $this->load->view('includes/footer');
    }
}

?>



<!-- designed and developed by priyanka wankhede -->