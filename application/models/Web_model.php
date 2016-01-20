<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Web_model extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        ini_set("display_errors", "0");
        error_reporting(0);
    }

    //get lead types
    public function get_lead_types() {
        $this->db->select("*");
        $this->db->from("lead_types");
        $this->db->order_by("lead_type_id");
        $this->db->limit(2);                    // comment this line when all questions of remaining lead type will entered
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    // function to get questions and answers
    public function get_question_answers($type_id) {
        $where = array(
            'lead_type_id' => $type_id
        );
        $this->db->select("*");
        $this->db->from("lead_questions");
        $this->db->where($where);
        $this->db->order_by("qn_order");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            //p($query->result_array());
            //return $query->result_array();
            $qns = $query->result_array();
            foreach ($qns as $qn) {
                $qa[] = array(
                    "question_id" => $qn['question_id'],
                    "lead_type_id" => $qn['lead_type_id'],
                    "question" => $qn['question'],
                    "qn_order" => $qn['qn_order'],
                    "specification" => $qn['specification'],
                    "lead_price_matching" => $qn['lead_price_matching'],
                    "answer_type" => $qn['answer_type'],
                    "answers" => $this->get_answers($qn['question_id']) //appending answers
                );
            }
            //p($qa);
            return $qa;
        } else {
            return false;
        }
    }

    //function to get answers
    public function get_answers($question_id = '') {
        $where = array(
            'question_id' => $question_id
        );
        $this->db->select("*");
        $this->db->from("lead_question_answers");
        $this->db->where($where);
        $this->db->order_by("aid");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return '';
        }
    }

    //get brands/makers 
    public function get_brands() {
        $this->db->select("*");
        $this->db->from('makers m');
        $where = array(
            'm.status' => 'A'
        );
        $this->db->where($where);
        $this->db->order_by("m.maker");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return '';
        }
    }

    //intialize lead answering
    public function lead_init($type_id) {
        $sess_id = session_id();
        $ldata = array(
            "lead_type_id" => $type_id,
            "sess_id" => $sess_id,
        );
        $where = array("sess_id"=>$sess_id);
        $this->db->select("*");
        $this->db->from("leads_details");
        $this->db->where($where);
        $query = $this->db->get();
        if($query->num_rows() == 0){
            $this->db->insert("leads_details",$ldata);
            $lead_id = $this->db->insert_id();
        }
        else{
            $ldata = $query->result_array();
            $lead_id = $ldata[0][lead_id];
        }
        return $lead_id;
    }
    
    //process lead answer
    public function process_answer($adata) {
        $this->db->insert("leads_response",$adata);
        //echo $this->db->last_query();
    }

}
