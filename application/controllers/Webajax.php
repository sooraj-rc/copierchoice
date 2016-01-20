<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Webajax extends CI_Controller {

    /**
     *Controller to generate ajax request data
     */
    var $gen_contents = array();
    // view more function to display popup data
    public function post_step(){      
        $this->load->model("web_model");
        $qid = $this->input->get("qid");
        $ans = $this->input->get("ans");
        $lead_id = $this->input->get("lid");
        //echo $ans; die();
        $adata = array(
            'lead_id' => $lead_id,
            'question_id' => $qid,
            'answer_id' => $ans
        );
        $this->web_model->process_answer($adata);
        //echo "completed";
    }
}


