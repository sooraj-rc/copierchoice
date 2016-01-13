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
            if($query->num_rows() == 0){
                $this->db->where("cat_id",$catid);
                $this->db->update("product_categories",$cdata);
                return "edited";
            }
            else {
                return "exists";
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
    public function get_packages($type = "list") {
        $this->db->select("*");
        $this->db->from('packages');
        $this->db->where(array('status' => 'A'));
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
            $this->db->select("*");
            $this->db->from("product_categories");
            $this->db->where("description",$packdata);
            $query = $this->db->get();
            if($query->num_rows() == 0){
                $this->db->where("packageID",$pack_id);
                $this->db->update("packages",$packdata);
                return "edited";
            }
            else {
                return "exists";
            }
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
    
}
