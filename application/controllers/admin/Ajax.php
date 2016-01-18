<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    /**
     *Controller to generate ajax request data
     */
    var $gen_contents = array();
    // view more function to display popup data
    public function viewmore($from = "", $data_id = ""){
        switch ($from) {
            case "leads":
                //echo "here"; die();
                $this->load->model('admin/admin_model');
                $data['from']   = "leads";
                $data['ld']     = $this->admin_model->get_leads_details($data_id);  // get lead details
                $this->load->view("admin/ajax_data",$data);
                break;

            default:
                break;
        }
        
    }
}
