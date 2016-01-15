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
                
                $this->load->model('admin/admin_model');
                $this->gen_contents['from'] = "leads";
                $this->gen_contents['leads_details'] = $this->admin_model->get_leads_details($data_id);
                $this->template->write_view('content', "", $this->gen_contents);
                break;

            default:
                break;
        }
        
    }
}
