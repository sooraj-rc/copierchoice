<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    /**
     * Index Page for this controller.
     */
    var $gen_contents = array();
    //default index page
    public function index() {
        $this->template->write_view('content', 'home', $this->gen_contents);
        $this->template->render();
    }
    // sample functio to test multi form submit
    public function mf() {
        
        $this->template->write_view('content', 'multi-form', $this->gen_contents);
        $this->template->render();
    }
    // get quote controller 
    public function getquote($type_id = '') {        
        $this->load->model('web_model');
        //$this->gen_contents['lead_types'] = $this->web_model->get_lead_types();
        if($type_id==''){
            $this->template->write_view('content', 'leadtype-form', $this->gen_contents);
            $this->template->render();
        }
        else if(!empty($type_id)){
            $this->gen_contents['lead_id']  = $this->web_model->lead_init($type_id);
            $this->gen_contents['qns_ans']  = $this->web_model->get_question_answers($type_id);
            $this->gen_contents['brands']   = $this->web_model->get_brands();
            $this->template->write_view('content', 'rfq-form', $this->gen_contents);
            $this->template->render();
        }
    }
}
