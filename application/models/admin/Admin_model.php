<?php

class Admin_model extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        ini_set("display_errors", "0");
        error_reporting(0);
    }
    
    // get product categories function
    public function get_categories($type = "list"){
        $this->db->select("*");
        $this->db->from('product_categories');
        $this->db->where(array('parent_id' => 0,'status' => 'A'));
        $this->db->order_by("cat_name");
        $query = $this->db->get();
        if($type == 'list'){
            return $query->result_array();
        } else {
            return $query->num_rows();
        }
    }
    
    // process category - add/edit/delete
    public function process_category($mode,$catdata){
        $catname    = $catdata['catname'];
        $catid      = $catdata['catid'];
        $cdata = array(
          "cat_name" => $catname
        );
        
        if($mode == "add"){
            $this->db->select("*");
            $this->db->from("product_categories");
            $this->db->where("cat_name",$catname);
            $query = $this->db->get();
            if($query->num_rows() == 0){
                $this->db->insert("product_categories",$cdata);
                return "added";
            }
            else {
                return "exists";
            }
        }
        if($mode == "edit"){
            $this->db->select("*");
            $this->db->from("product_categories");
            $this->db->where("cat_name",$catname);
            $query = $this->db->get();
            if($query->num_rows() == 1){
                $this->db->where("cat_id",$catid);
                $this->db->update("product_categories",$cdata);
                return "edited";
            }
        }
        if($mode == "delete"){
            $cdata_del = array(
                "status"    => "D"
            );
            $this->db->where("cat_id",$catid);
            $this->db->update("product_categories",$cdata_del);
            return "deleted";
        }
    }

    // function to get category name 
    public function get_catname($catid){
        $this->db->select("cat_name");
        $this->db->from("product_categories");
        $this->db->where("cat_id",$catid);
        $query = $this->db->get();
        $res = $query->result_array();
        return $res[0]["cat_name"];
    }
    
    // function to get packages
    public function get_packages($type = "list", $pack_id="") {
        $this->db->select("*");
        $this->db->from('packages');
        if(!empty($pack_id)){
            $where = array(
                'status'    => 'A',
                'packageID' => $pack_id
            );
        }
        else{
            $where = array(
                'status'    => 'A'
            );
        }
        $this->db->where($where);
        $this->db->order_by("description");
        $query = $this->db->get();
        if($type == 'list'){
            return $query->result_array();
        } else {
            return $query->num_rows();
        }
    }
    
    
    // function to add/edit/delete packages
    public function process_package($mode, $packdata){
        $pack_name  = $packdata['description'];
        $pack_id    = $packdata['packageID'];
        if($mode == "add"){
            $this->db->select("*");
            $this->db->from("packages");
            $this->db->where("description",$pack_name);
            $query = $this->db->get();
            if($query->num_rows() == 0){
                $this->db->insert("packages",$packdata);
                return "added";
            }
            else {
                return "exists";
            }
        }
        if($mode == "edit"){
            $this->db->where("packageID",$pack_id);
            $this->db->update("packages",$packdata);
            return "edited";
        }
        if($mode == "delete"){
            $pdata_del = array(
                "status"    => "D"
            );
            $this->db->where("packageID",$pack_id);
            $this->db->update("packages",$pdata_del);
            return "deleted";
        }
    }
    
    // function to get makers
    public function get_makers($type = "list", $maker_id="") {
        $this->db->select("*");
        $this->db->from('makers m');
        $this->db->join("product_categories pc", "pc.cat_id = m.cat_id", "left");
        if(!empty($maker_id)){
            $where = array(
                'm.status'    => 'A',
                'm.makerID' => $maker_id
            );
        }
        else{
            $where = array(
                'm.status'    => 'A'
            );
        }
        $this->db->where($where);
        $this->db->order_by("m.maker");
        $query = $this->db->get();
        if($type == 'list'){
            return $query->result_array();
        } else {
            return $query->num_rows();
        }
    }
    
    // function to add/edit/delete makers
    public function process_makers($mode, $makerdata){
        $maker      = $makerdata['maker'];
        $maker_id   = $makerdata['makerID'];
        $cat_id     = $makerdata['cat_id'];
        if($mode == "add"){
            $where = array(
                'maker'     => $maker,
                'cat_id'    => $cat_id
            );
            $this->db->select("*");
            $this->db->from("makers");
            $this->db->where($where);
            $query = $this->db->get();
            if($query->num_rows() == 0){
                $this->db->insert("makers",$makerdata);
                return "added";
            }
            else {
                return "exists";
            }
        }
        if($mode == "edit"){
            $this->db->where("makerID",$maker_id);
            $this->db->update("makers",$makerdata);
            return "edited";
        }
        if($mode == "delete"){
            $mdata_del = array(
                "status"    => "D"
            );
            $this->db->where("makerID",$maker_id);
            $this->db->update("makers",$mdata_del);
            return "deleted";
        }
    }
    
    //function to get users(sellers)
    public function get_users($limit, $start){
        $this->db->select("*");
        $this->db->from('users');
        $where = array(
            'status'    => 'Active'
        );
        $this->db->where($where);
        $this->db->order_by("contact_name");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
    
    function get_users_count(){
        $count = $this->db->count_all("users");
        return $count;
    }
    
}
